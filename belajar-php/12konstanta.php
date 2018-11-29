<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>konstanta</title>
  </head>
  <body>
    <h1>menampilkan konstanta</h1>
    konstanta PHI :
    <?php
      define("PHI",22/7);
      print(PHI);
    ?>
    <h2>menghitung luas lingkaran</h2>
    <?php
      $r=7;
      $luas=PHI*2*$r;
      $keliling=PHI*2*$r;
      print("<br /> jari-jari : ".$r);
      print("<br /> luas lingkaran : ".$luas);
      print("<br /> keliling lingkaran : ".$keliling);
    ?>
  </body>
</html>
