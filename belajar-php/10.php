<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>variabel tipe coercive</title>
  </head>
  <body>
    <?php
      function sum(int ...$ints){
        return array_sum($ints);
      }
    ?>
    isi array semua integer =
    <?php
      print(sum(2, 3, 4));
     ?>
     <br>
     penjumlahan array =
    <?php
      print(sum(2,  "3",  4.1));
    ?>
  </body>
</html>
