<!doctype html>
  <html lang="ru">
  <head>
  <body style='background-color:grey' >

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_1.css">

  <!-- <p>На главную<a href="/index.php"> главная</a></p> -->

  <p class="test2">На главну <a href="/teest.php">главная</a></p>

  <?php
  $a = 1;
  $b = 0;
  echo "a: $a".'<br>';
  echo "b: $b".'<br>';

  if($a > $b)         // = обозначает присовоить, == обозначает равно
                       //  == равенство, != не равенство, >,< болтше меньше, >= больше или равно, <= меньше или равно
    echo "$a>$b";    // '' выводиться $a=$b, "" выводиться 5=5
    elseif ($a == $b) {
        echo "$a=$b"; }
        elseif ($a == 0) {
            echo "$a=0"; }
    else
      echo "$a<$b";

   ?>

  <?php
  /*
  $str = "что то";
  echo "это: $str";
  echo "<input type='текст'><br>";


  $length = strlen($str);   //получение длины текста
  echo trim("   какая е то лютая дичь    ");  // trim удаление пробелов до и после строки
  echo mb_strtoupper ( trim (" какая е то лютая дичь ")). '<br>' ;
  // mb_strtolower          // приводит текст в нижний регистр    "strtoupper" - если есть русске буквы
  // mb_strtoupper          // приводит текст в верхний  регистр "strtoupper" - если есть русске буквы
  echo $length.'<br>';
   echo md5("12345678"). '<br>';// md5 созлает хэш
  */
   ?>

  <?php/*
    $page_id = 1;// Уникальный идентификатор страницы (статьи или поста)
    $mysqli = new mysqli("localhost", "root", "root", "sreit");// Подключается к базе данных
    $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); //Вытаскиваем все комментарии для данной страницы
    while ($row = $result_set->fetch_assoc()) {
      print_r($row); //Вывод комментариев
      echo "<br />";
    }
  */?>



  <?php /*else: ?>
  <p>задарова епта--><?=$_COOKIE['user']?> выход тут <a href="/exit.php">сюда бля</a></p>

  <?php endif;
   ?>

  <?php

  /*
  $str = "пахану ";
  // echo 'что мы видим: $str'. '<br>' ; // когда '' все видит как текст
  echo "отправить маляву: $str" . 'епта'. '<br>'  ;
  echo "<input type ='text'>"; // !! вывод окна


  define('CONSTANT', "консанта"); // консанта
  echo CONSTANT. '<br>';
  */

  /*
  define('IK', "5"); // консанта
  echo IK. '<br>';
  */


  /*
  $xuy = 20;
  echo "число: " . $xuy . '<br>';
  $num = 7;
  echo "число: " . $num. '<br>';

  echo  abs (-22). '<br>'; //выводит целое (22)
  echo ceil (3.16). '<br>'; // округляет
  echo floor (3.1). '<br>'; // округляет
  echo round (3.55165416516513516, 3). '<br>'; // округляет, кол во знаков
  echo sin (3). '<br>';
  echo rand (5,10). '<br>'; // рандом из диапозона
  $rand = mt_rand (1,5). '<br>';
  $rand++. '<br>';
  echo $rand. '<br>';
  echo min (2,12,8,6,145,25). '<br>';
  echo max (2,12,8,6,145,25). '<br>';
  /*

  echo "остаток от деления: " . $xuy % $num . '<br>';


  echo M_PI. '<br>'; // выводит пи
  echo M_E. '<br>'; // выводит Е
  $xuy +=16.5; // $xuy = $xuy + 16.5;
  echo "+16,5 см = " . $xuy. '<br>' ;

  $xuy++; //$xuy+=1 $xuy = $xuy +1
  echo "+1: " . $xuy. '<br>' ;
  $xuy--; //$xuy-=1 $xuy = $xuy -1
  echo "-1: " . $xuy. '<br>' ;

  */

   ?>

  </body>
  </html>
