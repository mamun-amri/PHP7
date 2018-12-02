<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fungsi built in</title>
  </head>
  <body>
    <h1>menampilkan abjad di php</h1>
    <?php
      for($i=0;$i<26;$i++){
        echo chr(65+$i);
        if($i<25) echo "|";
      }
    ?>
  </body>
</html>
