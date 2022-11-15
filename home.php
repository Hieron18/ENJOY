<?php 
/*
   Template Name: home
*/
?>
<?php get_header(); ?>
			<main class="page">
				<div class="cap">
					<div class="cap__content">
						<div class="cap__box _container">
							<div class="cap__block">
								<div class="cap__head">
									<h1><?php the_field("header__title") ?></h1>
								</div>
								<div class="cap__text">
									<p><?php the_field("header__text") ?></p>
								</div>
								<div class="cap__buttons">
									<?php
										if($_COOKIE['user'] == '') :
									?>
									<div class="cap__sing">
										<a href="#sign" class="_popup-link">Sign up</a>
									</div>
									<?php endif; ?>
									<div class="cap__work">
										<a href="#">work with us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="cap__image">
						<picture><source srcset="<?php the_field("header__cap") ?>" type="image/webp"><img src="<?php the_field("header__cap") ?>" alt=""></picture>
					</div>
				</div>

            <!-- <div class="chat">
               <a href="" ><img src="<?php bloginfo('template_url'); ?>/assets/img/chat.png" alt=""></a>
            </div> -->

				<div class="tabs-block">
					<div class="tabs-block__content _container _tabs">
						<nav class="tabs-block__nav">
							<div class="tabs-block__item _tabs-item _active"><?php the_field("tabs-block__name_1") ?></div>
							<div class="tabs-block__item _tabs-item"><?php the_field("tabs-block__name_2") ?></div>
							<div class="tabs-block__item _tabs-item"><?php the_field("tabs-block__name_3") ?></div>
						</nav>
						<div class="tabs-block__body">
							<div class="tabs-block__block _tabs-block _active">
								<div class="boost">
									<div class="boost__content">
										<div class="boost__top">
                                 <?php
                                 $sources = get_field( 'up-block' );
                                 foreach( $sources as $src) {
                                 ?>
                                    <a href="<?= $src['up-block_link'] ?>" class="boost__block">
                                       <div class="boost__img">
                                          <picture><source srcset="<?= $src['up-block_image'] ?>" type="image/webp"><img src="<?= $src['up-block_image'] ?>" alt=""></picture>
                                          <div class="boost__background"></div>
                                       </div>
                                       <div class="boost__text">
                                          <p><?= $src['up-block_head'] ?></p>
                                       </div>
                                       <div class="boost__info">
                                          <div class="boost__price">
                                             <p>from <?= $src['up-block_price'] ?></p>
                                          </div>
                                          <div class="boost__star">
														<?php
															foreach ( $src['star'] as $subitem ) {
														?>
															<?php
																if($subitem['star-color']){
																	echo '<i class="fa fa-star _color" aria-hidden="true"></i>';
																}
																else {
																	echo '<i class="fa fa-star" aria-hidden="true"></i>';
																}
															?>
														<?php }  ?>
                                          </div>
                                       </div>
                                    </a>
                                 <?php }  ?>
										</div>
										<div class="boost__bottom">

                              <?php
                                 $sources = get_field( 'down-block' );
                                 foreach( $sources as $src) {
                                 ?>
                                    <a href="<?= $src['down-block_link'] ?>" class="boost__block">
                                       <div class="boost__img">
                                          <picture><source srcset="<?= $src['down-block_image'] ?>" type="image/webp"><img src="<?= $src['down-block_image'] ?>" alt=""></picture>
                                          <div class="boost__background"></div>
                                       </div>
                                       <div class="boost__text">
                                          <p><?= $src['down-block_head'] ?></p>
                                       </div>
											   </a>
                                 <?php }  ?>
										</div>
									</div>
								</div>
							</div>
							<div class="tabs-block__block _tabs-block ">
								fdsfsdfdsfsdf2
							</div>
							<div class="tabs-block__block _tabs-block ">
								fdsfsdfdsfsdf3
							</div>
						</div>
					</div>
				</div>

				<div class="work">
					<div class="work__content _container">
						<div class="work__head">
							<h3><?php the_field("work__head") ?></h3>
						</div>
						<div class="work__dignity">

                  <?php
                     $sources = get_field( 'blog' );
                     foreach( $sources as $src) {
                  ?>
                     <div class="work__block">
								<div class="work__image">
									<picture><source srcset="<?= $src['blog__image'] ?>" type="image/webp"><img src="<?= $src['blog__image'] ?>" alt=""></picture>
								</div>
								<div class="work__info">
									<div class="work__title">
										<h4><?= $src['blog__head'] ?></h4>
									</div>
									<div class="work__text">
										<p><?= $src['blog__text'] ?></p>
									</div>
								</div>
							</div>

                  <?php }  ?>
						</div>
					</div>
				</div>

				<div class="discount">
					<div class="discount__content _container">
						<div class="discount__block">
							<div class="discount__head">
								<h3><?php the_field("email") ?></h3>
							</div>
							<form action="#" class="discount__sending">
								<div class="discount__email">
									<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" placeholder="Email" class="input">
								</div>
								<div class="discount__button">
									<button type="submit" class="button">Get discount</button>
								</div>
							</form>
						</div>
					</div>
					<div class="discount__image">
						<picture><source srcset="<?php the_field("email__image") ?>" type="image/webp"><img src="<?php the_field("email__image") ?>" alt=""></picture>
					</div>
				</div>

			</main>
<?php get_footer(); ?>