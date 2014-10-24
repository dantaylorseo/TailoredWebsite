<?php get_header(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
      <div id="content">
      <h1>Blog</h1>
      <div class="content">
		
			<h2 class="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
			

      </div>
      </div>
      <?php endwhile; // end of the loop. ?>

     <?php get_footer(); ?>