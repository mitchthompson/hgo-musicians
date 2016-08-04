<?php get_header(); ?>
    <div id="content" class="front-page">   
        <div id="banner-box">
            <div id="banner flexslider">
                <!-- Begin Flex Slider -->
                    <ul class="slides">
                        <li>
                            <img src="<?php bloginfo('template_directory') ?>/images/banner.png" alt="banner" width="920" height="300"/>
                        </li>
                    </ul>
                <!-- End Flex Slider -->
                <div id="quotes">
                     <blockquote>"Best orchestra performance I have ever seen!"- The Guardian</blockquote>
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
                <?php //retrieve 3 most recent posts 
                    $args = array('numberposts' => 3);
                    $posts = get_posts($args);
                ?>
                <?php foreach ($posts as $post){ //loop through posts and render ?>
                    <?php
                        // echo '<pre>';
                        // echo var_dump($posts);
                        // echo '<pre>';
                     ?>
                    <div id="<?php the_title(); ?>" class="post">
                        <h2><?php the_title(); // get the page or posting title ?></h2> 
                        <div id="excerpt"><?php 
                            $str = $post->post_content;
                            echo substr($str,0,127).'...'; ?>
                            </div><!--excerpt-->
                        <a href="<?php the_permalink(); ?>">READ MORE</a>
                    </div><!--post-->
                <?php } ?>
            </div><!--posts-box-outer-->
        </div><!--posts-->
    </div><!--content-->
    
    <?php get_footer();?>
