<!DOCTYPE html>
<html <?php language_attributes();?>>
<head lang="en">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title()?></title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript for bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/flexslider.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/scripts/jquery.flexslider.js"></script>
    <?php wp_head();?>
</head>
<header>

    <nav class="container">
        <a href="<?php bloginfo('url'); ?>"><img class="logo img-responsive" src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo.png"></a>
        
        <?php wp_nav_menu(array('menu'=>'Navigation', 
                'container'  => 'ul',
                'menu_class'=>'nav',
                'theme_location' => 'Navigation'
               ));?>
    </nav>
    
    
</header>
<body <?php body_class();?> >
    