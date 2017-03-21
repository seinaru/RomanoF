<!doctype html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header>
        <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Whitesquare logo"></a>
        <div style="float: right; margin: 0px;">
            <p style="margin: 0px 4px 5px 0px">&#9993; shop@RomanoF.com.ua | <span style="font-size: 14px; font-weight: 800">&#9990;</span>  (000) 444 777 4  </p>
            <?php get_search_form(); ?>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        </nav>
    </header>