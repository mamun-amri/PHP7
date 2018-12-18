<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pilih file</title>
  </head>
  <body>
    <fieldset>
      <form enctype="multipart/form-data" action="do-upload.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000">
        <label>Pilih Gambar</label><br>
        <input type="file" name="file1" size="30">
        <br>
        <br>
        <input type="submit" value="upload">
      </form>
    </fieldset>
  </body>
</html>
