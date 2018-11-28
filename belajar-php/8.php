<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>variabel lokal</title>
  </head>
  <body>
    <?php
      function itung(){
        $a = 0;
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
