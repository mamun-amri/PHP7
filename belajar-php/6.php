<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>operator termary</title>
  </head>
  <body>
    <h1>contoh menggunakan operator termary</h1>
    (ekpresi1) <b>?</b> (ekpresi2) <b>:</b> (ekpresi3);
    <hr>
    <h4>menghitung selisih</h4>
    <?php
    $a = 5;
    $b = 7;
      echo "\$a = $a"."<br>";
      echo "\$b = $b"."<br>";

    $hasil = ($a>$b)?($a-$b):($b-$a);
      echo "maka selisihnya : ".$hasil;

    ?>
  </body>
</html>
