<?php
  function Hai($nama){
    echo "hai ... [".$nama."] ";
    echo "menggunakan fungsi hai <br />";
  }
  function Hallo($nama="mamun"){
    echo "halo ... [".$nama."] ";
    echo "menggunakan fungsi halo <br />";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fungsi paarameter</title>
  </head>
  <body>
    <h1>fungsi parameter</h1>
    <h3>menggunakan fungsi parameter default</h3>
    <?php
      Hai ("");
      Hai ("amri");
    ?>
    <h3>menggunakan fungsi bukan parameter default</h3>
    <?php
      Hallo ();
      Hallo ("amri");
    ?>
  </body>
</html>
