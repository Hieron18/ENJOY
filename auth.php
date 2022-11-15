<?php
   $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

   $pass = md5($pass."gg6g7y87tuf");

   $mysql = new mysqli('localhost', 'root', '', 'regist-bd');

   $result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$email' AND `pass` = '$pass'");
   $user = $result->fetch_assoc();
   if(count($user) == 0){
      echo "Такой пользователь не найден";
      exit();
   }

   setcookie('user', $user['name'], time() + (3600 * 3), "/");

   $mysql->close();
   header('Location: /');
?>