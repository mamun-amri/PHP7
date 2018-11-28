<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>operator eksekusi</title>
  </head>
  <body>
    <h1>pemakai yang online saat ini</h1>
    <?php
      $usertelnet = `who`;
      echo "$usertelnet";
    ?>
  </body>
</html>
