<?php

/**
 * Template Name: Quan hệ cổ đông
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('quan-he-co-dong-style', get_template_directory_uri() . '/css/relationship.css', array(), '2.3.1');

get_header();
$banner_img = wp_get_attachment_image_url(tr_posts_field('banner_img'), 'full');
$banner_label = tr_posts_field('banner_label');
$banner_title = tr_posts_field('banner_title');

// Hồ sơ năng lực
$file_desc = tr_posts_field('file_desc');
$file_title = tr_posts_field('file_title');
$file_btn = tr_posts_field('file_btn');
$timeline = tr_posts_field('timeline_years');
?>
<section class="relationship__hero">
  <div class="relationship__hero__inner">
    <div class="relationship__hero__img image__full">
      <img src="<?php echo esc_url($banner_img); ?>" alt="" />
    </div>
    <div class="relationship__hero__overlay"></div>
    <div class="relationship__hero__content">
      <div class="relationship__hero__content__subtitle subtitle__banner">
        <?php echo esc_html($banner_label); ?>
      </div>
      <div class="relationship__hero__content__smalltitle title__banner">
        <?php echo esc_html($banner_title); ?>
      </div>
    </div>
  </div>
</section>
<section class="relationship__content">
  <div class="relationship__content__hero">
    <div class="relationship__content__hero__left">
      <?php echo esc_html($file_desc); ?>
    </div>
    <div class="relationship__content__hero__right">
      <?php echo esc_html($file_btn); ?>
    </div>
  </div>
  <div class="relationship__content__history">
    <div class="relationship__content__history__title txt-poppin">
      <?php echo esc_html($file_title); ?>
    </div>
    <div class="relationship__content__history__time__wrap">
      <div class="relationship__content__history__time">
        <div class="relationship__content__history__year">
          <?php
          $timeline = tr_posts_field('timeline_years'); // lấy dữ liệu repeater
          $current_year = date('Y');
          ?>

          <?php if (!empty($timeline)) : ?>
            <?php foreach ($timeline as $year_data) :
              $year = $year_data['year'] ?? '';
              $is_active = ($year == $current_year) ? 'active' : '';
            ?>
              <div class="relationship__content__history__year__item <?php echo esc_attr($is_active); ?>" data-year="<?php echo esc_attr($year); ?>">
                <?php echo esc_html($year); ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
 <?php
$timeline_years = tr_posts_field('timeline_years'); // Lấy toàn bộ năm
if (!empty($timeline_years)) :
  foreach ($timeline_years as $y_key => $year_item) :
    $year = $year_item['year'] ?? '';
    $months = $year_item['months'] ?? [];
    $is_active = ($year == $current_year) ? 'active' : '';
?>
  <div class="relationship__content__item <?php echo $is_active?>" data-year="<?php echo esc_attr($year); ?>">
    <?php foreach ($months as $month_item) :
      $month = $month_item['month'] ?? '';
      $documents = $month_item['documents'] ?? [];
    ?>
      <div class="relationship__content__timeline">
        <div class="relationship__content__timeline__title txt-poppin">
          <?php echo esc_html($month); ?>/<?php echo esc_html($year); ?>
        </div>
        <div class="relationship__content__timeline__wrap">
          <?php foreach ($documents as $doc) :
            $desc = $doc['description'] ?? '';
            $date = !empty($doc['date']) ? date('d/m/Y', strtotime($doc['date'])) : '';
            $file_url = isset($doc['file']) ? wp_get_attachment_url($doc['file']) : '';
          ?>
            <div class="relationship__content__timeline__item">
              <div class="relationship__content__timeline__item__des">
                <?php echo $desc; ?>
              </div>
              <div class="relationship__content__timeline__item__update">
                Cập nhật: <?php echo esc_html($date); ?>
              </div>
              <div class="relationship__content__timeline__item__view image__full">
                <img src="/wp-content/uploads/2025/07/eye.svg" alt="" />
              </div>
              <div class="relationship__content__timeline__item__dow image__full">
                <?php if ($file_url) : ?>
                  <a href="<?php echo esc_url($file_url); ?>" download>
                    <img src="/wp-content/uploads/2025/07/receive-square.svg" alt="" />
                  </a>
               
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php
  endforeach;
endif;
?>

</section>
<?php
wp_enqueue_script('quan-he-co-dong-js', get_template_directory_uri() . '/js/relationship.js', array(), SITE_VERSION, true);
get_footer(); ?>