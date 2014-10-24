<?php 



	get_header(); 

	$categories = get_the_category();

	

?>

<?php

global $more;

$more = 0;

?>

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

    	<h1 <?php if($attachurl) { echo 'class="thumb"'; } ?> ><?php echo $categories[0]->cat_name; ?>: <?php the_title(); ?></h1>

        <small <?php if($attachurl) { echo 'class="thumb"'; } ?>>Posted on <?php the_date("l jS \of F Y"); ?> by <?php the_author(); ?> in <?php the_category(', ') ?></small>

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

                <article class="single">

                    

                    <?php the_content('Continue Reading...'); ?>

                    <?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?>

                </article>

                <?php if ( is_singular() && get_the_author_meta( 'description' ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>

				<div class="author-info">

					<div class="author-avatar">

						<?php echo get_avatar( get_the_author_meta( 'user_email' )); ?>

					</div><!-- .author-avatar -->

					<div class="author-description">

						<h2><?php printf( __( 'About the author %s', 'twentytwelve' ), get_the_author() ); ?></h2>

						<p><?php the_author_meta( 'description' ); ?></p>

                        

						<div class="author-link">

							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">

								<?php printf( __( 'All Posts by %s', 'twentytwelve' ), get_the_author() ); ?></a><?php if(get_the_author_meta('twitter')) { ?>

                             | <a href="http://twitter.com/<?php echo get_the_author_meta('twitter'); ?>">@<?php echo get_the_author_meta('twitter'); ?></a>

                            <?php } ?>

                            <?php if(get_the_author_meta('facebook')) { ?>

                            | <a href="<?php echo get_the_author_meta('facebook'); ?>">Facebook</a>

                            <?php } ?>

						</div><!-- .author-link	-->

					</div><!-- .author-description -->

				</div><!-- .author-info -->

			<?php endif; ?>

<?php if(is_single()) { comments_template( '', true ); } ?>

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