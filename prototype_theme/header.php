<!DOCTYPE html>
<html <?php language_attributes();?>>
<head lang="en">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head();?>
</head>
<header>
    <nav>
    <img src="<?php bloginfo('template_directory') ?>/images/logo_placeholder.png" alt="logo.png">
    <?php wp_nav_menu(array('menu'=>'Navigation', 'menu_class'=>'nav','theme_location' => 'Navigation'));?>
    </nav>
</header>
<body <?php body_class();?> >