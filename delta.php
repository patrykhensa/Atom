<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>delta else if</title>
  </head>
  <body>
    <?php
    $a = 1;
    $b = 2;
    $c = 3;

    $delta=(pow($b,2)-4*$a*$c);

    if ($delta < 0){
      echo 'delta jest mniejsza';
    }
    else if ($delta == 0){
      echo 'delta jest rowna';
    }
    else {
      echo 'delta jest wieksza';
    }



     ?>
  </body>
</html>
