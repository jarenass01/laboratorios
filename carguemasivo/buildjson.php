<?php

$texto="";

$file = fopen("report.csv", "r");
while(!feof($file)) {
    $texto.= fgets($file);
}
fclose($file);
$filas= explode("\n", $texto);
$cabeceras= explode(";",$filas[0]);


for($i=1; $i < count($filas); $i++){
    $lineaJSON= "{";
    $unitarias= explode(";", $filas[$i]);
  for($s=0; $s < count($cabeceras); $s++){
      $lineaJSON.="p$cabeceras[$s]:'".$unitarias[$s]."', ";
  }
    $lineaJSON.="}";
    echo $lineaJSON;
    echo "<br><br><br>";



}

//echo $cabeceras[52];


?>
