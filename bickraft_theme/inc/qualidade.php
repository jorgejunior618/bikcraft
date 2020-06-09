<?php $pageSobre = get_page_by_title('sobre'); ?>

<section class="qualidade container">
  <h2 class="subtitulo">Qualidade</h2>
  <img
    src="<?php the_field('logo_bikcraft', $pageSobre); ?>"
    alt="Bikcraft"
  />
  <ul class="qualidade_lista">
    <li class="grid-1-3">
      <h3><?php the_field('item_qualidade_1', $pageSobre); ?></h3>
      <p><?php the_field('descricao_qualidade_1', $pageSobre); ?></p>
    </li>
    <li class="grid-1-3">
      <h3><?php the_field('item_qualidade_2', $pageSobre); ?></h3>
      <p><?php the_field('descricao_qualidade_2', $pageSobre); ?></p>
    </li>
    <li class="grid-1-3">
      <h3><?php the_field('item_qualidade_3', $pageSobre); ?></h3>
      <p><?php the_field('descricao_qualidade_3', $pageSobre); ?></p>
    </li>
  </ul>
  <?php if(!is_page('sobre')) { ?>
  <div class="call">
    <p><?php the_field('chamada_sobre', $pageSobre); ?></p>
    <a href="/sobre" class="btn btn-preto">Sobre</a>
  </div>
  <?php } ?>
</section>