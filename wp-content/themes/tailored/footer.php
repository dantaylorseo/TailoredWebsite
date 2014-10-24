<footer id="main-footer">
	<div id="main-footer-inner" class="wrapper">
    	<section class="footer-box">
        	<h1>Other Information</h1>
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </section>
        <section class="footer-box">
        	<h1>Latest Blogs</h1>
          <ul>
			<?php
            
            
            $args = array( 'posts_per_page' => 3 );
            
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endforeach; 
            wp_reset_postdata();?>
            
            </ul>
        </section>
        <section class="footer-box last">
        	<h1>Contact Info</h1>
            <p>61 Townfield Lane
            <br>Bebington
            <br>Cheshire, CH63 7NL</p>
            <table>
            	<tbody><tr>
                	<th>Tel</th><td><span class="callTrack_Replace">0843 289 7628</span></td>
                </tr>
                <tr>
            		<th>Company</th><td>07493176</td>
                </tr>
                <tr>
            		<th>VAT</th><td>123 5209 48</td>
                 </tr>
            </tbody></table>
        </section>
        <div class="clear"></div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>