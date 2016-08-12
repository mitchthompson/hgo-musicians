<?php get_header(); ?>
    <div id="content" class="front-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="banner-box">
                    <div class="row">
                        <div class="col-md-7 col-sm-12" id="quotes">
                            <p>"Best orchestra performance I have ever seen!" - The Guardian</p>
                            <div class="text-center">
                                <a href="<?php echo get_page_link(4); ?>">ABOUT US</a>
                            </div>
                        </div><!--quotes-->
                        <div class="col-md-5 col-sm-12" id="events">
                            <?php get_sidebar(); ?>
                            <a class="event-calender" href="<?php echo get_page_link(10);?>">EVENT CALENDAR</a>
                        </div><!--events-->
                    </div><!--row-->
                </div><!--banner-box-->

                <div class="container" id="front-page-posts">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="heading">LATEST NEWS</h2>
                        </div><!--col-xs-12-->
                            <?php //retrieve 3 most recent posts 
                                $args = array('numberposts' => 3);
                                $posts = get_posts($args);
                            ?>
                            <?php foreach ($posts as $post){ //loop through posts and render ?>
                                <div class="col-sm-4 post-box" id="<?php the_title(); ?>">
                                    <h2><?php the_title(); // get the page or posting title ?></h2> 
                                    <div id="excerpt"><?php 
                                        $str = $post->post_content;
                                        echo substr($str,0,127).'...'; ?>
                                    </div><!--excerpt-->

                                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                                </div><!--post-box-->
                            <?php } ?>
                        
                    </div><!--row-->
                </div><!--front-page-posts-->
            </div><!--row-->
        </div><!--container-->
    </div><!--content-->
    
    <?php get_footer();?>
