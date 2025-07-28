  <?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->

<head>
<meta charset="UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<title><?php  wp_title(''); ?></title>
<link href="<?= get_template_directory_uri(); ?>/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/plugin/font-awesome/css/all.min.css" rel="stylesheet" >

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css?v=<?= SITE_VERSION ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php
$currentLang = get_locale();
$currentLang= explode("_",$currentLang)[0];

	wp_head();
  $currentLang = get_locale();
  $currentLang= explode("_",$currentLang)[0];
  $languages=[
    ["url"=>"#","slug"=>"vi"],  
    ["url"=>"#","slug"=>"en"],
  ];
  if(function_exists("pll_the_languages")){
    $languages =   pll_the_languages( array(
           'show_flags' => 0,
           'hide_current'=>0,
           'raw'=>1
      ));  
  }
  
 ?>

 <script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    var thankurl = "<?php echo getPageTemplateUrl('thanks'); ?>";
    var template_directory = "<?php echo get_template_directory_uri(); ?>";
    var app = {
      message:{
        content_empty:'<?= __("Nội dung đang cập nhật","tbs") ?>',
        register_success:'<?= __("<p>Cám ơn Quý khách đã liên hệ!</p><p>Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất<p>Xin cảm ơn!</p>","tbs") ?>',
        register_duplicate:'<?= __("<p>Đăng ký không thành công.</p><p>Tài khoản Email hoặc Số điện thoại đã được liên hệ.</p>","tbs") ?>',
        register_false:'<?= __("<p>Đăng ký không thành công.</p><p>Vui lòng liên hệ qua hotline.</p>","tbs") ?>',
        term_false:'<?= __("DIEU_KHOAN_LOI_XAC_NHAN","tbs") ?>',
        term_success:'<?= __("DIEU_KHOAN_HOAN_THANH","tbs") ?>',
        term_success_button:'<?= __("Hoàn thành","tbs") ?>'
      },
      variable: {lang:'vi_VN'},
    }
</script>


</head>

<?php 
  global $disableFullpage;
  global $pageClass;
?>
<body class="<?= $pageClass ?>">
  <!-- Header -->
  <?php
$logo = wp_get_attachment_url(tr_options_field('tr_theme_options.logo')); // hoặc get_custom_logo()
$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['primary'] ?? '');
$half = ceil(count($menu_items) / 2);
$menu_left = array_slice($menu_items, 0, $half);
$menu_right = array_slice($menu_items, $half);
?>

<header id="mainHeader" class="main-header">
    <div class="kl-container position-relative">
        <div class="d-flex justify-content-center align-items-center flex-wrap">

            <!-- Left Menu -->
            <ul class="nav">
                <?php foreach ($menu_left as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($item->object_id == get_queried_object_id()) echo ' active'; ?>" href="<?= esc_url($item->url) ?>"><?= esc_html($item->title) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Logo -->
            <div class="nav-center-logo logo">
                <a href="<?= esc_url(home_url('/')) ?>">
                    <img src="<?= esc_url($logo) ?>" alt="Logo">
                </a>
            </div>

            <!-- Right Menu -->
            <ul class="nav">
                <?php foreach ($menu_right as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php if ($item->object_id == get_queried_object_id()) echo ' active'; ?>" href="<?= esc_url($item->url) ?>"><?= esc_html($item->title) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="mobile-menu-toggle d-xl-none">
        <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
    </div>
    <div class="mobile-logo kl-container d-xl-none">
        <a href="<?= esc_url(home_url('/')) ?>">
            <img src="<?= esc_url($logo) ?>" alt="logo" />
        </a>
    </div>
</div>

<div class="mobile-menu-overlay"></div>
<?php
global $wp;
$current_url = home_url(add_query_arg([], $wp->request));
?>
<nav class="mobile-menu d-xl-none">
    <div class="mobile-menu-header">
        <span class="close-menu">&times;</span>
    </div>
    <ul class="mobile-nav">
        <?php foreach ($menu_items as $item): ?>
            <?php
                $is_active = rtrim($item->url, '/') === rtrim($current_url, '/');
            ?>
            <li class="<?= $is_active ? 'active' : '' ?>">
                <a href="<?= esc_url($item->url) ?>" class="<?= $is_active ? 'active' : '' ?>">
                    <?= esc_html($item->title) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>


  <!-- /Header --> 
  <div id="fullpage" class="fp-custom ">