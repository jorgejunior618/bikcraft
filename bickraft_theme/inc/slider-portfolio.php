<?php $portfolio = get_page_by_title('portfolio'); ?>

<div class="container" data-slide="portfolio">
  <ul class="portfolio_lista">
    <li class="grid-8">
      <img
        src="<?php the_field('portfolio_imagem_1', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_1', $portfolio); ?>"
      />
    </li>
    <li class="grid-8">
      <img
        src="<?php the_field('portfolio_imagem_2', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_2', $portfolio); ?>"
      />
    </li>
    <li class="grid-16">
      <img
        src="<?php the_field('portfolio_imagem_3', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_3', $portfolio); ?>"
      />
    </li>
  </ul>

  <ul class="portfolio_lista">
    <li class="grid-8">
      <img
        src="<?php the_field('portfolio_imagem_4', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_4', $portfolio); ?>"
      />
    </li>
    <li class="grid-8">
      <img
        src="<?php the_field('portfolio_imagem_5', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_5', $portfolio); ?>"
      />
    </li>
    <li class="grid-16">
      <img
        src="<?php the_field('portfolio_imagem_6', $portfolio); ?>"
        alt="<?php the_field('portfolio_descricao_imagem_6', $portfolio); ?>"
      />
    </li>
  </ul>
</ul>
</div>
<?php if (!is_page('portfolio')) { ?>
<div class="call">
  <p><?php the_field('chamada_portfolio'); ?></p>
  <a href="/portfolio" class="btn">Portfólio</a>
</div>
<?php } ?>
