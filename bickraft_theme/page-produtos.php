<?php
// Template Name: Produtos
	get_header();
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/intro.php"); ?>

		<?php
			$the_query = new WP_Query([
				'post_type' => 'produtos',
				'order' => 'ASC'
			]);

			if($the_query->have_posts()) {
				while($the_query->have_posts()) {
					$the_query->the_post();
		?>

			<section class="container produto_item fadeInDown" data-anime="1200">
				<style>
					a h2 {
						transition: all .6s;
					}
					a div:nth-child(2) {
						transition: all .6s;
					}
					a img:nth-child(1) {
						transition: all .6s;
					}
					a:hover h2 {
						font-size: 38px;
					}
					a:hover div:nth-child(2) {
						box-shadow: 0 0 8px #000;
					}
					a:hover img:nth-child(1) {
						box-shadow: 0 0 8px #000;
					}
				</style>
			<a
				href="<?php the_permalink(); ?>"
				target="blank"
			>
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
			</a>
		</section>

		<?php
				}
			}
			wp_reset_query();
			wp_reset_postdata();
		?>

		<?php include(TEMPLATEPATH . "/inc/orcamento.php"); ?>

<?php } } ?>

<?php get_footer(); ?>
