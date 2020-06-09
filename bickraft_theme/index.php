<?php get_header(); ?>

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>
    <style>
      .content.container {
        margin-top: 131px;
        margin-bottom: 40px;
      }
    </style>

	  <section class="content container">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </section>

<?php
  }
}
else { ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); } ?></p>

<?php get_footer(); ?>
