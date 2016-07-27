<?php get_header(); ?>
    <div id="content" class="home">
        
        <div id="banner-box">
            <div id="banner">
                <div id="quotes">
                     <blockquote>"Best orchestra performance I have ever seen!"<span> - The Guardian</span></blockquote>
                     <a href="#">ABOUT US</a>
                </div><!--quotes-->
                <div id="events">
                    <h2>Upcoming Performances</h2>
                        <div class="upcoming-events">
                            <div class="date">
                                <h2>2.13</h2>
                            </div><!--date-->
                            <div class="info">
                                <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                                <p>In pretium accumsan suscipit. Pellentesque volutpat nunc consectetur.</p>
                            </div><!--info-->
                        </div><!--upcoming events-->
                     
                        <div class="upcoming-events">
                            <div class="date">
                                <h2>2.25</h2>
                            </div><!--date-->
                            <div class="info">
                                <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                                <p>In pretium accumsan suscipit. Pellentesque volutpat nunc consectetur.</p>
                            </div><!--info-->
                        </div><!--upcoming events-->
                        
                         <div class="upcoming-events">
                            <div class="date">
                                <h2>3.15</h2>
                            </div><!--date-->
                            <div class="info">
                                <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                                <p>In pretium accumsan suscipit. Pellentesque volutpat nunc consectetur.</p>
                            </div><!--info-->
                        </div><!--upcoming events-->
                      
                    <a href="#">EVENT CALENDAR</a>
                </div><!--events-->
            </div>
        </div><!--banner-->
        
        <div id="posts">
            <h2 class="heading">LATEST NEWS</h2>
            <div id="posts-box-outer">

                <!-- Page Content Goes Here -->
                <?php if ( get_posts("numberposts=1") ) : while ( get_posts("numberposts=1") ) : the_post(); // start the loop ?>
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

    </body>
</html>
