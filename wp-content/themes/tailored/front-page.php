<?php get_header(); ?>
<section id="home-scroller">
	<div id="home-scroller-inner" class="wrapper banner" >
    	<ul>
            <li >
                <h1>WordPress <span>Development &amp; Consulting</span></h1>
                <h2>We have developed and launched over 50 WordPress websites</h2>
                <p class="home-price">£50/hour</p>
                <p class="center bottom"><a href="/services/wordpress-development/" class="button">WordPress Websites</a> <a href="/services/psd-to-wordpress/" class="buttonalt">PSD to WordPress</a> <a href="/free-quote/" class="button">Get A Free Quote</a></p>
            </li>
            <li >
                <h1>Search Marketing<span>Organic &amp; Paid</span></h1>
                <h2>Natural, organic &amp; sustainable strategies </h2>
                <p class="home-price">from £500/month</p>
                <p class="center bottom"><a href="/services/search-engine-optimisation/" class="button">Organic Search</a> <a href="/services/pay-per-click/" class="buttonalt">Paid Search</a> <a href="/free-analysis/" class="button">Free Analysis</a></p>
            </li>
            <li >
                <h1>Web Development <span>Bespoke Development &amp; Consulting</span></h1>
                <h2>Brochure, content managed or e-commerce, we have the experience to deliver</h2>
                <p class="home-price">£50/hour</p>
                <p class="center bottom"><a href="/services/wordpress-development/" class="button">WordPress Development</a> <a href="/services/e-commerce-development/" class="buttonalt">e-Commerce Development</a> <a href="/services/bespoke-development/" class="button">Bespoke Development</a></p>
            </li>
        </ul>
        </div>
</section>
<section id="home-boxes">
	<div id="home-boxes-inner" class="wrapper">
    	<article class="home-box">
        	<header><h1 class="about">About Us</h1></header>
            <div>
            	<p>Tailored Internet Marketing is an agency based in the North West of England. We pride ourselves on the quality of the work we produce for our clients.</p>
            	<p>Founded in 2011 by Dan Taylor, Tailored Internet Marketing is a full service digital agency that delivers outstanding results for our clients.</p>
            	<p>Specialists in WordPress and e-Commerce development you can be sure that any project we take on will be delivered on time and to the highest of standards.</p>
                 <p class="center"><a href="/about-us/" class="buttonfull">Read More About Us</a></p>
            </div>
        </article>
        <article class="home-box">
        	<header><h1 class="services">Our Services</h1></header>
            <div>
            	<p>WordPress is at the core of what we offer, whether that is to provide your business with a simple  site or a full blown e-commerce solution. WordPress is one of the most versatile platforms around and can easily cater for the majority of websites and online projects.</p>
            	<p>Where WordPress cannot fulfil the requirements of your business we also develop using the Magento e-commerce platform. Magento is a enterprise level e-commerce platform that can manage online stores moving into the tens of thousands of products.</p>
                 <p class="center"><a href="/services/" class="buttonfull">Find Out More</a></p>
            </div>
        </article>
        <article class="home-box last">
        	<header><h1 class="feedback">Latest Feedback</h1></header>
            <div class="testibanner">
            	<ul>
				<?php
                    $args = array( 'posts_per_page' => 5, 'post_type' => 'testimonials', 'orderby' => 'rand' );
            		$myposts = get_posts( $args );
            		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        	<li>
							<?php 
								ob_start();
								the_content();
								$data = ob_get_clean();
								$data = preg_replace("/<h2>[^>]+>/","",$data);
								$data = split(' ', $data, 51);
								$count = count($data)-1;
								$total = count($data);
								for($i=0;$i<50;$i++) {
									echo $data[$i].' ';
									if($total > 50) {
										if(substr($dynamicstring, -4) != '</p>' && $i == 49) 
										{
											echo '...</p>';	
										}
									}
								}
							?>
                            <p><a href="<?php the_permalink(); ?>">[Read Full Testimonial]</a></p>
                            <p><strong><?php the_title(); ?></strong></p>
                        </li>
            		<?php 
					endforeach; 
            		wp_reset_postdata();
				?>
                </ul>
                </div>
                 <p class="center"><a href="/testimonials/" class="buttonfull">More Testimonials</a></p>
            
        </article>
        <div class="clear"></div>
    </div>
</section>
<?php get_footer(); ?>