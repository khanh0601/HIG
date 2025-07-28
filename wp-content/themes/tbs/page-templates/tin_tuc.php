<?php
/**
 * Template Name: Tin tức
 */

wp_enqueue_style('tin-tuc-style', get_template_directory_uri() . '/css/new.css', [], '2.3.1');
get_header();

// Lấy biến phân trang từ URL
$paged_news  = isset($_GET['news_page']) ? intval($_GET['news_page']) : 1;
$paged_event = isset($_GET['event_page']) ? intval($_GET['event_page']) : 1;
$posts_per_page = 12;
$pageID = get_queried_object_id();
$banner_img = wp_get_attachment_url(tr_posts_field('banner_img', $pageID));
?>

<section class="new__hero">
  <div class="new__hero__inner">
    <div class="new__hero__img image__full">
      <img src="<?= wp_kses_post($banner_img) ?>" alt="">
    </div>
    <div class="new__hero__content">
      <div class="new__hero__content__subtitle subtitle__banner">Tin tức</div>
      <div class="new__hero__content__smalltitle_wrap">
        <div class="new__hero__content__smalltitle active title__banner" data-tab="news">TRUYỀN THÔNG</div>
        <div class="new__hero__content__smalltitle title__banner" data-tab="event">SỰ KIỆN</div>
      </div>
    </div>
    <div class="new__hero__menu">
      <div class="new__hero__menu__item active" data-tab="news">
        <div class="new__hero__menu__item__txt">TRUYỀN THÔNG</div>
      </div>
      <div class="new__hero__menu__item" data-tab="event">
        <div class="new__hero__menu__item__txt">SỰ KIỆN</div>
      </div>
    </div>
  </div>
</section>

<!-- TAB TRUYỀN THÔNG -->
<div class="new_content_item active" data-tab="news">
  <section class="new__update">
    <div class="new__update__inner">
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'category_name' => 'truyen-thong',
      ];
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/default-thumb.jpg';
      ?>
          <a href="<?php the_permalink(); ?>" class="new__update__card">
            <div class="new__update__card__time"><?php the_time('d-m-Y'); ?></div>
            <div class="new__update__card__title"><?php the_title(); ?></div>
            <div class="new__update__card__img image__full"><img src="<?php echo esc_url($thumbnail); ?>" alt=""></div>
            <div class="new__update__card__link image__full"><img src="/wp-content/uploads/2025/07/arrow.png" alt=""></div>
          </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </section>

  <section class="new__relate">
    <div class="new__relate__wrap">
      <?php
      $offset = 2 + ($paged_news - 1) * $posts_per_page;
      $args = [
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'category_name' => 'truyen-thong',
      ];
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/default-thumb.jpg';
      ?>
          <a href="<?php the_permalink(); ?>" class="new__relate__item">
            <div class="new__relate__item__time"><?php the_time('d-m-Y'); ?></div>
            <div class="new__relate__item__title"><?php the_title(); ?></div>
            <div class="new__relate__item__img image__full"><img src="<?php echo esc_url($thumbnail); ?>" alt=""></div>
            <div class="new__relate__item__link image__full"><img src="/wp-content/uploads/2025/07/arrow.png" alt=""></div>
          </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <?php
    $total_posts = wp_count_posts()->publish;
    $total_query = new WP_Query([
      'post_type' => 'post',
      'category_name' => 'truyen-thong',
      'posts_per_page' => -1,
    ]);
    $total = $total_query->found_posts - 2;
    $total_pages = ceil($total / $posts_per_page);
    if ($total_pages > 1) :
    ?>
      <div class="new__relate__paging">
        <div class="new__relate__paging__wrap">
          <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <div class="new__relate__paging__item<?php echo ($i == $paged_news) ? ' active' : ''; ?>">
              <a href="<?php echo esc_url(add_query_arg('news_page', $i, get_permalink())); ?>"><?php echo $i; ?></a>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>
</div>

<!-- TAB SỰ KIỆN -->
<div class="new_content_item" data-tab="event">
  <section class="new__update">
    <div class="new__update__inner">
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'category_name' => 'su-kien',
      ];
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/default-thumb.jpg';
      ?>
          <a href="<?php the_permalink(); ?>" class="new__update__card">
            <div class="new__update__card__time"><?php the_time('d-m-Y'); ?></div>
            <div class="new__update__card__title"><?php the_title(); ?></div>
            <div class="new__update__card__img image__full"><img src="<?php echo esc_url($thumbnail); ?>" alt=""></div>
            <div class="new__update__card__link image__full"><img src="/wp-content/uploads/2025/07/arrow.png" alt=""></div>
          </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </section>

  <section class="new__relate">
    <div class="new__relate__wrap">
      <?php
      $offset = 2 + ($paged_event - 1) * $posts_per_page;
      $args = [
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'offset' => $offset,
        'category_name' => 'su-kien',
      ];
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/default-thumb.jpg';
      ?>
          <a href="<?php the_permalink(); ?>" class="new__relate__item">
            <div class="new__relate__item__time"><?php the_time('d-m-Y'); ?></div>
            <div class="new__relate__item__title"><?php the_title(); ?></div>
            <div class="new__relate__item__img image__full"><img src="<?php echo esc_url($thumbnail); ?>" alt=""></div>
            <div class="new__relate__item__link image__full"><img src="/wp-content/uploads/2025/07/arrow.png" alt=""></div>
          </a>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>

    <?php
    $total_query = new WP_Query([
      'post_type' => 'post',
      'category_name' => 'su-kien',
      'posts_per_page' => -1,
    ]);
    $total = $total_query->found_posts - 2;
    $total_pages = ceil($total / $posts_per_page);
    if ($total_pages > 1) :
    ?>
      <div class="new__relate__paging">
        <div class="new__relate__paging__wrap">
          <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <div class="new__relate__paging__item<?php echo ($i == $paged_event) ? ' active' : ''; ?>">
              <a href="<?php echo esc_url(add_query_arg('event_page', $i, get_permalink())); ?>"><?php echo $i; ?></a>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>
</div>

<?php
wp_enqueue_script('new-js', get_template_directory_uri() . '/js/new.js', [], SITE_VERSION, true);
get_footer();
?>
