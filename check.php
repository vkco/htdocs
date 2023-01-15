<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  // echo "$login";
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  // echo "$name";
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
  //  echo "$pass";

 if(mb_strlen($login) < 2 || mb_strlen($login) > 30 ) {
    echo "чет не то";
    exit();
  } else if(mb_strlen($name) < 2 || mb_strlen($name) > 30 ) {
     echo "слыш, погоняло смени";
     exit();
   }  else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 32 ) {
        echo "у моей 5 летней сестры пароль оригинальнее";
        exit();
      }
$pass = ($pass);
//$pass = md5($pass."ss1488");

$mysql = new mysqli('localhost', 'root', 'root','xyu');
$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`)
VALUES('$login','$pass','$name')");

$mysql->close();
header('Location: / ');
exit();

 ?>
