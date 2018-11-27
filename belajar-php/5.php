<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>operator increment dan decrement</title>
  </head>
  <body>
    <h1>contoh operator increment dan decrement</h1>
    <?php
      $a = 5;
      echo "<h3>postincrement</h3>";
      echo "\$a = 5 <br>";
      echo "dengan \$a++ tetap 5 : ".$a++."<br>";
      echo "kemudian menjadi   6 : ".$a."<br> <br>";

      echo "<h3>preincrement</h3>";
      $a = 5;
      echo "\$a = 5 <br>";
      echo "dengan ++\$a menjadi 6 : ".++$a."<br>";
      echo "kemudian tetap       6 : ".$a."<br> <br>";

      echo "<h3>postincrement</h3>";
      $a = 5;
      echo "\$a = 5 <br>";
      echo "dengan --\$a tetap   5 : ".$a--."<br>";
      echo "kemudian menjadi       4 : ".$a."<br> <br>";

      echo "<h3>preincrement</h3>";
      $a = 5;
      echo "\$a = 5 <br>";
      echo "dengan \$a-- menjadi 4 : ".--$a."<br>";
      echo "kemudian tetap       4 : ".$a."<br> <br>";
    ?>
  </body>
</html>
