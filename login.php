<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="vieport" coment="width=device-width. initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="CSS/style_13.css">
</head>
<body>

<?php
if ($_COOKIE['user'] == ''):
 ?>
 <form action="auth.php" method="post">
    <div class="inputBox">
      <input type="text" class="form-control"  name="login" id="login" required="required">
    <span>Name</span>
  </div>
    <div class="inputBox">
      <input type="pasword" class="form-control"  name="pass" id="pass" required="required">
    <span>Pasword</span>
  </div>

<button class="btn btn-success" type="submit" >Login</button>
<br>
<br>
<span><a class="btn btn-success" href="/index.php">Exit</a></span>
</form>
</div>

<?php else: ?>

<p>You are already logged in  <?=$_COOKIE['user']?> click  <a href="/exit.php">Exit</a></p>

<?php endif;
 ?>

</div>
</body>
</html>
