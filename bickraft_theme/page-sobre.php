<?php
// Template Name: Sobre
	get_header();
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

		<section class="missao_sobre container fadeInDown" data-anime="1200">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<?php the_field('missao'); ?>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<?php the_field('valores'); ?>
			</div>

			<div class="grid-16 foto-equipe">
				<img
					src="<?php the_field('equipe_imagem'); ?>"
					alt="Equipe Bikcraft"
				/>
			</div>

		</section>
	
		<?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>

<?php } } ?>
<?php get_footer(); ?>
