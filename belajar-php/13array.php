<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>menampilkan isi aray</title>
  </head>
  <body>
    <h1>menampilkan isi array</h1>
    <?php
      $buku[0] ="php";
      $buku[1] ="cms";

      echo "isi array = belajar buku <b>$buku[0]</b>";

      $buku[] ="php";
      $buku[] ="cms";
      echo "<h3> dengan tidak menyebutkan no arraynya</h3>";
      echo "isi array = belajar buku <b>$buku[1]</b>";

      $buku1["backend"] = "PHP and Mysqli";
      echo "<h3>array assosiatif</h3>";
      echo "isi array = belajar buku "."<b>".$buku1["backend"]."</b> <br>";
      echo "isi array = belajar buku <b>$buku1[backend]</b> <br>";

      $buku2=array(
        "backend"   => 'php',
        "frontend"  => 'html',
        "website"   => 'cms',
        "hp"        => 235092
      );
      echo "<h3>array assosiatif</h3>";
      echo "isi array = belajar buku "."<b>".$buku2["backend"]."</b> <br>";
      echo "isi array = belajar buku "."<b>".$buku2["hp"]."</b> <br>";
      echo "isi array = belajar buku <b>$buku2[website]</b>";

      ?>
  </body>
</html>
