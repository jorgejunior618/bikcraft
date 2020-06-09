<?php
// Template Name: Single Produtos
  get_header();
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<section style="margin-top: 92px;" class="container produto_item fadeInDown" data-anime="500">
			<div class="grid-11">
        <img
          src="<?php the_field('foto_principal'); ?>"
          alt="Bikcraft <?php the_title(); ?>"
        />
				<h2><?php the_title(); ?></h2>
			</div>
      
      <div class="grid-5 produto_icone">
        <img
          src="<?php the_field('icone_produto'); ?>"
          alt="Icone <?php the_title(); ?>"
        />
      </div>

      <div class="grid-8">
        <img
          src="<?php the_field('foto_produto_2'); ?>"
          alt="Bikcraft <?php the_title(); ?>"
        />
      </div>
      
      <div class="grid-8 produto_info">
        <?php the_content(); ?>
			</div>
		</section>
		
		<?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

<?php } } ?>

<?php get_footer(); ?>
