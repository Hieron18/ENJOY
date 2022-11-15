<?php 
/**
   Template Name: news
 * @package WordPress
 * @subpackage Enjoy
 */
?>
<?php get_header(); ?>
      <main class="page">
            <div class="sawdust">
               <div class="sawdust__content _container">
                  <ul class="sawdust__menu">
                     <li class="sawdust__link _pvp-link"><a href="#">Sort by:</a></li>
                     <li class="sawdust__link"><a href="#">publication date</a><i class="fa fa-angle-down" aria-hidden="true"></i></li>
                  </ul>
               </div>
            </div>
            
            <div class="news">
               <div class="news__content _container">

               <?php
                  $sources = get_field( 'news__tabs' );
                  foreach( $sources as $src) {
               ?>
                     <div class="news__block">
                        <div class="news__img">
                           <picture><source srcset="<?= $src['news__image'] ?>" type="image/webp"><img src="<?= $src['news__image'] ?>" alt=""></picture>
                        </div>
                        <div class="news__info">
                           <div class="news__head">
                              <h3><?= $src['news__head'] ?></h3>
                           </div>
                           <div class="news__date">
                              <div class="sawdust">
                                 <div class="sawdust__content">
                                    <ul class="sawdust__menu">
                                       <li class="sawdust__link _pvp-link"><a href="#">Apr 11</a><i class="fa fa-circle" aria-hidden="true"></i></li>
                                       <li class="sawdust__link _pvp-link"><a href="#">5 min read</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="news__text">
                              <p><?= $src['news__text'] ?> <a href="<?= $src['news__link'] ?>">READ MORE</a></p>
                           </div>
                           <div class="news__levle">
                              <div class="news__like">
                                 <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                 <p>(17)</p>
                              </div>
                              <div class="news__dislike">
                                 <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                 <p>(1)</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php }  ?>
                  <!-- 1 -->

                  <div class="news__switching">
                     <div class="news__box">
                        <?php
                        $rows = get_field('group_left');
                        if( $rows ){

                           if($rows['arrow__none']){
                              echo '<a href="'.$rows['arrow__left'].'" class="news__arrow _newscolorwhite"><i class="fa fa-angle-left" aria-hidden="true"></i></a>';
                           }
                           else {
                              echo '<div class="news__arrow _newscolor"><i class="fa fa-angle-left" aria-hidden="true"></i></div>';
                           }
                         } ?>
                        <div class="news__numbers">
                           <?php
                              $sources = get_field( 'arrow__nav' );
                              foreach( $sources as $src) {
                           ?>
                              <? if($src['number__color']){
                                    echo '<a href="'.$src['number__link'].'" class="news__number _newscolor">'.$src['number'].'</a>';
                              }
                              else {
                                    echo '<a href="'.$src['number__link'].'" class="news__number">'.$src['number'].'</a>';
                              }?>
                           <?php }  ?>
                        </div>
                        <?php
                        $rows = get_field('group_right');
                        if( $rows ){

                           if($rows['arrow__none2']){
                              echo '<a href="'. $rows['arrow__right'] .'" class="news__arrow _newscolorwhite"><i class="fa fa-angle-right" aria-hidden="true"></i></a>';
                           }
                           else {
                              echo '<div class="news__arrow _newscolor"><i class="fa fa-angle-right" aria-hidden="true"></i></div>';
                           }
                         } ?>
                     </div>
                  </div>

               </div>
            </div>

         </main>
<?php get_footer(); // подключаем footer.php ?>