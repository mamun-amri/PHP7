<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Foreach</title>
  </head>
  <body>
    <h1>penggunaan Foreach di array</h1>
    <h3>foreach dengan as value tanpa key</h3>
    <?php
      $nama =array("mamun","amri","budi");
      foreach ($nama as $siapa) {
        echo "nama nya adalah <b>$siapa</b> <br>";
      }
    ?>
    <h3>foreach dengan as key => values</h3>
    <?php
      $hp =array("mamun"=>11111,"amri"=>22222,"budi"=>33333);
      foreach ($hp as $siapa => $telp) {
        echo "nama nya adalah <b>$siapa</b> dan nohp nya <b>$telp</b> <br>";
      }
    ?>
  </body>
</html>
