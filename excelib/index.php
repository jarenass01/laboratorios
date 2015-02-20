<?php require_once 'Conexion.php';
$co = crearConexion(); ?>
<table>
    <thead>
    <th>A</th><th>B</th><th>C</th><th>D</th><th>E</th>
</thead>
<tbody>
    <?php
    require_once 'PHPExcel/IOFactory.php';
    $objPHPExcel = PHPExcel_IOFactory::load("../xls/sf.xls");
    $obHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
    #########################################################################################
    $cosa = "";
    $count = 0;
    foreach ($obHoja as $iIndice => $objCelda) {
        if ($count > 0) {
            $ax = $objCelda["A"];
            $bx = $objCelda["B"];
            $cosa = "INSERT INTO data(cod_eve, fec_not) VALUES('$ax','$bx')";
            $co->query($cosa);
        }
        $count++;
    }
    ?>
</tbody>
</table>