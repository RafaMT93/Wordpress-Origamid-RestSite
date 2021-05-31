<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
  	<section class="container sobre">
		  <h2 class="subtitulo"><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
    </section>
  <?php endif; ?>

<?php get_footer(); ?>