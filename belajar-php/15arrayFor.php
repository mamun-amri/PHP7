<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>array For</title>
  </head>
  <body>
    <h1>penggunaan for di array</h1>
    <h3>mencetak urutan 0 sampai 9</h3>
    <?php
      for($i=0;$i<=9;$i++){
        echo " $i";
      }
    ?>
    <h3>mencetak kelipatan 3 sampai 9</h3>
    <?php
    for($i=0;$i<=9;$i+=3){
      echo " $i";
    }
    ?>
  </body>
</html>
