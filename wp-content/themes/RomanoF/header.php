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
        <div style="height: 78px;  display: block">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Whitesquare logo" style="display: inline-block"></a>

            <div style="display: block; float: right; margin: 0px; text-align: right; line-height: 9px">
                <div style="display: inline-block; float: left; ">
                    <span style="margin: 0px 4px 5px 0px; text-align: right; vertical-align: top;">&#9993; shop@RomanoF.com.ua </span>
                </div>

                <?php
                $phoneNumbers = array ('(096) 915 38 08', '(093) 589 55 62', '(066) 182 04 85');
                foreach ($phoneNumbers as $value) {
                    echo '<p style="margin: 0px 4px 5px 0px"> <span style="font-size: 14px; font-weight: 800">&#9990;</span>  '.$value.'  </p>';
                }
                ?>

                <?php get_search_form(); ?>
            </div>
        </div>
        <nav class="main-navigation">
            <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
        </nav>
    </header>
