<?php 
/**
 * Доставка и оплата (pvpboost.php)
   Template Name: boost
 * @package WordPress
 * @subpackage Enjoy
 */
?>
<?php get_header(); ?>

         <div class="back-image">
            <div class="back-image__img">
               <picture><source srcset="<?php the_field("pvp__cap") ?>" type="image/webp"><img src="<?php the_field("pvp__cap") ?>" alt=""></picture>
            </div>
         </div>
      <main class="page">

            <div class="sawdust">
               <div class="sawdust__content _container">
                  <ul class="sawdust__menu">
                     <li class="sawdust__link"><a href="#"><?php the_field("pvp__item1") ?></a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li class="sawdust__link"><a href="#"><?php the_field("pvp__item2") ?></a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li class="sawdust__link _pvp-link"><a href="#"><?php the_field("pvp__item3") ?></a></li>
                  </ul>
               </div>
            </div>

            <div class="pvpblock">
               <div class="pvpblock__content _container">
                  <div class="pvpblock__block">
                     <div class="pvpblock__head">
                        <h1><?php the_field("pvp__title") ?></h1>
                     </div>
                     <div class="pvpblock__text">
                        <p><?php the_field("pvp__text") ?></p>
                     </div>
                  </div>
                  
               </div>
            </div>

            <div class="cards">
               <div class="cards__content _container">
                  <div class="boost">
                        <div class="boost__bottom">
                        <?php
                           $sources = get_field( 'pvp_tabs' );
                           foreach( $sources as $src) {
                        ?>
                           <a href="<?= $src['pvp__link'] ?>" class="boost__block">
                              <div class="boost__img">
                                 <picture><source srcset="<?= $src['pvp__image'] ?>" type="image/webp"><img src="<?= $src['pvp__image'] ?>" alt=""></picture>
                                 <div class="boost__background"></div>
                              </div>
                              <div class="boost__text">
                                 <p><?= $src['pvp__head'] ?></p>
                              </div>
                           </a>
                        <?php }  ?>
                     </div>
                  </div>
                  
               </div>
            </div>
         </main>
<?php get_footer(); // подключаем footer.php ?>