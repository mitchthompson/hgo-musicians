<?php get_header(); ?>

<div id="content" class="page">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <h2><?php the_title(); // get the page or posting title ?></h2> 
        <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    <?php get_child_pages(); ?>
    <small>page.php</small>
</div><!-- End Content -->

    
<?php get_footer();?>
