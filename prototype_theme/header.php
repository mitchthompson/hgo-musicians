<!DOCTYPE html>
<html <?php language_attributes();?>>
<head lang="en">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title()?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/flexslider.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/scripts/scripts.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/scripts/jquery.flexslider.js"></script>
    <?php wp_head();?>
</head>
<header>
    <nav>
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo.png"></a>
    <?php wp_nav_menu(array('menu'=>'Navigation', 
                            'container'  => 'ul',
                            'menu_class'=>'nav',
                            'theme_location' => 'Navigation'
                           ));?>
    </nav>
</header>
<body <?php body_class();?> >
    