<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="vieport" coment="width=device-width. initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style_13.css">
</head>

<?php

if ($_COOKIE['user'] == ''):
 ?>

  <div class="row">
    <div class=" test col">
    <form action="check.php" method="post">
      <input type="text" class="form-control"  name="login"
      id="login" placeholder="login"><br>
      <input type="text" class="form-control"  name="name"
      id="name" placeholder="name"><br>
      <input type="pasword" class="form-control"  name="pass"
      id="pass" placeholder="pasword"><br>
  <button class="btn btn-success" type="submit" >registration</button>
</form>
</div>

<?php else: ?>
<p>задарова епта--><?=$_COOKIE['user']?> выход тут <a href="/exit.php">сюда бля</a></p>

<?php endif;
 ?>

 <body>
   <br>
   <li style="--i:2"><a href="/index.php">Exit</a></li>
 </body>

</body>
</html>
