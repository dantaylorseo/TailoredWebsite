<?php get_header();  ?>
<?php if( have_posts() ) : while( have_posts() ): the_post(); ?>
<?php  

	if ( has_post_thumbnail() ) {

		 $attachurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

		 $attachurl = $attachurl[0];

	} else {

		$attachurl = false;	

	}

?> 

<section id="page-header" style="<?php if($attachurl) { echo 'background-image: url('.$attachurl.'); background-position: center;'; } ?>">
	<div id="page-header-inner" class="wrapper">
    	<h1 <?php if($attachurl) { echo 'class="thumb"'; } ?>><?php  the_title(); ?></h1>
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
    	<article id="content">
        	<?php the_content(); ?>
          </article>
          <section id="sidebar">
       		<div class="sidebox">
       		<h1>Get in touch</h1>
          		<?php echo do_shortcode('[contact-form-7 id="2960" title="Get In Touch Sidebar"]'); ?>
          	</div>
          </section>
          <div class="clear"></div>
  </div>
</section>
        <div class="clear"></div>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>