<?php get_header(); ?>
<section id="page-header">
	<div id="page-header-inner" class="wrapper">
    	<h1>Testimonials</h1>
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
    	<section id="content">
        	<?php if( have_posts() ) : while( have_posts() )  : the_post() ;?>
                <article class="archive">
                    <h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
            	<?php wp_pagenavi(); ?>
            <?php endif;  ?>
          </section>
          <section id="sidebar">
          <div class="sidebox">
       		<h1>Get in touch</h1>
          		<?php echo do_shortcode('[contact-form-7 id="2960" title="Get In Touch Sidebar"]'); ?>
          	</div>
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
          
          </section>
          <div class="clear"></div>
  </div>
</section>
        <div class="clear"></div>
    </div>
</section>
<?php get_footer(); ?>