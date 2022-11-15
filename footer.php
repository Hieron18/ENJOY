      <footer class="footer">
         <div class="footer__container _container">
            <div class="footer__top">
               <div class="footer__left">
                  <div class="footer__logo">
                     <h4>enjoy <span>boost</span></h4>
                  </div>
                  <div class="footer__contact">
                     <p><?php the_field("footer__email") ?></p>
                     <p><?php the_field("footer__number") ?></p>
                  </div>
               </div>
               <div class="footer__right">
                  <?php
                     $repeater = get_field( 'footer__tabs' );
                     foreach( $repeater as $item ) {
                  ?>
                     <ul class="footer__menu">
                     <?php
                        foreach ( $item['footer__menu'] as $subitem ) {
                     ?>
                        <li class="footer__link"><a href="#"><?= $subitem['footer__link'] ?></a></li>
                     <?php }  ?>
                     </ul>
                  <?php }  ?>
               </div>
            </div>
            <div class="footer__bottom">
               <div class="footer__one">
                  <div class="footer__parag">
                     <p><?php the_field("footer__provo") ?></p>
                  </div>
               </div>
               <div class="footer__two">
                  <div class="footer__block">
                     <div class="footer__cart">
                        <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/mastercard.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/mastercard.png?_v=1654773455737" alt=""></picture>
                     </div>
                     <div class="footer__cart">
                        <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/visa.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/visa.png?_v=1654773455737" alt=""></picture>
                     </div>
                     <div class="footer__cart">
                        <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/paypal.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/paypal.png?_v=1654773455737" alt=""></picture>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
            </div>
      <div class="popup popup_sign">
         <div class="popup__content">
            <div class="popup__body sign">
               <div class="popup__close"></div>
               <div class="sign__content">
                  <div class="sign__top">
                     <div class="sign__have">
                        <p>Have an account? <a href="#log" class="_popup-link">Log in</a></p>
                     </div>
                     <div class="sign__head">
                        <h3>Sign up</h3>
                     </div>
                     <form action="<?php bloginfo('template_url'); ?>/check.php" method="post" class="sign__form">
                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="name" data-error="" placeholder="Name" class="input _req">
                        </div>

                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="email" data-error="" placeholder="E-mail Address" class="input _email _req">
                        </div>

                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="pass" data-error="" placeholder="Password" class="input _req">
                        </div>

                        <div class="sign__option sign__option_input">
                           <input id="popupnews" autocomplete="off" type="checkbox" name="form[]" data-error="" placeholder="" class="input">
                           <label for="popupnews">Send me a weekly news and updates</label>
                        </div>

                        <div class="sign__option sign__option_input">
                           <input id="popupprivacy" autocomplete="off" type="checkbox" name="form[]" data-error="" placeholder="" class="input">
                           <label for="popupprivacy">I agree to Privacy Policy, Cookie Policy and Terms of Use.</label>
                        </div>

                        <div class="sign__button button">
                           <button type="submit" class="button__link">Create account</button>
                        </div>
                     </form>
                     <div class="sign__or">or</div>
                  </div>
                  <div class="sign__bottom">
                     <div class="button">
                        <a href="#" class="button__link button__link_apple">
                           <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/apple.png" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/apple.png" alt=""></picture>
                           Sign in with Apple
                        </a>
                        <a href="#" class="button__link button__link_google">
                           <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/google.png" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/google.png" alt=""></picture>
                           Sign in with Google
                        </a>
                     </div>
                  </div>
                  <div class="sign__text">
                     <p>Get notified when your friends back and launch projects. We'll never post anything on Facebook without your permission. <a href="#">Read more</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="popup popup_log">
         <div class="popup__content">
            <div class="popup__body sign">
               <div class="popup__close"></div>
               <div class="sign__content">
                  <div class="sign__top">
                     <div class="sign__head">
                        <h3>Log in</h3>
                     </div>
                     <form action="<?php bloginfo('template_url'); ?>/auth.php" method="post" class="sign__form">
                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="email" data-error="" placeholder="E-mail Address" class="input _email _req">
                        </div>

                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="pass" data-error="" placeholder="Password" class="input _req">
                        </div>

                        <div class="sign__option">
                           <a href="#pass" class="_popup-link">Forgot password?</a>
                        </div>

                        <div class="sign__button button">
                           <button type="submit" class="button button__link">Log in</button>
                        </div>

                        <div class="sign__option sign__option_input">
                           <input id="popupremem" autocomplete="off" type="checkbox" name="form[]" data-error="" placeholder="" class="input">
                           <label for="popupremem">Remember me</label>
                        </div>
                     </form>
                     <div class="sign__or">or</div>
                  </div>
                  <div class="sign__bottom">
                     <div class="button">
                        <a href="#" class="button__link button__link_apple">
                           <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/apple.png" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/apple.png" alt=""></picture>
                           Sign in with Apple
                        </a>
                        <a href="#" class="button__link button__link_google">
                           <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/google.png" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/google.png" alt=""></picture>
                           Sign in with Google
                        </a>
                     </div>
                  </div>
                  <div class="sign__text">
                     <p>Get notified when your friends back and launch projects. We'll never post anything on Facebook without your permission. <a href="#">Read more</a></p>
                  </div>
                  <div class="sign__have">
                     <p>New to ENJOY BOOST? <a href="#sign" class="_popup-link">Sign up</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="popup popup_pass">
         <div class="popup__content">
            <div class="popup__body sign">
               <div class="popup__close"></div>
               <div class="sign__content">
                  <div class="sign__top">
                     <div class="sign__head">
                        <h5>Forgot your password?</h5>
                     </div>
                     <div class="sign__text">
                        <p>Enter the email address you used to sign up and we'll send you a link to reset your password. </p>
                     </div>
                     <form action="#" class="sign__form">

                        <div class="sign__option">
                           <input autocomplete="off" type="text" name="form[]" data-error="" placeholder="E-mail Address" class="input _email _req">
                        </div>

                        <div class="sign__button button">
                           <button class="button__link">Continue</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <?php wp_footer() ?>
	</body>
</html>