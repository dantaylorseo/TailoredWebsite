<?php
/*
Template Name: Meet The Team
*/
?>
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
            <div class="meetbox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dan.jpg" alt="dan-taylor" width="213" height="213" />
            <h2><a href="dan-taylor/">Dan Taylor</a></h2>
            <h3>Managing Director</h3>
            <div class="teamsocial"><a href="https://www.facebook.com/dantaylorseo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-icon.png"  alt="Facebook"/></a> <a href="http://twitter.com/dantaylorseo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tw-icon.png"  alt="Twitter"/></a> <a href="https://plus.google.com/114468591196473113145/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/plus-icon.png"  alt="Google+"/></a> <a href="http://www.linkedin.com/in/dantaylorseo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/in-icon.png" alt="LinkedIN"/></a></div>
        </div>
        <div class="meetbox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/michelle.jpg" alt="dan-taylor" width="213" height="213" />
            <h2><a href="michelle-taylor/">Michelle Taylor</a></h2>
            <h3>Operations Director</h3>
            <div class="teamsocial"><a href="http://uk.linkedin.com/in/michellejoykelly
"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/in-icon.png" alt="LinkedIN"/></a></div>
        </div>
         <div class="meetbox last">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nic.jpg" alt="dan-taylor" width="213" height="213" />
            <h2><a href="nic-smith/">Nic Smith</a></h2>
            <h3>Head of Paid Search</h3>
            <div class="teamsocial"><a href="https://www.facebook.com/nicsmith83"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-icon.png"  alt="Facebook"/></a> <a href="http://twitter.com/sirholas"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tw-icon.png"  alt="Twitter"/></a> <a href="https://plus.google.com/109735845346875871337/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/plus-icon.png"  alt="Google+"/></a> <a href="http://www.linkedin.com/pub/nicholas-smith/2b/342/481"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/in-icon.png" alt="LinkedIN"/></a></div>
        </div>
        <div class="meetbox">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/suzanne.jpg" alt="dan-taylor" width="213" height="213" />
            <h2><a href="suzanne-cullinan/">Suzanne Cullinan</a></h2>
            <h3>Finance</h3>
            <div class="teamsocial"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-icon.png"  alt="Facebook"/></a> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/plus-icon.png"  alt="Google+"/></a> <a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/in-icon.png" alt="LinkedIN"/></a></div>
        </div>
     
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