<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); the_post(); ?>
<?php  

	if ( has_post_thumbnail() ) {

		 $attachurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

		 $attachurl = $attachurl[0];

	} else {

		$attachurl = false;	

	}

?> 

<section id="page-header" style="<?php if($attachurl) { echo 'background-image: url('.$attachurl.'); background-position: center;'; } ?>">
<?php if(get_the_ID() == 167) { echo '<section id="contact-header"></section>'; } ?>
	<div id="page-header-inner" class="wrapper">
    	<h1 <?php if($attachurl || get_the_ID() == 167) { echo 'class="thumb"'; } ?>><?php the_title(); ?></h1>
    </div>
</section>
<section id="breadcrumbs">
	<div id="breadcrumbs-inner" class="wrapper">
   <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('','');
        } ?>
    </div>
</section>
<section id="page">
	<div id="page-inner" class="wrapper">
    	<article id="content" class="full">
        	<?php the_content(); ?>
          </article>
          
          <div class="clear"></div>
  </div>
</section>
        <div class="clear"></div>
    </div>
</section>
<?php get_footer(); ?>