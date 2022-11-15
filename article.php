<?php 
/**
 * Доставка и оплата (pvpboost.php)
   Template Name: article
 * @package WordPress
 * @subpackage Enjoy
 */
?>
<?php get_header(); ?>
      <main class="page">
            <div class="article">
               <div class="article__content _container">
                  <div class="article__head">
                     <h1><?php the_field("article__title") ?></h1>
                  </div>
                  <div class="article__block">
                     <div class="article__box">
                        <div class="article__img">
                           <picture><source srcset="<?php the_field("article__image1") ?>" type="image/webp"><img src="<?php the_field("article__image1") ?>" alt=""></picture>
                        </div>
                        <div class="article__text">
                           <p><?php the_field("article__title__text") ?></p>
                        </div>
                     </div>
                     <div class="article__box">
                        <div class="article__art">
                           <div class="article__text">
                              <p><?php the_field("article__text2") ?></p>
                           </div>
                        </div>
                        <div class="article__img">
                           <picture><source srcset="<?php the_field("article__image2") ?>" type="image/webp"><img src="<?php the_field("article__image2") ?>" alt=""></picture>
                        </div>
                     </div>
                     <div class="article__art">
                        <div class="article__text">
                           <p><?php the_field("article__textparag") ?></p>
                        </div>
                     </div>
                     <div class="article__box">
                        <div class="article__img">
                           <picture><source srcset="<?php the_field("article__image3") ?>" type="image/webp"><img src="<?php the_field("article__image3") ?>" alt=""></picture>
                        </div>
                        <div class="article__text">
                           <p><?php the_field("article__text3") ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
<?php get_footer(); // подключаем footer.php ?>