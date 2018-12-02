<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>array union</title>
  </head>
  <body>
    <h1>menggabungkan 2 array menjadi 1 array</h1>
    <h3>meggunakan array_union atau array_merge</h3>
    <?php
      $ar_1=array(1,2,3,9,8);
      echo "tampilkan array 1 : ";
      print_r($ar_1);
      echo "<br><br>";

      $ar_2=array('mamun','yuli','amri',9,8);
      echo "tampilkan array 2 : ";
      print_r($ar_2);

      echo "<br><br>";
      echo "<h2>hasil array_union</h2> <br>";
      $gabung=array_merge($ar_1,$ar_2);
      print_r($gabung);

      echo "<br><br>";
      echo "<h2>hasil array_unique</h2> <br>";
      $unique=array_unique($gabung);
      echo "menghilangkan data yang ganda = ";
      print_r($unique);

      echo "<br><br>";
      echo "<h2>hasil array irisan</h2> <br>";
      $intersect=array_intersect($ar_1,$ar_2);
      echo "menghilangkan data yang ganda = ";
      print_r($intersect);

      echo "<br><br>";
      echo "<h2>hasil array selisih</h2> <br>";
      $diff=array_diff($ar_1,$ar_2);
      echo "menghilangkan data yang ganda = ";
      print_r($diff);

      echo "<br><br>";
      echo "<h2>hasil array dengan konstanta</h2> <br>";
      echo "menampilkan nama hari = ";
      define("HARI",['minggu','senin','selasa','rabu','kamis','jumat','sabtu']);
      for($i=0;$i<7;$i++);
      print("<br />"($i+1.)." - ".HARI[$i]);

    ?>
  </body>
</html>
