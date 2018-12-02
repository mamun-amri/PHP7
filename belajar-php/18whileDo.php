<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>while do</title>
  </head>
  <body>
    <h1>contoh while dan do...while</h1>
    <h3>while</h3>
    <?php
      $a=1;
      while($a<10){
        echo " $a ";
        $a=$a+1;
      }
    ?>
    <h3>do ... while</h3>
    <?php
      $b=0;
      do{
        echo " $b ";
        $b=$b+2;
      }while ($b <20)
    ?>
  </body>
</html>
