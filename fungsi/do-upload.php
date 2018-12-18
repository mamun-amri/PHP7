<?php
$HTTP_POST_FILES['file']['name'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>do-upload</title>
  </head>
  <body>
    <h1>file yang akan diupload</h1>

    <?php
      $namafile =$HTTP_POST_FILES['file1']['name'];
    ?>
    Gambar : <?php echo $namafile; ?><br>

    <?php
      if ($file1!='none') {
        copy("$file1","img/$namafile") or die("tidak ada gambar !");
      } else {
        die("tidak ada file yang akan di upload");
      }

    ?>
  </body>
</html>
