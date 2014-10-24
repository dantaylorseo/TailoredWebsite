<?php get_header(); the_post(); ?>
<section id="page-header">
	<div id="page-header-inner" class="wrapper">
    	<h1><?php the_title(); ?></h1>
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
<?php get_footer(); ?>