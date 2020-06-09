<?php
// Template Name: Portfolio
	get_header();
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

		<section class="container fadeInDown" data-slide="quote" data-anime="1200">
			<blockquote class="quote_clientes">
				<p><?php the_field('quote_cliente_1'); ?></p>
				<cite><?php the_field('citacao_cliente_1'); ?></cite>
			</blockquote>

			<blockquote class="quote_clientes">
				<p><?php the_field('quote_cliente_2'); ?></p>
				<cite><?php the_field('citacao_cliente_2'); ?></cite>
			</blockquote>

			<blockquote class="quote_clientes">
				<p><?php the_field('quote_cliente_3'); ?></p>
				<cite><?php the_field('citacao_cliente_3'); ?></cite>
			</blockquote>
		</section>

<section class="portfolio">
	<?php include(TEMPLATEPATH . "/inc/slider-portfolio.php") ?>
</section>

<?php } } ?>
<?php get_footer(); ?>
