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
                    <ul>
                        <li>
<!--                            <h3>2.13</h3>-->
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>In pretium accumsan suscipit.</p>
                        </li>
                        <li>
<!--                            <h3>2.25</h3>-->
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>Pellentesque volutpat nunc consectetur.</p>
                        </li>
                        <li>
<!--                            <h3>3.11</h3>-->
                            <h3>LOREM IPSUM DOLOR SIT AMET</h3>
                            <p>Pellentesque volutpat nunc consectetur.</p>
                        </li>
                    </ul>
                    <a href="#">EVENT CALENDAR</a>
                </div><!--events-->
            </div>
        </div><!--banner-->
        
        <div id="posts">
            <h2 class="heading">LATEST NEWS</h2>
            <div id="posts-box-outer">

                <!-- Page Content Goes Here -->
                <?php $i = 1; if ( have_posts() ) : while ( $i <= 3 ) : the_post(); // start the loop ?>
                <div id="<?php the_title(); ?>" class="post">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div><!--post-->
                <?php $i++; endwhile; endif; // end the loop ?>

            </div><!--posts-box-outer-->
        </div><!--posts-->
        <small>index.php</small>
    </div><!--content-->
    
    <?php get_footer();?>

    </body>
</html>
