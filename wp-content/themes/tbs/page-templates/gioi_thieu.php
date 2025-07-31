<?php

/**
 * Template Name: Giới Thiệu
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about-us.css', array(), '2.3.4');
wp_enqueue_style('gioi-thieu-style', get_template_directory_uri() . '/css/gioi-thieu.css', array(), '2.3.5');
get_header();
$pageID = get_queried_object_id();
$about_banner_img = wp_get_attachment_url(tr_posts_field('about_banner_img', $pageID));
$about_banner_label = tr_posts_field('about_banner_label', $pageID);
$about_banner_title = tr_posts_field('about_banner_title', $pageID);
$about_banner_description = tr_posts_field('about_banner_description', $pageID);
$about_ecosystem_title = tr_posts_field('about_ecosystem_title', $pageID);
$about_ecosystem_desc = tr_posts_field('about_ecosystem_desc', $pageID);
$about_ecosystem_title = tr_posts_field('about_ecosystem_title', $pageID);
$about_ecosystem_img_left = wp_get_attachment_url(tr_posts_field('about_ecosystem_img_left', $pageID));
$about_ecosystem_img_right = wp_get_attachment_url(tr_posts_field('about_ecosystem_img_right', $pageID));
$about_vision_title = tr_posts_field('about_vision_title', $pageID);
$about_vision_sub = tr_posts_field('about_vision_sub', $pageID);
$about_vision_desc = tr_posts_field('about_vision_desc', $pageID);
$about_mission_title = tr_posts_field('about_mission_title', $pageID);
$about_mission_sub = tr_posts_field('about_mission_sub', $pageID);
$about_mission_sub2 = tr_posts_field('about_mission_sub2', $pageID);
$about_mission_desc = tr_posts_field('about_mission_desc', $pageID);
$about_value_title = tr_posts_field('about_value_title', $pageID);
$about_value_sub = tr_posts_field('about_value_sub', $pageID);
$about_value_items = tr_posts_field('about_value_items', $pageID);
$about_talk_title = tr_posts_field('about_talk_title', $pageID);
$about_talk_sub = tr_posts_field('about_talk_sub', $pageID);
$about_banner2_img = wp_get_attachment_url(tr_posts_field('about_banner2_img', $pageID));
$about_banner2_label = tr_posts_field('about_banner2_label', $pageID);
$about_banner2_title = tr_posts_field('about_banner2_title', $pageID);
$about_banner2_description = tr_posts_field('about_banner2_description', $pageID);
$about_talk2_title = tr_posts_field('about_talk2_title', $pageID);
$about_talk2_name = tr_posts_field('about_talk2_name', $pageID);
$about_talk2_position = tr_posts_field('about_talk2_position', $pageID);
$about_talk2_img = wp_get_attachment_url(tr_posts_field('about_talk2_img', $pageID));
$about_team_title = tr_posts_field('about_team_title', $pageID);
$about_team_name = tr_posts_field('about_team_name', $pageID);
$about_team_position = tr_posts_field('about_team_position', $pageID);
$about_team_img = wp_get_attachment_url(tr_posts_field('about_team_img', $pageID));
$about_team2_title = tr_posts_field('about_team2_title', $pageID);
$about_team2_name = tr_posts_field('about_team2_name', $pageID);
$about_team2_position = tr_posts_field('about_team2_position', $pageID);
$about_team2_img = wp_get_attachment_url(tr_posts_field('about_team2_img', $pageID));
$about_team3_title = tr_posts_field('about_team3_title', $pageID);
$about_team3_name = tr_posts_field('about_team3_name', $pageID);
$about_team3_position = tr_posts_field('about_team3_position', $pageID);
$about_team3_img = wp_get_attachment_url(tr_posts_field('about_team3_img', $pageID));

$about_team4_title = tr_posts_field('about_team4_title', $pageID);
$about_team4_items = tr_posts_field('about_team4_items', $pageID);
$about_team5_title = tr_posts_field('about_team5_title', $pageID);
$about_team5_items = tr_posts_field('about_team5_items', $pageID);
$about_banner3_img = wp_get_attachment_url(tr_posts_field('about_banner3_img', $pageID));
$about_banner3_label = tr_posts_field('about_banner3_label', $pageID);
$about_banner3_title = tr_posts_field('about_banner3_title', $pageID);
$about_banner3_description = tr_posts_field('about_banner3_description', $pageID);
$about_hdongduong_title = tr_posts_field('about_hdongduong_title', $pageID);
$about_hdongduong_description = tr_posts_field('about_hdongduong_description', $pageID);
$about_hdongduong_items = tr_posts_field('about_hdongduong_items', $pageID);
$about_field_items = tr_posts_field('about_field_items', $pageID);

?>
<section class="hero-banner position-relative">
  <div class="hero-banner-wrap">
    <div class="hero-banner-item active" data-banner="ve_chung_toi">
      <img
        src="<?= wp_kses_post($about_banner_img) ?>"
        alt="Banner"
        class="w-100 img-banner" />
      <div class="hero-content kl-container text-left text-white">
        <h5 class="fs-36"><?= wp_kses_post($about_banner_label) ?></h5>
        <h1 class="fs-56"><?= wp_kses_post($about_banner_title) ?></h1>
        <p><?= wp_kses_post($about_banner_description) ?></p>
      </div>
    </div>
    <div class="hero-banner-item" data-banner="doi_ngu_lanh_dao">
      <img
        src="<?= wp_kses_post($about_banner2_img) ?>"
        alt="Banner"
        class="w-100 img-banner" />
      <div class="hero-content kl-container text-left text-white">
        <h5 class="fs-36"><?= wp_kses_post($about_banner2_label) ?></h5>
        <h1 class="fs-56"><?= wp_kses_post($about_banner2_title) ?></h1>
        <p><?= wp_kses_post($about_banner2_description) ?></p>
      </div>
    </div>
    <div class="hero-banner-item" data-banner="he_sinh_thai">
      <img
        src="<?= wp_kses_post($about_banner3_img) ?>"
        alt="Banner"
        class="w-100 img-banner" />
      <div class="hero-content kl-container text-left text-white">
        <h5 class="fs-36"><?= wp_kses_post($about_banner3_label) ?></h5>
        <h1 class="fs-56"><?= wp_kses_post($about_banner3_title) ?></h1>
        <p><?= wp_kses_post($about_banner3_description) ?></p>
      </div>
    </div>
  </div>

  <nav class="tabs-menu">
    <ul class="tabs-menu-wrapper">
      <li class="tabs-menu-item tab-title-intro active" data-banner="ve_chung_toi">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Về Chúng Tôi</a>
      </li>
      <li class="tabs-menu-item tab-title-team" data-banner="doi_ngu_lanh_dao">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Đội Ngũ Lãnh Đạo</a>
      </li>
      <li class="tabs-menu-item tab-title-ecoSystem" data-banner="he_sinh_thai">
        <a href="javascript:void(0)" class="tabs-menu-item-link fs-18">Hệ Sinh Thái</a>
      </li>
    </ul>
  </nav>
</section>
<div class="tab-content-intro">
  <section
    class="hero-section"
    style="background-image: url('/wp-content/uploads/2025/07/overlay1-1-1.jpg')">
    <div class="kl-container">
      <div class="content-wrapper">
        <div class="text-content">
          <header class="section-header" data-animate="slide-down">
            <h4 class="main-title">
              <?= wp_kses_post($about_ecosystem_title) ?>
            </h4>
          </header>

          <div class="description-content" data-animate="slide-left">
            <p class="description-paragraph">
              <?= wp_kses_post($about_ecosystem_desc) ?>
            </p>
          </div>
        </div>

        <div class="image-content">
          <div class="image-grid">
            <div
              class="image-item image-primary"
              data-animate="slide-right">
              <img
                src="<?= wp_kses_post($about_ecosystem_img_left) ?>"
                alt="Modern skyscrapers and business buildings"
                class="building-image" />
            </div>
            <div
              class="image-item image-secondary"
              data-animate="slide-left">
              <img
                src="<?= wp_kses_post($about_ecosystem_img_right) ?>"
                alt="H Indochina Group building facade"
                class="company-building-image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="vision-section">
    <div class="vision-bg" data-animate="rotate-right-to-left">
      <img class="vision-bg-img" src="/wp-content/uploads/2025/07/element-pattern.png" alt="">
    </div>
    <div class="kl-container">
      <div class="vision-content">
        <header class="vision-header" data-animate="slide-down">
          <h2 class="section-title"><?= wp_kses_post($about_vision_title) ?></h2>
        </header>

        <div class="vision-body">
          <div class="slogan-container">
            <h3 class="vision-slogan">
              <?= wp_kses_post($about_vision_sub) ?>
            </h3>
          </div>

          <div class="description-container vision-description">
            <?= wp_kses_post($about_vision_desc) ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mission-section">
    <div
      class="background-container"
      style="background-image: url('/wp-content/uploads/2025/07/overlay3-1.png')">
      <div class="circle-background"></div>
    </div>

    <div class="kl-container">
      <div class="mission-content-wrap">
        <div class="mission-header" data-animate="slide-down">
          <h2 class="section-title"><?= wp_kses_post($about_mission_title) ?></h2>
        </div>
        <div class="mission-content">
          <p class="mission-slogan"><?= wp_kses_post($about_mission_sub) ?></p>
          <div class="mission-body ">
            <div class="main-description">
              <?= wp_kses_post($about_mission_sub2) ?>
            </div>
            <ul class="mission-points">
              <?= wp_kses_post($about_mission_desc) ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="core-values-section">
    <div
      class="background-container"
      style="background-image: url('/wp-content/uploads/2025/07/overlay4.jpg')">
      <div class="background-texture"></div>
    </div>

    <div class="kl-container">
      <div class="core-values-content">
        <div class="values-grid">
          <div class="value-card">
            <div class="section-header" data-animate="slide-down">
              <h2 class="section-title"><?= wp_kses_post($about_value_title) ?></h2>
              <p class="section-subtitle" data-animate="slide-up">
                <?= wp_kses_post($about_value_sub) ?>
              </p>
            </div>
          </div>
          <?php

          if (!empty($about_value_items)) :
            foreach ($about_value_items as $card) :
              $title = esc_html($card['title']);
              $content = wp_kses_post($card['content']);
              $icon = wp_get_attachment_image_url($card['icon'], 'full');
          ?>
              <div class="value-card" data-animate="slide-up">
                <div class="card-icon">
                  <div class="icon-circle">
                    <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>" />
                  </div>
                </div>
                <div class="card-content">
                  <h3 class="card-title"><?php echo $title; ?></h3>
                  <div class="card-description">
                    <?php echo $content; ?>
                  </div>
                </div>
              </div>
          <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="quote-section">
    <div
      class="background-container"
      style="background-image: url('/wp-content/uploads/2025/07/BGOverlay-Quote-1.png')">
      <div class="background-image"></div>
    </div>

    <div class="kl-container">
      <div class="quote-content">
        <blockquote class="quote-text" data-animate="scale-up">
          <?= wp_kses_post($about_talk_title) ?>
        </blockquote>

        <div class="quote-author" data-animate="slide-up">
          <cite class="author-title"><?= wp_kses_post($about_talk_sub) ?></cite>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="tab-content-team">
  <section class="chairman-quote-section">
    <div class="background-container">
      <div class="background-pattern"></div>
      <div class="background-dots"></div>
    </div>

    <div class="kl-container">
      <div class="quote-content">
        <div class="quote-text-section">
          <div class="opening-quote">
            <img src="/wp-content/uploads/2025/07/quote1.png" alt="quote" />
          </div>

          <blockquote class="quote-text" data-animate="zoom-slide-right">
            <?= wp_kses_post($about_talk2_title) ?>
          </blockquote>
          <div
            class="quote-line quote-line-pulse"
            data-animate="expand-line">
            <hr />
          </div>

          <div class="close-quote">
            <img src="/wp-content/uploads/2025/07/quote2.png" alt="quote" />
          </div>
          <div class="quote-author-section" data-animate="slide-up">
            <div class="author-name"><?= wp_kses_post($about_talk2_name) ?></div>
            <div class="author-title"><?= wp_kses_post($about_talk2_position) ?></div>
          </div>
        </div>

        <div class="quote-image-section">
          <img
            src="<?= wp_kses_post($about_talk2_img) ?>"
            data-animate="slide-left"
            alt="" />

          <div class="closing-quote"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="chairperson-of-the-board">
    <div class="background-container">
      <div class="background-pattern"></div>
      <div class="background-watermark">LEADERSHIP</div>
    </div>

    <div class="kl-container">
      <div class="leader-profile">
        <div class="profile-content text-right">
          <div class="profile-image-section" data-animate="slide-right">
            <div class="gray-theme">
              <img src="<?= wp_kses_post($about_team_img) ?>" alt="" />
            </div>
          </div>

          <div class="profile-text-section" data-animate="slide-left">
            <div class="profile-description"> <?= wp_kses_post($about_team_title) ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="leadership-section">
    <div class="background-container">
      <div class="background-pattern"></div>
      <div class="background-watermark">LEADERSHIP</div>
    </div>

    <div class="kl-container">
      <!-- Ông Kishimoto Takaharu -->
      <div class="leader-profile">
        <div class="profile-content text-left">
          <div class="profile-text-section" data-animate="slide-right">
            <div class="profile-description"><?= wp_kses_post($about_team2_title) ?></div>
          </div>

          <div class="profile-image-section" data-animate="slide-left">
            <div class="gray-theme">
              <img src="<?= wp_kses_post($about_team2_img) ?>" alt="" />
            </div>
          </div>
        </div>
      </div>

      <!-- Ông Dư Hoài Văn -->
      <div class="leader-profile">
        <div class="profile-content text-right">
          <div class="profile-image-section" data-animate="slide-right">
            <div class="gray-theme">
              <img src="<?= wp_kses_post($about_team3_img) ?>" alt="" />
            </div>
          </div>

          <div class="profile-text-section" data-animate="slide-left">
            <div class="profile-description"><?= wp_kses_post($about_team3_title) ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="vice-director-container">
    <div class="kl-container">
      <h4 class="vice-director-title"><?= wp_kses_post($about_team4_title) ?></h4>

      <div class="vice-director-grid">
        <?php

        if (!empty($about_team4_items)) :
          foreach ($about_team4_items as $member) :
            $name = esc_html($member['name']);
            $position = esc_html($member['position']);
            $title = esc_html($member['title']);
            $img = wp_get_attachment_image_url($member['img'], 'full');
            $slug = sanitize_title($name); // tạo class/id từ tên
        ?>
            <div class="vice-director-card about-modal-team-item vice-director-<?php echo $slug; ?>"
              data-title="<?php echo esc_attr($title); ?>"
              data-img-url = "<?php echo esc_url($img); ?>"
              data-name = "<?php echo esc_attr($name); ?>"
              data-position = "<?php echo esc_attr($position); ?>">
              <div class="vice-director-image">
                <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($name); ?>" />
              </div>
              <div class="vice-director-info">
                <div class="vice-director-name"><?php echo $name; ?></div>
                <div class="vice-director-role"><?php echo $position; ?></div>
                <div class="vice-director-arrow"></div>
              </div>
            </div>
        <?php
          endforeach;
        endif;
        ?>

      </div>
    </div>
  </div>
  <div
    class="manage-container">
    <div class="kl-container">
      <h4 class="vice-director-title">
        <?= wp_kses_post($about_team5_title) ?>
      </h4>
      <div class="manage-grid">
        <?php
        if (!empty($about_team5_items)) :
          foreach ($about_team5_items as $member) :
            $name     = esc_html($member['name']);
            $position = esc_html($member['position']);
            $title = esc_html($member['title']);
            $img      = wp_get_attachment_image_url($member['img'], 'full');
            $slug     = sanitize_title($name); // Tạo slug từ tên để làm ID modal
        ?>
            <div class="manage-card about-modal-team-item manage-card-gray hover-profile"
              data-title="<?php echo esc_attr($title); ?>"
              data-img-url = "<?php echo esc_url($img); ?>"
              data-name = "<?php echo esc_attr($name); ?>"
              data-position = "<?php echo esc_attr($position); ?>"
              data-img-url="<?php echo esc_attr($img); ?>">
              <div class="manage-name"><?php echo $name; ?></div>
              <div class="manage-position"><?php echo nl2br($position); ?></div>
              <div class="manage-arrow"
                data-bs-toggle="modal"
                data-bs-target="#profileModal<?php echo ucfirst($slug); ?>">
              </div>
            </div>
        <?php
          endforeach;
        endif;
        ?>


      </div>
    </div>
  </div>
</div>
<div class="tab-content-ecoSystem">
  <div class="bio-system-container">
    <div class="bio-system-overlay"></div>
    <div class="kl-container">
      <div class="bio-system-header">
        <div class="bio-system-title-section">
          <h1 class="bio-system-main-title">
            <?= wp_kses_post($about_hdongduong_title) ?>
          </h1>
        </div>

        <div class="bio-system-description-section">
          <div class="bio-system-description">
            <?= wp_kses_post($about_hdongduong_description) ?>
          </div>
        </div>
      </div>

      <div class="bio-system-grid">
        <?php
        $counter = 1;
        if (!empty($about_hdongduong_items)) :
          foreach ($about_hdongduong_items as $index => $item) :
            $title = esc_html($item['title']);
            $img_url = isset($item['img']) ? wp_get_attachment_image_url($item['img'], 'full') : '';
            $target = 'investment-' . $counter.'-container'; 
        ?>
            <div class="bio-system-card bio-system-<?php echo $counter; ?>" data-target="<?php echo esc_attr($target); ?>">
              <div class="bio-system-card-bg"
                style="background-image: url('<?php echo esc_url($img_url); ?>');">
              </div>

              <div class="bio-system-card-title">
                <?php echo nl2br($title); ?>
              </div>

              <div class="bio-system-card-arrow" >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 17L17 7" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                  <path d="M7 7H17V17" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
        <?php
            $counter++;
          endforeach;
        endif;
        ?>

      </div>
    </div>
  </div>
  <?php
  $counter = 1;
  if (!empty($about_field_items)) :
    foreach ($about_field_items as $index => $item) :
      $title   = esc_html($item['title']);
      $content = wp_kses_post($item['content']);
      $team1   = $item['team1'];
      $team2   = $item['team2'];
      $team3   = $item['team3'];
      $img_url = isset($item['img']) ? wp_get_attachment_image_url($item['img'], 'full') : '';
  ?>
      <div class="investment-container  investment-<?php echo $counter ?>-container">
        <div class="investment-bg">
          <img src="/wp-content/uploads/2025/07/investment-bg-1.png" alt="" />
        </div>

        <div class="investment-content">
          <h1 class="investment-title" data-aos="fade-down">
            <span class="investment-title-main">Lĩnh Vực</span>
            <span class="investment-title-sub"><?php echo $title; ?></span>
          </h1>

          <div class="investment-description" data-aos="fade-up">
            <?php echo $content; ?>
          </div>

          <?php if ($team1 || $team2 || $team3) : ?>
            <div class="investment-companies-label" data-aos="fade-up">
              Các công ty thành viên:
            </div>

            <div class="investment-companies-grid" data-aos="fade-up">
              <?php if ($team1) : ?>
                <div class="investment-company-item"><?php echo $team1; ?></div>
              <?php endif; ?>
              <?php if ($team2) : ?>
                <div class="investment-company-item"><?php echo $team2; ?></div>
              <?php endif; ?>
              <?php if ($team3) : ?>
                <div class="investment-company-item"><?php echo $team3; ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <button class="investment-arrow-button" data-aos="zoom-in">
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.25 12.25L29.75 29.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M29.75 12.25V29.75H12.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <div class="investment-image-section">
          <div class="investment-image-overlay"
            style="background-image: url('<?php echo esc_url($img_url); ?>');"
            data-aos="fade-left"></div>

          <div class="investment-number" style="background-image: url('<?php echo esc_url($img_url); ?>');" data-aos="fade-left" data-aos-delay="500">
            <?php echo $counter++; ?>
          </div>
        </div>
      </div>
  <?php
    endforeach;
  endif;
  ?>

</div>
<div
  class="modal"
  id="modalProfile"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-ovelay"></div>
  <div class="modal-dialog modal-dialog-centered about-modal-inner modal-lg">
    <div class="modal-content">
      <!-- Header -->
      <div
        class="modal-header text-white"
        style="background-color: #c78f50">
        <div>
          <p
            class="fw-bold mb-1 modal-name"
            style="color: #163142"
            id="exampleModalLabel">
            Ông TẠ TRUNG DŨNG
          </p>
          <p class="fw-bold mb-0 modal-position">Phụ trách Đầu tư & Phát triễn dự án</p>
        </div>
        <button
          type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal"
          aria-label="Đóng"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <div class="row g-4">
          <div class="col-md-4 text-center">
            <img
              src="assets/img/vice-director.jpg"
              alt="Ảnh Profile"
              class="img-fluid rounded shadow modal-avatar" />
          </div>
          <div class="col-md-8">
            <div class="modal-intro"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
<script>
  $(document).ready(function () {


  AOS.init({
    duration: 1000,
    offset: 100,
  });

  let currentObserver = null;

  // Khởi tạo trạng thái ban đầu
  function initializeTabs() {
    console.log('Initializing tabs...');

    // Ẩn tất cả tab
    $('.tab-content-team, .tab-content-ecoSystem')
      .removeClass('tab-active')
      .addClass('tab-hidden')
      .hide();

    // Hiển thị tab intro
    $('.tab-content-intro')
      .removeClass('tab-hidden')
      .addClass('tab-active')
      .show();

    console.log('Tabs initialized');
  }

  // Reset animations cho tab
  function resetAnimationsForTab(tabSelector) {
    console.log('Resetting animations for:', tabSelector);

    // Cleanup existing observer
    if (currentObserver) {
      currentObserver.disconnect();
      currentObserver = null;
    }

    // Reset tất cả elements trong tab
    $(tabSelector)
      .find('[data-animate]')
      .each(function () {
        $(this).removeClass('animated');
        console.log('Reset animation for element:', this);
      });
  }

  // Setup scroll animations cho tab hiện tại
  function setupScrollAnimationsForTab(tabSelector) {
    console.log('Setting up scroll animations for:', tabSelector);

    const $activeTab = $(tabSelector + '.tab-active');
    if ($activeTab.length === 0) {
      console.log('No active tab found for:', tabSelector);
      return;
    }

    const animatedElements = $activeTab.find('[data-animate]');
    console.log('Found elements to animate:', animatedElements.length);

    if (animatedElements.length === 0) return;

    const observerOptions = {
      threshold: 0.15,
      rootMargin: '0px 0px -30px 0px',
    };

    currentObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (
          entry.isIntersecting &&
          !entry.target.classList.contains('animated')
        ) {
          console.log('Animating element:', entry.target);
          requestAnimationFrame(() => {
            entry.target.classList.add('animated');
          });
          // Không unobserve để có thể re-animate khi cần
        }
      });
    }, observerOptions);

    // Observe tất cả elements
    animatedElements.each(function () {
      currentObserver.observe(this);
    });

    // Check ngay cho elements đã visible
    setTimeout(() => {
      animatedElements.each(function () {
        const rect = this.getBoundingClientRect();
        const isVisible =
          rect.top < window.innerHeight && rect.bottom > 0;

        if (isVisible && !this.classList.contains('animated')) {
          console.log('Initially visible element animated:', this);
          this.classList.add('animated');
        }
      });
    }, 100);
  }

  // Hàm chuyển tab - HOÀN TOÀN MỚI
  function switchToTab(targetTab) {
    console.log('=== SWITCHING TO TAB ===', targetTab);

    // Cleanup observer cũ
    if (currentObserver) {
      currentObserver.disconnect();
      currentObserver = null;
    }

    // Reset animations cho TẤT CẢ tabs trước
    $(
      '.tab-content-intro, .tab-content-team, .tab-content-ecoSystem'
    ).each(function () {
      $(this).find('[data-animate]').removeClass('animated');
    });

    // Ẩn tất cả tab
    $('.tab-content-intro, .tab-content-team, .tab-content-ecoSystem')
      .removeClass('tab-active')
      .addClass('tab-hidden')
      .hide();

    // Hiển thị tab được chọn
    $(targetTab)
      .removeClass('tab-hidden')
      .addClass('tab-active')
      .show()
      .css({
        display: 'block',
        opacity: '1',
        visibility: 'visible',
        position: 'relative',
        left: '0',
        'z-index': '1',
      });

    console.log('Tab switched to:', targetTab);

    // Setup animations cho tab mới SAU khi tab đã visible
    requestAnimationFrame(() => {
      setTimeout(() => {
        setupScrollAnimationsForTab(targetTab);
        AOS.refresh();
      }, 150); // Delay để đảm bảo tab đã render xong
    });
  }

  // Khởi tạo
  initializeTabs();

  // Setup animation cho tab intro ban đầu
  setTimeout(() => {
    setupScrollAnimationsForTab('.tab-content-intro');
  }, 200);

  // Tab click events - SỬA HOÀN TOÀN
  $('.tabs-menu-item').each(function () {
    $(this)
      .off('click')
      .on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        console.log('=== TAB CLICKED ===');
        console.log('Clicked tab classes:', $(this).attr('class'));

        const $clickedTab = $(this);

        // Kiểm tra active
        if ($clickedTab.hasClass('active')) {
          console.log('Tab already active, return');
          return false;
        }

        // Update active class cho navigation
        $('.tabs-menu-item').removeClass('active');
        $clickedTab.addClass('active');
        // ĐỔI TIÊU ĐỀ THEO TAB
        let dataBanner = $clickedTab.attr('data-banner');
        $('.hero-banner-item').removeClass('active');
        $(`.hero-banner-item[data-banner="${dataBanner}"]`).addClass('active');
        // Xác định target tab
        let targetTab = '';
        if ($clickedTab.hasClass('tab-title-intro')) {
          targetTab = '.tab-content-intro';
          console.log('Target: Intro tab');
        } else if ($clickedTab.hasClass('tab-title-team')) {
          targetTab = '.tab-content-team';
          console.log('Target: Team tab');
        } else if ($clickedTab.hasClass('tab-title-ecoSystem')) {
          targetTab = '.tab-content-ecoSystem';
          console.log('Target: EcoSystem tab');
        }

        // Chuyển tab
        if (targetTab) {
          switchToTab(targetTab);
        }

        return false;
      });
  });
    // check url có parama tab không
  const urlParams = new URLSearchParams(window.location.search);
  const tab = urlParams.get('tab');

  if (tab) {
    const target = $('[data-banner="' + tab + '"]');

    if (target.length) {
      target.trigger('click');
    }
  }
  $('.about-modal-team-item').on('click', function (e) {
    e.preventDefault();
    $(this).addClass('active');
    const title = $(this).attr('data-title');
    const imgUrl = $(this).attr('data-img-url');
    const name = $(this).attr('data-name');
    const position = $(this).attr('data-position');
    $('#modalProfile .modal-name').text(name);
    $('#modalProfile .modal-position').text(position);
    $('#modalProfile .modal-intro').html(title);
    $('#modalProfile .modal-avatar').attr('src', imgUrl);
    $('#modalProfile').fadeIn(300);
   $('html').addClass('overflow-cus-hide')
    console.log('Profile modal opened for:', title);
  })
  $('#modalProfile .btn-close').on('click', function () {
   $('html').removeClass('overflow-cus-hide')

    $('#modalProfile').fadeOut(300);
    console.log('Profile modal closed');
    $('.about-modal-team-item').removeClass('active');
  });
  // Test function - có thể gọi từ console
  window.testTabSwitch = function (tabName) {
    console.log('Testing tab switch to:', tabName);
    if (tabName === 'team') {
      $('.tab-title-team').trigger('click');
    } else if (tabName === 'eco') {
      $('.tab-title-ecoSystem').trigger('click');
    } else {
      $('.tab-title-intro').trigger('click');
    }
  };

  // Hover effects
  $('.tabs-menu-item').hover(
    function () {
      $(this).addClass('hover-effect');
    },
    function () {
      $(this).removeClass('hover-effect');
    }
  );

  // Keyboard navigation
  $(document).on('keydown', function (e) {
    const $activeTabs = $('.tabs-menu-item.active');
    let $nextTab;

    if (e.keyCode === 37) {
      // Left arrow
      $nextTab = $activeTabs.prev('.tabs-menu-item');
      if ($nextTab.length === 0) {
        $nextTab = $('.tabs-menu-item').last();
      }
      $nextTab.trigger('click');
    } else if (e.keyCode === 39) {
      // Right arrow
      $nextTab = $activeTabs.next('.tabs-menu-item');
      if ($nextTab.length === 0) {
        $nextTab = $('.tabs-menu-item').first();
      }
      $nextTab.trigger('click');
    }
  });

  // Modal functionality
  $('.manage-single-featured').click(function () {
    $('#manageModal').fadeIn(300);
    $('body').css('overflow', 'hidden');
  });

  $('.manage-modal-close').click(function () {
    $('#manageModal').fadeOut(300);
    $('body').css('overflow', 'auto');
  });

  $(window).click(function (event) {
    if (event.target.id === 'manageModal') {
      $('#manageModal').fadeOut(300);
      $('body').css('overflow', 'auto');
    }
  });

  $(document).keydown(function (event) {
    if (event.keyCode === 27) {
      // ESC key
      $('#manageModal').fadeOut(300);
      $('body').css('overflow', 'auto');
    }
  });

  $('.manage-modal-close').hover(
    function () {
      $(this).css('background-color', 'rgba(255, 255, 255, 0.3)');
    },
    function () {
      $(this).css('background-color', 'rgba(255, 255, 255, 0.2)');
    }
  );

  console.log('=== TAB SYSTEM WITH ANIMATIONS READY ===');
});


// Scroll to section when clicking bio-system-card-arrow
$('.bio-system-card').on('click', function (e) {
  e.preventDefault();
  console.log('Bio-system card arrow clicked');

  // Get the target section from data-target attribute
  const targetSection = $(this).data('target');
  console.log('Target section:', targetSection);
  scrollToSection(targetSection);
});
function scrollToSection(targetSection) {
  const $target = $(`.${targetSection}`);
  if ($target.length) {
    console.log('Scrolling to:', targetSection);
    $('html, body').animate(
      {
        scrollTop: $target.offset().top - 100,
      },
      500
    );
  } else {
    console.log('Target section not found:', targetSection);
  }
}

</script>