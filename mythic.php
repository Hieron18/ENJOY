<?php 
/**
 * Доставка и оплата (pvpboost.php)
   Template Name: mythic
 * @package WordPress
 * @subpackage Enjoy
 */
?>
<?php get_header(); ?>


<main class="page">
				<div class="sawdust">
               <div class="sawdust__content _container">
                  <ul class="sawdust__menu">
                     <li class="sawdust__link"><a href="#"><?php the_field("mythic__item1") ?></a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li class="sawdust__link"><a href="#"><?php the_field("mythic__item2") ?></a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li class="sawdust__link _pvp-link"><a href="#"><?php the_field("mythic__item3") ?></a></li>
                  </ul>
               </div>
            </div>
				<div class="mythic">
					<div class="mythic__content _container">
                  <div class="spollers-block" data-spollers>
                     <?php
                        $sources = get_field( 'spollers' );
                        foreach( $sources as $src) {
                     ?>
                        <!-- 1 -->
                        <div class="spollers-block__item">
                           <div class="spollers-block__title" data-spoller><?= $src['mythic__head'] ?></div>
                           <div class="spollers-block__body">
                              <?= $src['mythic__text'] ?>
                           </div>
                        </div>
                     <?php }  ?>
                  </div>

						<div class="mythic__form">
							<div class="mythic__back">
								<div class="mythic__image">
									<picture><source srcset="<?php the_field("mythic__image") ?>" type="image/webp"><img src="<?php the_field("mythic__image") ?>" alt=""></picture>
								</div>
							</div>
							<div class="mythic__block">
								<div class="mythic__top">
									<div class="mythic__head">
										<h3><?php the_field("mythic__title") ?></h3>
									</div>

                           <?php
                           $repeater = get_field( 'mythic__radio' );
                           foreach( $repeater as $item ) {
                           ?>
                              <div class="mythic__item">
                                 <div class="mythic__title">
                                    <h4><?= $item['mythic__radio_head'] ?></h4>
                                 </div>
                                 <div class="mythic__radio">
                              <?php
                                 foreach ( $item['mythic__radio_radio'] as $subitem ) {
                              ?>
                                    <div class="mythic__option">
                                       <input id="<?= $subitem['mythic__radio_item'] ?>" autocomplete="offf" type="radio" name="<?= $item['mythic__radio_head'] ?>" value="10" data-error="Ошибка" placeholder="" class="input">
                                       <label for="<?= $subitem['mythic__radio_item'] ?>"><span><?= $subitem['mythic__radio_item'] ?></span></label>
                                    </div>
                              <?php }  ?>
                                 </div>
                              </div>
                           <?php }  ?>


                           <?php
                           $repeater = get_field( 'mythic__select' );
                           foreach( $repeater as $item ) {
                           ?>
                              <div class="mythic__item">
										<div class="mythic__title">
											<h4><?= $item['mythic__select_head'] ?></h4>
										</div>
										<div class="mythic__radio">
											<select name="trader" class="form">
                              <?php
                                 foreach ( $item['mythic__select_radio'] as $subitem ) {
                              ?>
                                 <option><?= $subitem['mythic__select_item'] ?></option>
                              <?php }  ?>
                              </select>
										</div>
									</div>
                           <?php }  ?>

                           <?php
                           $repeater = get_field( 'mythic__input' );
                           foreach( $repeater as $item ) {
                           ?>
                           <?php
                              if($item['razd']){
                                    echo '<div class="mythic__item">
                                             <div class="mythic__title">
                                                <h4>' . $item['mythic__input_head'] . '</h4>'
                                                 . 
                                             '</div>
                                              <div class="mythic__radio">
                                                <div class="mythic__input_item">
                                                   <input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="" class="input">
                                                </div>
                                              </div>
                                            </div>';
                                          }
                                          else {
                                                echo '';
                                          }
                                          ?>
                           <?php }  ?>
								</div>

								<div class="mythic__bottom">
									<div class="mythic__head">
										<h2>Total price:  14$</h2>
									</div>
									<div class="mythic__buttons">
										<div class="mythic__button">
											<button class="mythic__btn" onClick="clickbtn()">Add to cart</button>
										</div>
										<div class="mythic__button">
											<a href="#">Open chat</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
         </main>



<?php get_footer(); // подключаем footer.php ?>