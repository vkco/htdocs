<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="vieport" coment="width=device-width. initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style_1.css">
</head>

<body>
  <li style="--i:2"><a href="/index.php">Exit</a></li>
</body>

<?php

if ($_COOKIE['user'] == ''):
 ?>

  <div class="row">
    <div class=" test col">
  <h1>ты кто епта ?</h1>
    <form action="check.php" method="post">
      <input type="text" class="form-control"  name="login"
      id="login" placeholder="погоняло"><br>
      <input type="text" class="form-control"  name="name"
      id="name" placeholder="кликуха"><br>
      <input type="pasword" class="form-control"  name="pass"
      id="pass" placeholder="типо пороль"><br>
  <button class="btn btn-success" type="submit" >вливайся</button>
</form>
</div>
<div class="col">
  <h1>захоть епт</h1>
  <form action="auth.php" method="post">
    <input type="text" class="form-control"  name="login"
    id="login" placeholder="погоняло"><br>
    <input type="pasword" class="form-control"  name="pass"
    id="pass" placeholder="типо пороль"><br>
<button class="btn btn-success" type="submit" >че ждем?</button>
</form>
</div>

<?php else: ?>
<p>задарова епта--><?=$_COOKIE['user']?> выход тут <a href="/exit.php">сюда бля</a></p>

<?php endif;
 ?>

</body>
</html>
