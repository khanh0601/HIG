<?php

/**
 * Template Name: Tuyển dụng
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('tuyen-dung-style', get_template_directory_uri() . '/css/recruit.css', [], '2.3.1');

get_header();
$pageID = get_queried_object_id();
$banner_img         = wp_get_attachment_url(tr_posts_field('recruit_banner_img',$pageID));
$banner_label       = tr_posts_field('recruit_banner_label',$pageID);
$banner_title       = tr_posts_field('recruit_banner_title',$pageID);
$banner_description = tr_posts_field('recruit_banner_description',$pageID);

$benefit_img        = wp_get_attachment_url(tr_posts_field('recruit_benefit_img',$pageID));
$benefit_title      = tr_posts_field('recruit_benefit_title',$pageID);
$benefit_desc       = tr_posts_field('recruit_benefit_desc',$pageID);

$career_title       = tr_posts_field('recruit_job_title',$pageID); // có vẻ trùng với benefit_title
$job_items = tr_posts_field('recruit_job_items',$pageID);
?>
<section class="recruit__hero">
  <div class="recruit__hero__wrap">
    <div class="recruit__hero__img image__full">
      <img src="<?= wp_kses_post($banner_img) ?>" alt="">
    </div>
    <div class="recruit__hero__txt">
      <div class="recruit__hero__subtitle subtitle__banner"><?= wp_kses_post($banner_label) ?></div>
      <div class="recruit__hero__smalltitle title__banner"><?= wp_kses_post($banner_title) ?></div>
      <div class="recruit__hero__des"><?= wp_kses_post($banner_description) ?></div>
    </div>
  </div>
</section>
<section class="recruit__benefit">
  <div class="recruit__benefit__wrap">
    <div class="recruit__benefit__inner">
      <div class="recruit__benefit__left">
        <div class="recruit__benefit__left__title txt-poppin"><?= wp_kses_post($benefit_title) ?></div>
        <div class="recruit__benefit__left__des">
          <div class="recruit__benefit__left__des__txt"><?= wp_kses_post($benefit_desc) ?></div>

        </div>
      </div>
      <div class="recruit__benefit__right image__full">
        <img src="<?= wp_kses_post($benefit_img) ?>" alt="">
      </div>
    </div>
  </div>
</section>
<section class="recruit__opportunity">
  <div class="recruit__opportunity__title txt-poppin"><?= wp_kses_post($career_title) ?></div>
  <div class="recruit__opportunity__table">
    <div class="recruit__opportunity__table__name">
      <div class="recruit__opportunity__table__num recruit__txt">STT</div>
      <div class="recruit__opportunity__table__pos recruit__txt">VỊ TRÍ TUYỂN DỤNG</div>
      <div class="recruit__opportunity__table__date recruit__txt">NGÀY HẾT HẠN</div>
      <div class="recruit__opportunity__table__locate recruit__txt">NƠI LÀM VIỆC</div>
    </div>
    <?php
    $job_items = tr_posts_field('recruit_job_items');

    if (!empty($job_items) && is_array($job_items)) :
      $index = 1;
      foreach ($job_items as $item) :
        $title = $item['title'] ?? '';
        $location = $item['location'] ?? '';
        $date = $item['date'] ?? '';
        $desc = $item['desc'] ?? '';
    ?>
        <div class="recruit__opportunity__table__row">
          <div class="recruit__opportunity__table__row__inner">
            <div class="recruit__opportunity__table__num recruit__txt">
              <div class="recruit__opportunity__table__label">STT</div><?php echo str_pad($index, 2, '0', STR_PAD_LEFT); ?>
            </div>
            <div class="recruit__opportunity__table__pos recruit__txt">
              <div class="recruit__opportunity__table__label">Vị trí tuyển dụng</div><?php echo esc_html($title); ?>
            </div>
            <div class="recruit__opportunity__table__date recruit__txt1">
              <div class="recruit__opportunity__table__label">Ngày hết hạn</div><?php echo esc_html($date); ?>
            </div>
            <div class="recruit__opportunity__table__locate recruit__txt1">
              <div class="recruit__opportunity__table__label">Nơi làm việc</div><?php echo esc_html($location); ?>
            </div>
            <div class="recruit__opportunity__table__btn">Xem thêm</div>
            <div class="recruit__opportunity__table__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vector-5.png" alt="">
            </div>
          </div>

          <div class="recruit__opportunity__table__row__detail">
            <div class="recruit__opportunity__table__row__detail__des">
              <?php
              // Phân đoạn nội dung nếu bạn dùng dấu xuống dòng trong editor
              $desc_lines = explode("\n", wp_strip_all_tags($desc));
              foreach ($desc_lines as $line) :
                if (trim($line)) :
              ?>
                  <div class="recruit__opportunity__table__row__detail__des__txt"><?php echo (trim($desc)); ?></div>
              <?php endif;
              endforeach; ?>
            </div>
            <div class="recruit__opportunity__apply">ỨNG TUYỂN</div>
          </div>
        </div>
    <?php
        $index++;
      endforeach;
    endif;
    ?>

  </div>
  <div class="recruit__opportunity__form">
    <div class="recruit__opportunity__form__inner">
      <div class="recruit__opportunity__form__close">x</div>
      <div class="recruit__opportunity__form__wrap">
        <div class="recruit__opportunity__form__title">Nộp hồ sơ ứng tuyển</div>
        <div class="recruit__opportunity__form__input">
          <div class="recruit__opportunity__form__input__left">
            <input type="text" placeholder="Họ và tên" required />
            <input type="email" placeholder="Email" required />
            <input type="tel" placeholder="Số điện thoại" required />
          </div>
          <div class="recruit__opportunity__form__input__right">
            <textarea placeholder="Ghi chú"></textarea>
            <div class="recruit__opportunity__form__input__right__select">
              <select required>
                <option disabled selected>Vị trí ứng tuyển</option>
                <option>Nhân viên hành chính</option>
                <option>Chuyên viên nhân sự</option>
              </select>
              <div class="recruit__opportunity__form__input__right__selecticon image__full">
                <img src="./assets/img/icon_down.svg" alt="">
              </div>

            </div>
          </div>
          <div class="recruit__opportunity__form__input__cv">
            <input type="file" name="file-cv" id="file" />
            <label for="file">Gửi Kèm CV</label>
            <span class="upload-icon image__full">
              <img src="./assets/img/icon-attach.svg" alt="">
            </span>
          </div>

        </div>
        <button class="recruit__opportunity__form__submit" type="submit"><span>ĐĂNG KÝ</span></button>
      </div>
    </div>
  </div>
</section>
<?php
wp_enqueue_script('recruit-js', get_template_directory_uri() . '/js/recruit.js', [], SITE_VERSION, true);

get_footer(); ?>