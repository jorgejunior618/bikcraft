<?php
// Template Name: Home
	get_header();
?>

<?php
	$image_id = get_field('background_home');
	$background_large = wp_get_attachment_image_src($image_id, 'large');
	$background_medium = wp_get_attachment_image_src($image_id, 'medium');
?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

<style type="text/css">
.introducao {
	background: url("<?php echo $background_large[0] ?>") no-repeat center;
	background-size: cover;
}

@media only screen and (max-width: 767px) {
.introducao {
	background: url("<?php echo $background_medium[0] ?>") no-repeat center;
	background-size: cover;
}
}
</style>

		<section class="introducao">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown"><?php the_field('titulo_introducao'); ?></h1>
				<blockquote data-anime="800" class="fadeInDown quote-externo">
					<p><?php the_field('quote_introducao'); ?></p>
					<cite><?php the_field('citacao_introducao'); ?></cite>
				</blockquote>
				<a data-anime="1200" href="/produtos" class="btn">Orçamento</a>
			</div>
		</section>
		
		<section class="produtos container  fadeInDown" data-anime="1600">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

			<?php
				$the_query = new WP_Query([
					'post_type' => 'produtos',
					'order' => 'ASC'
				]);

				if($the_query->have_posts()) {
					while($the_query->have_posts()) {
						$the_query->the_post();
			?>

			<style>
				a li {
					transition: all .8s;
				}
				a:hover li {
					box-shadow: 0 0 8px #000;
				}
			</style>
			
			<a
				href="<?php the_permalink(); ?>"
				target="blank"
			>
				<li class="grid-1-3">
					<div class="produtos_icone">
						<img
							src="<?php the_field('icone_produto'); ?>"
							alt="Icone <?php the_title(); ?>"
						/>
					</div>
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('resumo_produto'); ?></p>
				</li>
			</a>
				
			<?php
					}
				}
				wp_reset_query();
				wp_reset_postdata();
			?>

			</ul>

			<div class="call">
				<p><?php the_field('chamada_produtos'); ?></p>
				<a href="/produtos" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<h2 class="subtitulo">Portfólio</h2>
			<?php include(TEMPLATEPATH . "/inc/slider-portfolio.php") ?>
		</section>

		<?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>

<?php } } ?>

<?php get_footer(); ?>