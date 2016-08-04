<?php get_header(); ?>
    <div id="content" class="blog">   
        
        <div id="posts">
            <h2 class="heading">Blog</h2>
            <div id="posts-box-outer">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
                <!-- Page Content Goes Here -->
                <div id="<?php the_title(); ?>" class="post">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                </div><!--post-->
                <?php endwhile; endif; // end the loop ?>

            </div><!--posts-box-outer-->
        </div><!--posts-->
        <small>home.php</small>
    </div><!--content-->
    
    <?php get_footer();?>
