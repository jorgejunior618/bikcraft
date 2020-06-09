<?php get_header(); ?>

<section class="introducao-interna introducao-blog">
  <div class="container">
    <h1>Blog</h1>
    <p>As principais notícias sobre Bicicletas</p>
  </div>
</section>
<section class="container blog-container">
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); ?>

	  <article class="grid-16 blog-post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>

<?php
  }
?>
  <div class="nav-blog grid-16">
    <?php next_posts_link('🠐 Posts Antigos'); ?>
    <?php previous_posts_link('Posts Novos 🠒'); ?>
  </div>
<?php
}
?>
</section>

<?php get_footer(); ?>
