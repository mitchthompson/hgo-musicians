<?php get_header(); ?>
    <div id="content" class="front-page">   
        <div id="banner-box">
            <div id="banner flexslider">
                <!-- Begin Flex Slider -->
                    <ul class="slides">
                        <li>
                            <img src="<?php bloginfo('template_directory') ?>/images/banner_placeholder.png" alt="banner placeholder" width="920" height="300"/>
                        </li>
                    </ul>
                <!-- End Flex Slider -->
                <div id="quotes">
                     <blockquote>"Best orchestra performance I have ever seen!"<span> - The Guardian</span></blockquote>
                     <a href="#">ABOUT US</a>
                </div><!--quotes-->
                
                <div id="events">
                    <?php get_sidebar(); ?>
                    <a class="event-calender" href="#">EVENT CALENDAR</a>
                </div><!--events-->
            </div>
        </div><!--banner-->
        
        <div id="posts">
            <h2 class="heading">LATEST NEWS</h2>
            <div id="posts-box-outer">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
                <!-- Page Content Goes Here -->
                <div id="<?php the_title(); ?>" class="post">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div><!--post-->
                <?php endwhile; endif; // end the loop ?>

            </div><!--posts-box-outer-->
        </div><!--posts-->
        <small>index.php</small>
    </div><!--content-->
    
    <?php get_footer();?>
