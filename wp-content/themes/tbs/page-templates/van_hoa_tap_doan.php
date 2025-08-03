<?php

/**
 * Template Name: Văn hóa tập đoàn
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('van-hoa-style', get_template_directory_uri() . '/css/van-hoa-tap-doan.css', array(), '2.3.2');
get_header();
$pageID = get_queried_object_id();

// Banner
$banner_video_id = tr_posts_field('banner_img', $pageID);
$banner_video_url = wp_get_attachment_url($banner_video_id);
$banner_label = tr_posts_field('banner_label', $pageID);
$banner_title1 = tr_posts_field('banner_title1', $pageID);
$banner_title2 = tr_posts_field('banner_title2', $pageID);
$banner_title3 = tr_posts_field('banner_title3', $pageID);

// Highway - Văn hóa doanh nghiệp
$highway_title = tr_posts_field('highway_title', $pageID);
$highway_desc = tr_posts_field('highway_desc', $pageID);

// Cards - Văn hóa doanh nghiệp
$card_items = tr_posts_field('card_items', $pageID);

// Mục đích - Trách nhiệm xã hội
$purpose_title = tr_posts_field('purpose_title', $pageID);
$purpose_sub = tr_posts_field('purpose_sub', $pageID);

// Phát triển - Trách nhiệm xã hội
$develop_title_big = tr_posts_field('develop_title_big', $pageID);
$develop_title_small = tr_posts_field('develop_title_small', $pageID);
$develop_title_sub = tr_posts_field('develop_title_sub', $pageID);
$develop_items = tr_posts_field('develop_item', $pageID); // repeater

// Responsibility - Trách nhiệm xã hội
$responsibility_title = tr_posts_field('responsibility_title', $pageID);
$responsibility_sub = tr_posts_field('responsibility_sub', $pageID);
$responsibility_items = tr_posts_field('responsibility_items', $pageID); // repeater

// Định hướng
$orientation_title = tr_posts_field('orientation_title', $pageID);

// H Đông Dương
$dong_duong_title = tr_posts_field('dong_duong_title', $pageID);
$dong_duong_sub = tr_posts_field('dong_duong_sub', $pageID);

// Đối tác
$partner_title = tr_posts_field('partner_title', $pageID);
$partner_items = tr_posts_field('partner_items', $pageID); // repeater

// Đồng hành
$companion_title = tr_posts_field('companion_title', $pageID);

// Khách hàng
$customer_title = tr_posts_field('customer_title', $pageID);
$customer_items = tr_posts_field('customer_items', $pageID);
?>
<section class="hero-banner position-relative">
 
<video class="w-100 img-banner" autoplay loop muted playsinline>
  <source src="<?= wp_kses_post($banner_video_url) ?>" type="video/mp4">
  Trình duyệt của bạn không hỗ trợ video.
</video>
  <div class="hero-content-wrap">
    <div class="hero-content active kl-container text-left text-white">
      <h5 class="fs-36"><?= wp_kses_post($banner_label) ?></h5>
      <h1 class="fs-56" id="bannerTitle"><?= wp_kses_post(nl2br($banner_title1)) ?></h1>
    </div>
    <div class="hero-content kl-container text-left text-white">
      <h5 class="fs-36"><?= wp_kses_post($banner_label) ?></h5>
      <h1 class="fs-56" id="bannerTitle"><?= wp_kses_post(nl2br($banner_title2)) ?></h1>
    </div>
    <div class="hero-content kl-container text-left text-white">
      <h5 class="fs-36"><?= wp_kses_post($banner_label) ?></h5>
      <h1 class="fs-56" id="bannerTitle"><?= wp_kses_post(nl2br($banner_title3)) ?></h1>
    </div>
  </div>

  <nav class="tabs-menu">
    <ul class="tabs-menu-wrapper">
      <li class="tabs-menu-item tab-title-1 active">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Văn Hóa Doanh Nghiệp</a>
      </li>
      <li class="tabs-menu-item tab-title-2">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Trách Nhiệm Xã Hội</a>
      </li>
      <li class="tabs-menu-item tab-title-3">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Đối Tác & Khách Hàng</a>
      </li>
    </ul>
  </nav>
</section>
<div class="tab-content-1">
  <div class="highway-container">
    <div class="highway-overlay"></div>
    <div class="kl-container">
      <div class="highway-content" data-aos="fade-up">
        <div class="highway-header">
          <div class="highway-title-section">
            <h1 class="highway-main-title section-title">
              <?= wp_kses_post(nl2br($highway_title)) ?>
            </h1>
          </div>

          <div class="highway-description-section">
            <div class="highway-description">
              <?= wp_kses_post(nl2br($highway_desc)) ?>
            </div>
          </div>
        </div>

        <!-- <div class="highway-footer">
              <div class="highway-footer-text">
                Văn hóa HIGHWAY không chỉ được thể hiện bằng tài năng mà được
                lan tỏa qua từng hành vi, quyết định và dự án mà HIG để lại
                trong lòng dự án, từng con người.
              </div>
            </div> -->
      </div>
    </div>
    <div class="highway-watermark">
      <div class="highway-watermark-item">
        <img src="/wp-content/uploads/2025/07/logo-white.png" alt="" />
        <div>HIGHWAY</div>
      </div>
    </div>
  </div>

  <div class="highway-blocks">
    <?php if (!empty($card_items)) : ?>
      <?php foreach ($card_items as $item) :
        $img_url = wp_get_attachment_url($item['img']);
        $letter = wp_kses_post($item['letter']);
        $label = wp_kses_post($item['label']);
        $title = wp_kses_post($item['title']);
        $sub = wp_kses_post(nl2br($item['sub']));
      ?>
        <div class="highway-block flip-card" data-aos="fade-up">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="flip-card-bg-image" style="background-image: url('<?= esc_url($img_url) ?>');"></div>
              <div class="highway-block-char"><?= $letter ?></div>
              <div class="highway-block-category"><?= $label ?></div>
              <div class="highway-block-title"><?= $title ?></div>
            </div>
            <div class="flip-card-back">
              <div class="flip-card-bg-image" style="background-image: url('<?= esc_url($img_url) ?>');"></div>
              <div class="highway-block-category"><?= $label ?></div>
              <div class="highway-block-title"><?= $title ?></div>
              <div class="highway-block-description"><?= $sub ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div>
<div class="tab-content-2">
  <div class="intro-section base-section">
    <div class="intro-section-bg"></div>
    <div class="kl-container" data-aos="fade-up">
      <div class="intro-section-title section-title">
        <?= wp_kses_post(nl2br($purpose_title)) ?>
      </div>
      <div class="intro-section-description">
        <?= wp_kses_post(nl2br($purpose_sub)) ?>
      </div>
    </div>
  </div>
  <div class="development-section base-section">
    <div class="kl-container">
      <div class="development-section-title" data-aos="fade-up">
        <?= wp_kses_post(nl2br($develop_title_big)) ?>
      </div>
      <div
        class="development-section-sub"
        data-aos="fade-up"
        data-aos-duration="2000"
        data-aos-delay="100">
        <div class="development-section-sub-title section-title">
          <?= wp_kses_post(nl2br($develop_title_small)) ?>
        </div>
        <div class="development-section-sub-description">
          <?= wp_kses_post(nl2br($develop_title_sub)) ?>
        </div>
      </div>
      <div class="development-section-boxes">
        <?php if (!empty($develop_items)) : ?>
          <?php foreach ($develop_items as $item) :
            $img_url = wp_get_attachment_url($item['img']);
            $title = wp_kses_post($item['title']);
            $sub = wp_kses_post(nl2br($item['sub']));
          ?>
            <div
              class="development-section-box"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-delay="100">

              <div class="development-section-box-bg">
                <img src="<?= esc_url($img_url) ?>" alt="">
              </div>

              <div class="development-section-box-icon">
                <img src="<?= esc_url($img_url) ?>" alt="">
              </div>

              <div class="development-section-box-text-title"><?= $title ?></div>

              <div class="development-section-box-text-description"><?= $sub ?></div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
  <div class="community-section">
    <div class="community-section-bg"></div>
    <div class="kl-container">
      <div class="community-section-head" data-aos="fade-up">
        <div class="community-section-title section-title">
          <?= wp_kses_post(nl2br($responsibility_title)) ?>
        </div>
        <div class="community-section-description">
          <?= wp_kses_post(nl2br($responsibility_sub)) ?>
        </div>
      </div>
      <?php if (!empty($responsibility_items)) : ?>
        <div
          class="community-section-box option-1"
          data-aos="fade-up"
          data-aos-duration="2000"
          data-aos-delay="400">

          <?php
          $counter = 1;
          $total = count($responsibility_items);
          ?>

          <div class="community-section-box-buttons">
            <?php foreach ($responsibility_items as $item) :
              $img_url = wp_get_attachment_url($item['img']);
              $sub = wp_kses_post(nl2br($item['sub']));
              $selected_class = ($counter === 1) ? 'selected' : '';
              $option_class = 'option-' . $counter;
            ?>

              <div class="community-section-box-button <?= $option_class ?> <?= $selected_class ?>">
                <div class="community-section-box-button-icon">
                  <img src="<?= esc_url($img_url) ?>" alt="" />
                  <div class="community-section-box-button-icon-line"></div>
                </div>
                <div class="community-section-box-button-text"><?= $sub ?></div>
              </div>

              <?php
              // Sau item 2: đóng row, chèn khối tròn và mở row mới
              if ($counter === 2) {
                echo '</div>'; // close first .community-section-box-buttons
                echo '<div class="community-section-box-circle">
                <div class="community-section-box-circle-1"></div>
                <div class="community-section-box-circle-2"></div>
              </div>';
                echo '<div class="community-section-box-buttons">';
              }

              $counter++;
              ?>
            <?php endforeach; ?>
          </div> <!-- close last row -->
        </div>
      <?php endif; ?>

    </div>
  </div>
  <div class="quote-section">
    <div class="quote-section-bg"></div>
    <div class="kl-container">
      <div class="quote-section-content">
        <img
          class="quote-section-content-image"
          src="/wp-content/uploads/2025/07/quote-left.png"
          alt=""
          data-aos="fade-right" />
        <div class="quote-section-content-text" data-aos="fade-up">
          <?= wp_kses_post(nl2br($orientation_title)) ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tab-content-3">
  <div class="partner-intro-section base-section">
    <div class="kl-container" data-aos="fade-up">
      <div class="partner-intro-section-title section-title">
        <?= wp_kses_post(nl2br($dong_duong_title)) ?>
      </div>
      <div class="partner-intro-section-description">
        <?= wp_kses_post(nl2br($dong_duong_sub)) ?>
      </div>
    </div>
  </div>
  <div class="partner-list-section">
    <div class="kl-container">
      <div
        class="partner-list-section-title section-title"
        data-aos="fade-up">
        <?= wp_kses_post(nl2br($partner_title)) ?>
      </div>
    <?php

if (!empty($partner_items) && is_array($partner_items)) :
  $items = array_values($partner_items); // reset key về 0-based index
  $total = count($items);

  $last_group_size = 6;
  $middle_group_size = 5;

  // Cắt 6 ảnh cuối cùng
  $last_items = array_slice($items, -$last_group_size);
  $remaining_items = array_slice($items, 0, $total - $last_group_size);

  // Tính phần dư còn lại sau khi chia cho 5
  $remainder = count($remaining_items) % $middle_group_size;
  $counter = 0;
  $box_index = 1;
?>

  <!-- Box đầu tiên: chứa phần dư nếu có -->
  <?php if ($remainder > 0) : ?>
    <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
      <?php for ($i = 0; $i < $remainder; $i++, $counter++) :
        $img_url = wp_get_attachment_url($remaining_items[$counter]['img']);
      ?>
        <img
          src="<?= esc_url($img_url) ?>"
          alt=""
          class="partner-list-section-item"
          data-aos="zoom-in"
          data-aos-duration="2000" />
      <?php endfor; ?>
    </div>
    <?php $box_index++; ?>
  <?php endif; ?>

  <!-- Các box ở giữa: mỗi box 5 ảnh -->
  <?php
    $middle_total = count($remaining_items);
    $middle_start = $remainder;

    while ($middle_start < $middle_total) :
  ?>
    <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
      <?php for ($i = 0; $i < $middle_group_size; $i++, $middle_start++) :
        if (!isset($remaining_items[$middle_start]['img'])) continue;
        $img_url = wp_get_attachment_url($remaining_items[$middle_start]['img']);
      ?>
        <img
          src="<?= esc_url($img_url) ?>"
          alt=""
          class="partner-list-section-item"
          data-aos="zoom-in"
          data-aos-duration="2000" />
      <?php endfor; ?>
    </div>
    <?php $box_index++; ?>
  <?php endwhile; ?>

  <!-- Box cuối cùng: chứa đúng 6 ảnh cuối -->
  <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
    <?php foreach ($last_items as $item) :
      $img_url = wp_get_attachment_url($item['img']);
    ?>
      <img
        src="<?= esc_url($img_url) ?>"
        alt=""
        class="partner-list-section-item"
        data-aos="zoom-in"
        data-aos-duration="2000" />
    <?php endforeach; ?>
  </div>

<?php endif; ?>



    </div>
  </div>
  <div class="partner-marquee-container">
    <div class="partner-marquee-bg"></div>
    <div class="partner-marquee">
      <div class="partner-marquee-text">
        <?= wp_kses_post(nl2br($companion_title)) ?>
      </div>
    </div>
  </div>
  <div class="client-list-section">
    <div class="kl-container">
      <div
        class="client-list-section-title section-title"
        data-aos="fade-up">
        <?= wp_kses_post(nl2br($customer_title)) ?>
      </div>
      <?php
$customer_items = tr_posts_field('customer_items', $pageID);

if (!empty($customer_items) && is_array($customer_items)) :
  $items = array_values($customer_items); // Reset index
  $total = count($items);

  $last_group_size = 6;
  $middle_group_size = 5;

  // Cắt 6 ảnh cuối cùng
  $last_items = array_slice($items, -$last_group_size);
  $remaining_items = array_slice($items, 0, $total - $last_group_size);

  $remainder = count($remaining_items) % $middle_group_size;
  $counter = 0;
  $box_index = 1;
?>

  <!-- Box đầu tiên: chứa phần dư -->
  <?php if ($remainder > 0) : ?>
    <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
      <?php for ($i = 0; $i < $remainder; $i++, $counter++) :
        $img_url = wp_get_attachment_url($remaining_items[$counter]['img']);
      ?>
        <img
          src="<?= esc_url($img_url) ?>"
          alt=""
          class="partner-list-section-item"
          data-aos="zoom-in"
          data-aos-duration="2000" />
      <?php endfor; ?>
    </div>
    <?php $box_index++; ?>
  <?php endif; ?>

  <!-- Các box giữa: mỗi box 5 ảnh -->
  <?php
    $middle_total = count($remaining_items);
    $middle_start = $remainder;

    while ($middle_start < $middle_total) :
  ?>
    <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
      <?php for ($i = 0; $i < $middle_group_size && $middle_start < $middle_total; $i++, $middle_start++) :
        $img_url = wp_get_attachment_url($remaining_items[$middle_start]['img']);
      ?>
        <img
          src="<?= esc_url($img_url) ?>"
          alt=""
          class="partner-list-section-item"
          data-aos="zoom-in"
          data-aos-duration="2000" />
      <?php endfor; ?>
    </div>
    <?php $box_index++; ?>
  <?php endwhile; ?>

  <!-- Box cuối cùng: luôn 6 ảnh cuối -->
  <div class="partner-list-section-items partner-list-section-items-<?= $box_index ?>">
    <?php foreach ($last_items as $item) :
      $img_url = wp_get_attachment_url($item['img']);
    ?>
      <img
        src="<?= esc_url($img_url) ?>"
        alt=""
        class="partner-list-section-item"
        data-aos="zoom-in"
        data-aos-duration="2000" />
    <?php endforeach; ?>
  </div>

<?php endif; ?>


    </div>
  </div>
</div>

<?php get_footer(); ?>
<script>
  function Marquee(selector, speed) {
    const parentSelector = document.querySelector(selector);
    const clone = parentSelector.innerHTML;
    const firstElement = parentSelector.children[0];
    let i = 0;

    const cloneTimes = 20;
    for (let i = 0; i < cloneTimes; i++) {
      parentSelector.insertAdjacentHTML('beforeend', clone);
    }

    setInterval(function() {
      firstElement.style.marginLeft = `-${i}px`;
      if (i > firstElement.clientWidth * cloneTimes) {
        i = 0;
      }
      i = i + speed;
    }, 0);
  }

  $(document).ready(function() {
    AOS.init({
      duration: 1000,
      offset: 100,
    });

    $('.tabs-menu-item-link').click(function(e) {
      e.preventDefault();
      let index = $(this).closest('.tabs-menu-item').index();
      console.log(index)
      $('.hero-content').removeClass('active');
      $('.hero-content').eq(index).addClass('active');
    });

    Marquee('.highway-watermark', 0.7);
    Marquee('.partner-marquee', 1);

    $('.community-section-box-button').click(function() {
      // Remove 'selected' class from all buttons
      $('.community-section-box-button').removeClass('selected');

      // Add 'selected' class to clicked button
      $(this).addClass('selected');

      // Get the option class (option-1, option-2, etc.) from clicked button
      let optionClass = $(this)
        .attr('class')
        .split(' ')
        .find(cls => cls.startsWith('option-'));

      // Remove any existing option classes from parent
      $('.community-section-box').removeClass(function(index, className) {
        return (className.match(/option-\d/g) || []).join(' ');
      });

      // Add the corresponding option class to parent
      $('.community-section-box').addClass(optionClass);
    });

    $('.flip-card').on('click', function() {
      $(this).toggleClass('show');
    });
      
  });
</script>