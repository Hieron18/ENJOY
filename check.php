<?php 
   $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
   $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
   

   if(mb_strlen($name) < 1 || mb_strlen($name) > 50){
      echo "Недопустимая длинна имени";
      exit();
   }
   else if(mb_strlen($email) < 3 || mb_strlen($email) > 90){
      echo "Недопустимая длинна email";
      exit();
   }
   else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 90){
      echo "Недопустимая длинна пароля";
      exit();
   }

   $pass = md5($pass."gg6g7y87tuf");

   $mysql = new mysqli('localhost', 'root', '', 'regist-bd');
   $mysql->query("INSERT INTO `user` (`name`, `email`, `pass`) VALUES('$name', '$email', '$pass')");
   $mysql->close();
   header('Location: /');
 ?>