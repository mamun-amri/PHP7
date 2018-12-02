<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>if dan Swicth</title>
  </head>
  <body>
    <h1>contoh if</h1>
    <?php
      $a=5;
      $b=7;

      if($a>$b){
        $hasil = $b+$a;
        echo "jika \$a > \$b maka \$b ditambah \$a hasil = $hasil";
      }
      if($b<$a){
        $hasil = $b+$a;
        echo "jika \$b < \$a maka \$b ditambah \$a hasil = $hasil";
      }
      if($b>$a){
        $hasil = $b-$a;
        echo "jika \$b > \$a maka \$b dikurangi \$a hasil = $hasil";
      }
    ?>
    <h1>contoh if ... else</h1>
    <?php
      $na=44;

      if($na>=80){
        echo "grade A";
      }else if($na>=65 and $na<=80){
        echo "grade B";
      }else if($na>=55 and $na<=65){
        echo "grade C";
      }else if($na>=45 and $na<=55){
        echo "grade D";
      }
      else{
        echo "grade E";
      }
    ?>
    <h1>contoh swicth</h1>
    <?php
      $nilai="a";
      echo "nilai mu sekarang adalah $nilai";
      switch($nilai){
        case "A"&&"a":
          echo " Nilai 91-100";
        break;
        case "B"&&"b":
          echo " Nilai 71 - 90";
        break;
        case "C"&&"c":
          echo " Nilai 61 - 70";
        break;
        case "D"&&"d":
          echo " Nilai 51 - 60";
        break;
        default:
          echo " Nilai 0 - 50";
      }
    ?>
    <h1>contoh swicth nomor</h1>
    <?php
      $nilai=2;
      echo "nilai mu sekarang adalah $nilai";
      switch($nilai){
        case 1:
          echo " Nilai 91-100";
        break;
        case 2:
          echo " Nilai 71 - 90";
        break;
        case 3:
          echo " Nilai 61 - 70";
        break;
        case 4:
          echo " Nilai 51 - 60";
        break;
        default:
          echo " Nilai 0 - 50";
      }
    ?>
  </body>
</html>
