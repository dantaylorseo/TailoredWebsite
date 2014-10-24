<?php get_header(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
      <div class="content">
		
			<h1 class="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
            <?php the_content(); ?>
			

      </div>
      <?php endwhile; // end of the loop. ?>

     <?php get_footer(); ?>