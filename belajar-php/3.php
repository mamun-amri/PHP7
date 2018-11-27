<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tipe data objek</title>
  </head>
  <body>
    <?php
      class objek {
        function counter(){
          return 5;
        }
        function do_pesan(){
          echo "cetak pesan.";
        }
      }

      $test = new objek;
      $test->do_pesan();
      echo "<br>";
      echo $test->counter();
     ?>
  </body>
</html>
