<?php get_header(); ?>
<div id="scroller" class="borders">
					<div id="scrollin">
<?php
	$args = array(  
		'post_type' => 'product',  
		'meta_key' => '_featured',  
		'meta_value' => 'yes',  
		'posts_per_page' => 1  
	);  
	$featured_query = new WP_Query( $args );  
	if ($featured_query->have_posts()) :   
		while ($featured_query->have_posts()) :   
			$featured_query->the_post();  
			$product = get_product( $featured_query->post->ID );  
			//print_r($product);
			if ( has_post_thumbnail() ) {
				 $attachurl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'prod_feat');
				 $attachurl = $attachurl[0];
			} else {
				$attachurl = false;	
			}
			echo '
						<div id="scrollhead">Featured Beer Box</div>
						<div id="scrollimg"><a href="'.get_permalink().'" class=""><img src="'.$attachurl.'" /></a></div>
						<div id="scrolltitle"><a href="'.get_permalink().'" class="">'.get_the_title().' - just '.$product->get_price_html().'</a></div>
					
			';
			
		?>
        <?php
				endwhile;  
				endif;  
				wp_reset_query(); // Remember to reset  
		?>
    </div>
				</div>
    
    
    <div class="clear"></div>
    <div id="contentwrap">
    	<div id="homecontent" class="padding borders">
        	<h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
    <div id="homeboxwrap">
    	<div id="homeboxes" class="padding">
       	 <?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>False<?php endif; ?>
       	 <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>False<?php endif; ?>
         <?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) : ?>False<?php endif; ?>
            <div class="homebox borders last">
            	<h3 class="brown">Suggest a New Brew</h3>
                <form id="form1" name="form1" method="post" action="" class="hiddengemform">
                <p>Use this form to suggest a beer that we could add to our monthly boxes.</p>
               	  <input type="text" class="gemform" name="beer" title="Name of beer" />
                  <input type="text" class="gemform" name="brewery" title="Brewery" />
                    <input type="text" class="gemform" name="email" title="Email address" />
                    <input name="beersub" type="submit" class="button" value="Send" id="beersub" />
                </form>
            </div>
            <div class="clear"></div>
        </div>
        </div>
    <?php get_footer(); ?>