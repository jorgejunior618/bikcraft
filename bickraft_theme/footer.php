<?php
$pagina_contato = get_page_by_title('contato');
?>

<style>
	.quebra {
		background: url("<?php the_field('imagem_quebra', $pagina_contato); ?>") no-repeat center;
		background-size: cover;
	}
</style>


		<div class="quebra">
			<blockquote class="quote-externo container">
				<p><?php the_field('quote_qubra', $pagina_contato); ?></p>
				<cite><?php the_field('citacao_quebra', $pagina_contato); ?></cite>
			</blockquote>
		</div>

		<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p><?php the_field('resumo_historia', $pagina_contato); ?><!-- Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa. --></p>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- <?php the_field('telefone', $pagina_contato); ?></li>
							<li>- <?php the_field('email', $pagina_contato); ?></li>
							<li>- <?php the_field('localizacao', $pagina_contato); ?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Redes Sociais</h3>
						<?php include(TEMPLATEPATH . "/inc/redes_sociais.php"); ?>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php bloginfo('name'); echo ' ' . date("Y"); ?> - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>

	<?php wp_footer(); ?>

	</body>
</html>
