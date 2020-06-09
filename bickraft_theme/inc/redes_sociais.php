<?php
$directory_img = get_template_directory_uri() . '/img/redes-sociais/';
$page_contato = get_page_by_title('contato');
$facebook = get_field('link_facebook', $page_contato);
$instagram = get_field('link_instagram', $page_contato);
$twitter = get_field('link_twitter', $page_contato);
?>
<ul>
  <?php if(!empty($facebook)) { ?>
  <li>
    <a href="<?php echo $facebook; ?>" target="_blank">
      <img
        src="<?php echo $directory_img; ?>facebook.png"
        alt="Facebook Bikcraft"
      />
    </a>
  </li>
  <?php } ?>
  <?php if(!empty($instagram)) { ?>
  <li>
    <a href="<?php echo $instagram; ?>" target="_blank">
      <img
        src="<?php echo $directory_img; ?>instagram.png"
        alt="Instagram Bikcraft"
      />
    </a>
  </li>
  <?php } ?>
  <?php if(!empty($twitter)) { ?>
  <li>
    <a href="<?php echo $twitter; ?>" target="_blank">
      <img
        src="<?php echo $directory_img; ?>twitter.png"
        alt="Twitter Bikcraft"
      />
    </a>
  </li>
  <?php } ?>
</ul>