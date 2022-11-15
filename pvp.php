<!-- <?php 
   session_start();
   $action = $_POST["action"];
   if($action == 'show'){
      if(!(isset($_SESSION['cart']))){
         echo 'У вас нет заказов1';
         exit;
      };
      $cart = $_SESSION['cart'];
      if(count($cart) == 0){
         echo 'У вас нет заказов2';
         exit;
      }

      echo "
         <div class='cart__box'>
            <div class='cart__title'>
               <h3>fdfdfdfdfdfdfdf</h3>
            </div>
            <ul class='cart__ul'>
            </ul>
            <div class='cart__text'>
               <p>Loot traders for your run: 1 Loot Trader for free</p>
            </div>
            <div class='cart__text'>
               <p>Your type of armor: Cloth</p>
            </div>
            <div class='cart__buttons'>
               <div class='cart__quantity'>
                  <div class='quantity'>
                     <button type='button' class='quantity__button quantity__button_minus'></button>
                     <div class='quantity__input'>
                        <input autocomplete='off' type='text' name='form[]' value='1'>
                     </div>
                     <button type='button' class='quantity__button quantity__button_plus'></button>
                  </div>
               </div>
               <div class='cart__total'>
                  <p>Total price:  14$</p>
               </div>
            </div>
         </div>
      ";

   }

   if($action == 'add'){
      $cart = $_SESSION['cart'];
      echo "dfdfdfd";
      $id = $_POST['id'];

      $newProduct["idProduct"] = $id;

      $cart[count($cart)] = $newProduct;

      $_SESSION['cart'] = $cart;;
   }

?> -->