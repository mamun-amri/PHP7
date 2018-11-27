<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>variabel</title>
  </head>
  <body>
    <h1>variabel variabel</h1>
    <h3>contoh ini akan mengisi variabel $c dengan isi variabel $a</h3>
    <pre>
      $a = 7;
      $b = "a";
      $c = $$b;
    </pre>
    <h2>hasil eksekusi dengan PHP</h2>
    <?php
      $a = 7;
      $b = "a";
      $c = $$b;

      echo "\$a = $a"."<br>";
      echo "\$b = $b"."<br>";
      echo "\$c = $c"."<br>";
    //  echo "var dinamik isi var a : ${$b}"."<br>";

    ?>
  </body>
</html>
