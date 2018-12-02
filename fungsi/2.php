<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pemnggilan fungsi</title>
    <?php
      $a=10;
      $b=15;
      function selisih($a,$b){
        if($a>$b) $hasil=$a-$b;
        else $hasil=$b-$a;
        return $hasil;
      }
    ?>
  </head>
  <body>
  <h1>pemanggilan fungsi</h1>
  <?php
   $bil1=30;
   $bil2=15;
    //pemanggilannya
    // $varhasil =&namafungsi ([parameter]);
    // $varhasil =namafungsi ([parameter]);
    $alhasil=selisih($bil1,$bil2);
      echo "maka selisihnya adalah $alhasil";
  ?>

  </body>
</html>
