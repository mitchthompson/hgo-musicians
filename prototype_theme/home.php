<?php get_header(); ?>
    <div id="content" class="blog">   
        
        <div id="posts">
            <h2 class="heading">Blog</h2>
            <div id="posts-box-outer">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
                <!-- Page Content Goes Here -->
                <div id="<?php the_title(); ?>" class="post">
                    <div id="post-title">
                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>
                    </div><!--post-title-->
                    <div id="post-body">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <!-- Medium Large (added in WP 4.4) resolution (768 x 0 infinite height) -->
                                <?php the_post_thumbnail('medium-large'); ?>
                            </a>
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                        <a id="read-more" href="<?php the_permalink(); ?>">READ MORE</a>
                    </div><!--post-body-->
                </div><!--post-->
                <?php endwhile; endif; // end the loop ?>

            </div><!--posts-box-outer-->
        </div><!--posts-->
    </div><!--content-->
    
    <?php get_footer();?>
