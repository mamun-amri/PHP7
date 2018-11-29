<?php
  declare(strict_types= 1);
  ini_set('display_errors', "1");
  function sum(int ...$ints){
    return array_sum($ints);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>strict</title>
  </head>
  <body>

    penjumlahan isi array semua array numerik =
    <?php
      print(sum(2, 3, 4));
     ?>
     <br>
     penjumlahan isi array campuran =
    <?php
      print(sum(2,  "3",  4.1));
    ?>
  </body>
</html>
