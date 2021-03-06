<?php get_header(); ?>
<div id="content" class="single container">
    <div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <?php
		global $post;
		$custom 	= get_post_custom();
		$name 		= get_the_title();
		$name_slug	= basename(get_permalink());
		$title 		= $custom["_staff_member_title"][0];
		$email 		= $custom["_staff_member_email"][0];
		$phone 		= $custom["_staff_member_phone"][0];
		$fax 		= $custom["_staff_member_fax"][0];
		$bio 		= $custom["_staff_member_bio"][0];
		$prof 		= $custom["_staff_member_prof"][0];
		$fb_url		= $custom["_staff_member_fb"][0];
		$tw_url		= 'http://www.twitter.com/' . $custom["_staff_member_tw"][0];
		$li_url		= $custom["_staff_member_li"][0];
		if(has_post_thumbnail()){

			$photo_url = wp_get_attachment_url( get_post_thumbnail_id() );
			$photo = '<img class="staff-member-photo img-responsive" src="'.$photo_url.'" alt = "'.$title.'">';
		}else{
			$photo_url = '';
			$photo = '';
		}
		$email_mailto = '<a href="mailto:'.antispambot( $email ).'" title="Email '.$name.'">'.antispambot( $email ).'</a>';
               echo '<div class="col-md-6">';
			   echo $photo;
               echo '</div>';
               echo '<div class="col-md-6">';
			   echo '<div id="musician_bio">';
			   echo '<h3>'.$name.'</h3>';
			   echo '<h4 class="text-capitalize">'.$title.'</h4>';
			   echo $bio;
			   echo '</div></div>'
	?>
	
<?php endwhile; endif; // end the loop ?>
 </div><!-- End Row -->
</div><!-- End Content -->
    
    <?php get_footer();?>
