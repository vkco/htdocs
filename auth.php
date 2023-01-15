<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$pass = ($pass);
//$pass = md5($pass."ss1488");

$mysql = new mysqli('localhost', 'root', 'root','xyu');

$result = $mysql -> query("SELECT * FROM `users` WHERE `login`=
'$login' AND `pass`= '$pass' ");

$user = $result -> fetch_assoc();
if(count($user) == 0) {
  echo "ты кто такой ?";
exit();
}

/* print_r($user);
exit(); */
setcookie('user', $user['name'],time()+60, "/" );

$mysql->close();

header('Location: /post_s.php ');

exit();

 ?>
