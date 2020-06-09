<?php get_header(); ?>

<style>
  .content.container {
    margin-top: 131px;
    margin-bottom: 40px;
  }
  
  .content.container h1 {
    text-align: center;
    font-size: 50px;
    margin-bottom: 30px
  }

  .content.container p {
    text-align: center;
    font-size: 18px;
  }

</style>

<section class="content container">
  <h1>&lt; 404 &gt;<br>Page Not Found </h1>
  <p><?php _e('Sorry, te page url does not exists.'); ?></p>
</section>

<?php get_footer(); ?>
