<?php
  $a=2;
  $b=3;
  function tulisdata($a,$b){
    echo " $a + $b = ";
  }
  function jumlah( float $a, float $b):int {
    return $a+$b;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fungsi tipe data</title>
  </head>
  <body>
    <h1>contoh fungsi tipe data integer</h1>
    <?php
      echo tulisdata(5,10);
      echo jumlah(5,10)."<br>";
      echo tulisdata(5.8,10.5);
      echo jumlah(5.8,10.5)."<br>";
      echo tulisdata(5.8,1);
      echo jumlah(5.8,1);
    ?>
  </body>
</html>
