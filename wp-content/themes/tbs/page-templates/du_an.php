<?php

/**
 * Template Name: Dự án
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('van-hoa-style', get_template_directory_uri() . '/css/project.css', array(), '2.3.1');
get_header();
$pageID = get_queried_object_id();
$banner_items = tr_posts_field('banner_items', $pageID);
$invest_banner_img = wp_get_attachment_url(tr_posts_field('invest_banner_img', $pageID));
$invest_banner_label = tr_posts_field('invest_banner_label', $pageID);
$invest_banner_title = tr_posts_field('invest_banner_title', $pageID);
$invest_banner_desc = tr_posts_field('invest_banner_desc', $pageID);
$project_show_title = tr_posts_field('project_show_title', $pageID);
$project_show_items = tr_posts_field('project_show_items', $pageID);
?>
<section class="project_hero">
  <div class="project_hero_overlay"></div>
  <div class="project_hero_bg">
    <?php
    $count = 0;
    if (!empty($banner_items)) :
      foreach ($banner_items as $index => $item) :
        $img_url = wp_get_attachment_image_url($item['img'], 'full');
        $title = !empty($item['title']) ? esc_attr($item['title']) : 'banner-' . $count;
        $active_class = ($count === 0) ? 'active' : '';
    ?>
        <div class="project_hero_bg_inner project_hero_bg_inner_<?php echo $count + 1; ?> image__fullfill <?php echo $active_class; ?>" data-title="<?php echo $title; ?>">
          <img src="<?php echo esc_url($img_url); ?>" alt="">
        </div>
    <?php
        $count++;
      endforeach;
    endif;
    ?>
  </div>
  <div class="kl-container">
    <div class="project_hero_content df_hide_onload">
      <div class="project_hero_content_inner">
        <div class="project_hero_content_label subtitle__banner">Dự Án</div>
        <div class="project_hero_content_title_wrap">

          <?php
          $count = 0;
          if (!empty($banner_items)) :
            foreach ($banner_items as $index => $item) :
              $title = trim($item['title']) ?? '';
              $title_attr = sanitize_title($title); // dùng cho data-title
              $tag = ($count === 0) ? 'h1' : 'h2'; // thẻ h1 cho phần đầu
              $active_class = ($count === 0) ? 'active' : '';
          ?>
              <<?php echo $tag; ?> class="project_hero_content_title txt-poppin title__banner <?php echo $active_class; ?>"
                data-title="<?php echo esc_attr($title_attr); ?>">
                <?php echo wp_kses_post($title); ?>
              </<?php echo $tag; ?>>
          <?php
              $count++;
            endforeach;
          endif;
          ?>

        </div>
        <div class="project_hero_content_sub">Mỗi dự án không chỉ là một mô hình kinh doanh, mà còn là kết quả của tư duy dài hạn, năng lực triển khai thực tiễn và sự hợp tác chặt chẽ với các đối tác chiến lược trong và ngoài nước.</div>
        <a href="" class="btn project_hero_content_btn" data-scroll="bds">
          <span>Xem thêm</span>
          <div class="project_hero_content_ic">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 5L19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </a>
      </div>
      <div class="project_hero_control">
        <div class="project_hero_control_progress hidden-mob"></div>
        <div class="project_hero_control_main">
          <div class="project_hero_control_item project_hero_control_prev">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.6663 8H3.33301" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M7.99967 12.6693L3.33301 8.0026L7.99967 3.33594" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="project_hero_control_item project_hero_control_next">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.33301 8H12.6663" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M8 3.33594L12.6667 8.0026L8 12.6693" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="project_hero_swiper_wrap">
      <div class="project_hero_swiper swiper">
        <div class="project_hero_swiper_wrapper swiper-wrapper">
          <?php

          if (!empty($banner_items)) :
            foreach ($banner_items as $index => $item) :
              $img_url = wp_get_attachment_image_url($item['img'], 'full');
              $title = trim($item['title']) ?? '';
              $data_title = sanitize_title($title);
          ?>
              <div class="swiper-slide project_hero_swiper_slide" data-title="<?php echo esc_attr($data_title); ?>">
                <div class="project_hero_swiper_slide_inner image__fullfill">
                  <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>">
                </div>
              </div>
          <?php
            endforeach;
          endif;
          ?>

        </div>
        <div class="project_hero_control_progress"></div>
      </div>
    </div>
  </div>
</section>
<section class="project__intro">
  <div class="project__intro__inner">
    <div class="project__intro__left image__full">
      <img src="<?= wp_kses_post($invest_banner_img) ?>" alt="">
    </div>
    <div class="project__intro__right__wrap">
      <div class="project__intro__right">
        <div class="project__intro__right__subtitle subtitle__section"><?= wp_kses_post($invest_banner_label) ?></div>
        <div class="project__intro__right__smalltitle txt-poppin title__section"><?= wp_kses_post($invest_banner_title) ?></div>
        <div class="project__intro__right__des"><?= wp_kses_post($invest_banner_desc) ?></div>
      </div>
    </div>
  </div>
  <div class="project__intro__show">
    <div class="project__intro__show__wrap">
      <div class="project__intro__show__title txt-poppin">
        <?= wp_kses_post($project_show_title) ?>
      </div>
      <div class="project__intro__show__inner">
        <?php

        if (!empty($project_show_items)) :
          foreach ($project_show_items as $item) :
            $img_url = wp_get_attachment_image_url($item['img'], 'full');
            $title = $item['title'] ?? '';
        ?>
            <div class="project__intro__show__card">
              <div class="project__intro__show__card__img image__full">
                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>">
              </div>
              <div class="project__intro__show__card__des">
                <?php echo $title; ?>
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
<section class="project__realestate">
  <div class="project__realestate__menu">
    <div class="project__realestate__menu__inner">
      <?php
      $terms = get_terms(array(
        'taxonomy'   => 'project_category',
        'hide_empty' => false,
      ));

      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $index => $term) :
          $active = $index === 0 ? 'active' : ''; // gán active cho phần tử đầu tiên
      ?>
          <div class="project__realestate__menu__item <?php echo $active; ?>">
            <span><?php echo esc_html($term->name); ?></span>
          </div>
      <?php
        endforeach;
      endif;
      ?>

    </div>
  </div>
  <div class="project__realestate__title">
    <div class="project__realestate__title__bg image__full">
      <img src="/wp-content/uploads/2025/07/project-bg-2.png" alt="">
    </div>
    <div class="project__realestate__subtitle subtitle__section">Dự Án</div>
    <div class="project__realestate__smalltitle__wrap">
      <?php
      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $index => $term) :
          $active = $index === 0 ? 'active' : ''; // gán active cho phần tử đầu tiên
      ?>
          <div class="project__realestate__smalltitle txt-poppin title__section <?php echo $active; ?>">
            <span><?php echo esc_html($term->name); ?></span>
          </div>
      <?php
        endforeach;
      endif;
      ?>

    </div>
  </div>
  <div class="project__realestate__detail">
    <?php
    $terms = get_terms(array(
      'taxonomy'   => 'project_category',
      'hide_empty' => false,
    ));

    if (!empty($terms) && !is_wp_error($terms)) :
      foreach ($terms as $index => $term) :
        // Lấy bài viết thuộc category
        $projects = get_posts(array(
          'post_type'      => 'project',
          'posts_per_page' => -1,
          'tax_query'      => array(
            array(
              'taxonomy' => $term->taxonomy,
              'field'    => 'term_id',
              'terms'    => $term->term_id,
            ),
          ),
        ));
    ?>

        <!-- Mỗi category là một block riêng, có thể thêm ID hoặc class tương ứng -->
        <div class="project__realestate__detail__inner <?php echo ($index === 0) ? 'active' : ''; ?>" data-category="<?php echo esc_attr($term->slug); ?>">
          <?php if (!empty($projects)) :
            foreach ($projects as $post) :
              setup_postdata($post);
              $location = get_post_meta(get_the_ID(), 'location', true); // ví dụ bạn lưu địa điểm bằng custom field
              $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
          ?>
              <a href="<?php the_permalink(); ?>" class="project__realestate__detail__item">
                <div class="project__realestate__detail__item__inner">
                  <div class="project__realestate__detail__item__img image__fullfill">
                    <div class="project__realestate__detail__item__img__overlay"></div>
                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="project__realestate__detail__item__des">
                    <div class="project__realestate__detail__item__des__inner">
                      <div class="invert-border top-left">
                        <div class="invert-inner bot-left"></div>
                      </div>
                      <div class="invert-border bot-right">
                        <div class="invert-inner bot-right"></div>
                      </div>
                      <div class="project__realestate__detail__item__des__subtitle">Dự Án</div>
                      <div class="project__realestate__detail__item__des__locate">
                        <?php the_title(); ?>
                      </div>
                      <div class="project__realestate__detail__item__des__link">
                        <div class="project__realestate__detail__item__des__link__txt">Chi Tiết</div>
                        <div class="project__realestate__detail__item__des__link__icon image__full">
                          <img src="/assets/img/arrow-right.svg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
          <?php endforeach;
            wp_reset_postdata();
          endif; ?>
        </div>

    <?php
      endforeach;
    endif;
    ?>

  </div>
</section>
<section class="project__cta">
  <div class="project__cta__inner">
    <div class="project__cta__left">
      <div class="project__cta__subtitle subtitle__section">Kết nối để kiến tạo giá trị bền vững</div>
      <div class="project__cta__smalltitle txt-poppin title__section">Đồng hành cùng H Indochina Group</div>
      <div class="project__cta__des">Chúng tôi luôn sẵn sàng lắng nghe và hợp tác cùng các đối tác, nhà đầu tư và ứng viên tiềm năng.
        Hãy liên hệ với H Indochina Group để cùng nhau tạo dựng những giá trị bền vững và khác biệt.</div>
    </div>
    <div class="project__cta__right">
      <a href="#" class="project__cta__right__contact">Liên Hệ</a>
    </div>
  </div>
</section>
<?php

wp_enqueue_script(
  'gsap',
  'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
  array(),
  '3.12.5',
  true
);

// GSAP ScrollTrigger
wp_enqueue_script(
  'gsap-scrolltrigger',
  'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
  array('gsap'),
  '3.12.5',
  true
);

// SplitType
wp_enqueue_script(
  'split-type',
  'https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js',
  array(),
  '0.3.4',
  true
);
wp_enqueue_script('project-js', get_template_directory_uri() . '/js/project.js', array(), SITE_VERSION, true);
get_footer();
?>