<?php 
/*
   Template Name: profile
*/
?>
<?php get_header(); ?>
   <main class="page _container">

      <?php
            if($_COOKIE['user'] == '') :
      ?>
      <?php else: ?>
            <p style="margin-top: 60px;">Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите здесь <a href="<?php bloginfo('template_url'); ?>/exit.php">здесь</a>.</p>

      <?php endif; ?> 

   </main>

<?php get_footer(); ?>