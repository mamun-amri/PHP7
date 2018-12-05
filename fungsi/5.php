<?php
  function tulisdata(...$arrdata){
    echo " data yang akan dijumlahkan : <br>";
    for($i=0;$i<count($arrdata);$i++){
      if($i>0) echo ", ";
      echo $arrdata[$i];
    }
  }
  function jumlah(int ...$arrdata):int {
    $jml=0;
    for($i=0;$i<count($arrdata);$i++){
      $jml=$jml+$arrdata[$i];
      return $jml;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fungsi parameter dengan array</title>
  </head>
  <body>
    <?php
      echo tulisdata(0,2,4,6,8,1);
      echo jumlah(0,2,4,6,8,1)."<br>";
    ?>
  </body>
</html>
