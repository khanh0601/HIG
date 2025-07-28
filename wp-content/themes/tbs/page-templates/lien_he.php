<?php

/**
 * Template Name: Liên hệ
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/contact.css', [], '2.3.1');
get_header();
$pageID = get_queried_object_id();
$banner_img         = wp_get_attachment_url(tr_posts_field('contact_banner_img', $pageID));
$banner_label       = tr_posts_field('contact_banner_label', $pageID);
$banner_title       = tr_posts_field('contact_banner_title', $pageID);
$address_main = tr_options_field('tr_theme_options.address_main');
$address_nam = tr_options_field('tr_theme_options.address_nam');
$address_japan = tr_options_field('tr_theme_options.address_japan');
$phone = tr_options_field('tr_theme_options.phone');
$email = tr_options_field('tr_theme_options.email');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
  $name    = sanitize_text_field($_POST['contact_name']);
  $phone   = sanitize_text_field($_POST['contact_phone']);
  $email   = sanitize_email($_POST['contact_email']);
  $message = sanitize_textarea_field($_POST['contact_message']);

  // Validate đơn giản
  $errors = [];
  if (empty($name) || empty($phone) || !is_email($email)) {
    $errors[] = 'Vui lòng điền đầy đủ thông tin hợp lệ.';
  }

  if (empty($errors)) {
    $to      = get_option('admin_email'); // Hoặc thay bằng email bạn muốn
    $subject = 'Yêu cầu liên hệ từ website';
    $body    = "Họ tên: $name\n";
    $body   .= "Điện thoại: $phone\n";
    $body   .= "Email: $email\n";
    $body   .= "Nội dung:\n$message";

    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
      $success_message = 'Cảm ơn bạn! Thông tin đã được gửi.';
    } else {
      $errors[] = 'Gửi mail thất bại. Vui lòng thử lại.';
    }
  }
}

?>
<section class="contact__hero">
  <div class="contact__hero__wrap">
    <div class="contact__hero__img image__full">
      <img src="<?= wp_kses_post($banner_img) ?>" alt="" />
    </div>
    <div class="contact__hero__txt">
      <div class="contact__hero__subtitle subtitle__banner"><?= wp_kses_post($banner_label) ?></div>
      <div class="contact__hero__smalltitle title__banner">
        <?= wp_kses_post($banner_title) ?>
      </div>
    </div>
  </div>
</section>
<section class="contact__content">
  <div class="contact__content__inner">
    <div class="contact__content__left">
      <div class="contact__content__left__title">LIÊN HỆ</div>
      <form class="contact__content__left__inner" method="post">
        <input type="text" name="contact_name" placeholder="Họ tên (*)" required />
        <input type="tel" name="contact_phone" placeholder="Điện thoại (*)" required />
        <input type="email" name="contact_email" placeholder="Emai(*)" required />
        <textarea name="contact_message" placeholder="Nội dung"></textarea>
        <button class="contact__content__submit" type="submit" name="contact_submit">GỬI NGAY</button>
      </form>

      <?php if (!empty($success_message)) : ?>
        <div class="form__success"><?php echo esc_html($success_message); ?></div>
      <?php endif; ?>

      <?php if (!empty($errors)) : ?>
        <div class="form__errors">
          <?php foreach ($errors as $error) : ?>
            <div class="form__error"><?php echo esc_html($error); ?></div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>
    <div class="contact__content__right">
      <div class="contact__content__right__inner">
        <div class="contact__content__right__title">Trụ sở chính</div>
        <div class="contact__content__right__des">
          <?= wp_kses_post($address_main) ?>
        </div>
      </div>
      <div class="contact__content__right__inner">
        <div class="contact__content__right__title">
          Văn Phòng Miền Nam:
        </div>
        <div class="contact__content__right__des">
          <?= wp_kses_post($address_nam) ?>
        </div>
      </div>
      <div class="contact__content__right__inner">
        <div class="contact__content__right__title">
          Văn Phòng Tại Nhật Bản:
        </div>
        <div class="contact__content__right__des">
          <?= wp_kses_post($address_japan) ?>
        </div>
        <div class="contact__content__right__des">
          Hotline: <?= wp_kses_post($phone) ?>
        </div>
        <div class="contact__content__right__des">
          Email: <?= wp_kses_post($email) ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer(); ?>