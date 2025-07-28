<?php
wp_enqueue_style('project-detail-style', get_template_directory_uri() . '/css/project_detail.css', array(), '2.3.1');
get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $post_id = get_the_ID();

        // Các field đơn lẻ
        $position = tr_posts_field('project_position', $post_id);
        $dien_tich = tr_posts_field('project_dien_tich', $post_id);
        $project_type = tr_posts_field('project_type', $post_id);
        $quy_mo = tr_posts_field('project_quy_mo', $post_id);

        // Repeater hình ảnh
        $thumb_imgs = tr_posts_field('thumb_imgs', $post_id);
?>

        <section class="project__detail__hero">
            <div class="project__detail__hero__inner">
                <div class="project__detail__hero__img image__full">
                    <img src="/wp-content/uploads/2025/07/project-detail-1.jpg" alt="">
                </div>
                <div class="project__detail__hero__overlay"></div>
                <div class="project__detail__hero__txt">
                    <h2 class="project__detail__hero__subtitle subtitle__banner">Dự Án</h2>
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    $category_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';
                    ?>

                    <h1 class="project__detail__hero__smalltitle title__banner">
                        <?php echo esc_html($category_name); ?>
                    </h1>
                </div>
            </div>


        </section>
        <section class="project__detail__intro">
            <div class="project__detail__head">
                <div class="project__detail__head__inner">
                    <div class="project__detail__head__left">
                        <div class="project__detail__head__left__inner">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'project_category');
                            $category_name = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : '';
                            ?>
                            <div class="project__detail__head__left__subtitle subtitle__section"><?php echo esc_html($category_name); ?></div>
                            <div class="project__detail__head__left__smalltitle title__section"><?php the_title(); ?></div>
                            <div class="project__detail__head__left__des"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <div class="project__detail__head__right image__fullfill">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="project__detail__card">
                <div class="project__detail__card__item">
                    <div class="project__detail__card__item__icon image__full">
                        <img src="./assets/img/Rectangle51.png" alt="">
                    </div>
                    <div class="project__detail__card__item__subtitle">Vị trí</div>
                    <div class="project__detail__card__item__des"><?= wp_kses_post($position) ?></div>
                </div>
                <div class="project__detail__card__item">
                    <div class="project__detail__card__item__icon image__full">
                        <img src="./assets/img/icon_area.svg" alt="">
                    </div>
                    <div class="project__detail__card__item__subtitle">Tổng diện tích</div>
                    <div class="project__detail__card__item__des"><?= wp_kses_post($dien_tich) ?></div>
                </div>
                <div class="project__detail__card__item">
                    <div class="project__detail__card__item__icon image__full">
                        <img src="./assets/img/icon_type.svg" alt="">
                    </div>
                    <div class="project__detail__card__item__subtitle">Loại dự án</div>
                    <div class="project__detail__card__item__des"><?= wp_kses_post($project_type) ?></div>
                </div>
                <div class="project__detail__card__item">
                    <div class="project__detail__card__item__icon image__full">
                        <img src="./assets/img/icon_value.svg" alt="">
                    </div>
                    <div class="project__detail__card__item__subtitle">Quy mô</div>
                    <div class="project__detail__card__item__des"><?= wp_kses_post($quy_mo) ?></div>
                </div>
            </div>
        </section>
        <section class="project_detail_thumb">
            <div class="kl-container">
                <div class="project_detail_thumb_main swiper">
                    <div class="swiper-wrapper">
                        <?php

                        if (!empty($thumb_imgs)) :
                            foreach ($thumb_imgs as $item) :
                                $img_url = wp_get_attachment_image_url($item['img'], 'large');
                                if ($img_url) :
                        ?>
                                    <div class="swiper-slide project_detail_thumb_item image__fullfill">
                                        <img src="<?php echo esc_url($img_url); ?>" alt="">
                                    </div>
                        <?php
                                endif;
                            endforeach;
                        endif;
                        ?>

                    </div>
                    <div class="swiper_navi project_detail_thumb_navi">
                        <div class="project_detail_thumb_navi_item item_prev ">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.4173 11H4.58398" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.0007 17.4163L4.58398 10.9997L11.0007 4.58301" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="project_detail_thumb_navi_item item_next">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.58398 11H17.4173" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11 4.58301L17.4167 10.9997L11 17.4163" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project__detail__other">
            <div class="project__detail__other__subtitle subtitle__section">Dự Án</div>
            <div class="project__detail__other__smalltitle title__section">Các Dự Án Khác</div>
            <div class="project__detail__other__wrap swiper">
                <div class="project__detail__other__inner swiper-wrapper">
                    <?php
                    $current_id = get_the_ID();

                    $other_projects = get_posts(array(
                        'post_type'      => 'project',
                        'posts_per_page' => -1,
                        'post__not_in'   => array($current_id),
                    ));

                    if (!empty($other_projects)) :
                        foreach ($other_projects as $post) :
                            setup_postdata($post);

                            $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            $title     = get_the_title();
                            $permalink = get_permalink();

                            // Lấy category đầu tiên nếu có
                            $terms = get_the_terms(get_the_ID(), 'project_category');
                            $category = (!empty($terms) && !is_wp_error($terms)) ? $terms[0]->name : 'Dự Án';
                    ?>
                            <a href="<?php echo esc_url($permalink); ?>" class="project__detail__other__item swiper-slide">
                                <div class="project__detail__other__item__inner">
                                    <div class="project__detail__other__item__img image__fullfill">
                                        <div class="project__detail__other__item__img__overlay"></div>
                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>">
                                    </div>
                                    <div class="project__detail__other__item__des">
                                        <div class="project__detail__other__item__des__inner">
                                            <div class="invert-border top-left">
                                                <div class="invert-inner bot-left"></div>
                                            </div>
                                            <div class="invert-border bot-right">
                                                <div class="invert-inner bot-right"></div>
                                            </div>
                                            <div class="project__detail__other__item__des__subtitle">
                                                <?php echo esc_html($category); ?>
                                            </div>
                                            <div class="project__detail__other__item__des__locate">
                                                <?php echo esc_html($title); ?>
                                            </div>
                                            <div class="project__detail__other__item__des__link">
                                                <div class="project__detail__other__item__des__link__txt">Chi Tiết</div>
                                                <div class="project__detail__other__item__des__link__icon image__full">
                                                    <img src="/assets/img/arrow-right.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>
        </section>

<?php
    endwhile;
endif;
?>

<?php
wp_enqueue_script('project-detail-js', get_template_directory_uri() . '/js/project_detail.js', array(), SITE_VERSION, true);
get_footer(); ?>