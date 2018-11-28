<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>variabel static</title>
  </head>
  <body>
    <?php
      function itung(){
        static $a = 0;
        echo "dipanggil ke : $a <br>";
        $a++;
      }
    ?>

    <?php
      itung();
      itung();
      itung();
    ?>
  </body>
</html>
