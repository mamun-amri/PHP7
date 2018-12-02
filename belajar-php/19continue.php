<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>array continue</title>
  </head>
  <body>
    <h1>penggunaan continue</h1>
    <h3>mencetak kelipatan 2</h3>
    <?php
      for($i=0;$i<=10;$i++){
        if($i % 2){
          continue;
        }
        echo " $i";
      }
    ?>
  </body>
</html>
