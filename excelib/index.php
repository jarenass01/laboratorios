<?php
require_once 'Conexion.php';
$co = crearConexion();
require_once 'PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/Users/jfa1/Pictures/Archivos_Planos/datosbasicosindividuales.xls");
$obHoja = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
#########################################################################################
$a = array();
$count = 0;
foreach ($obHoja as $iIndice => $objCelda) {
    if ($count > 0) {
        $a[0] = $objCelda["A"];
        $a[1] = $objCelda["B"];
        $a[2] = $objCelda["C"];
        $a[3] = $objCelda["D"];
        $a[4] = $objCelda["E"];
        $a[5] = $objCelda["F"];
        $a[6] = $objCelda["G"];
        $a[7] = $objCelda["H"];
        $a[8] = $objCelda["I"];
        $a[9] = $objCelda["J"];
        $a[10] = $objCelda["K"];
        $a[11] = $objCelda["L"];
        $a[12] = $objCelda["M"];
        $a[13] = $objCelda["N"];
        $a[14] = $objCelda["O"];
        $a[15] = $objCelda["P"];
#############################################################
        $a[16] = $objCelda["Q"];
        $a[17] = $objCelda["R"];
        $a[18] = $objCelda["S"];
        $a[19] = $objCelda["T"];
        $a[20] = $objCelda["U"];
        $a[21] = $objCelda["V"];
        $a[22] = $objCelda["W"];
        $a[23] = $objCelda["X"];
        $a[24] = $objCelda["Y"];
        $a[25] = $objCelda["Z"];
        $a[26] = $objCelda["AA"];
        $a[27] = $objCelda["AB"];
        $a[28] = $objCelda["AC"];
        $a[29] = $objCelda["AD"];
        $a[30] = $objCelda["AE"];
        $a[31] = $objCelda["AF"];
#############################################################
        $a[32] = $objCelda["AG"];
        $a[33] = $objCelda["AH"];
        $a[34] = $objCelda["AI"];
        $a[35] = $objCelda["AJ"];
        $a[36] = $objCelda["AK"];
        $a[37] = $objCelda["AL"];
        $a[38] = $objCelda["AM"];
        $a[39] = $objCelda["AN"];
        $a[40] = $objCelda["AO"];
        $a[41] = $objCelda["AP"];
        $a[42] = $objCelda["AQ"];
        $a[43] = $objCelda["AR"];
        $a[44] = $objCelda["AS"];
        $a[45] = $objCelda["AT"];
        $a[46] = $objCelda["AU"];
        $a[47] = $objCelda["AV"];
        $a[48] = $objCelda["AW"];
        $a[49] = $objCelda["AX"];
        $a[50] = $objCelda["AY"];
        $a[51] = $objCelda["AZ"];
###############################################################
        $a[52] = $objCelda["BA"];
        $a[53] = $objCelda["BB"];
        $a[54] = $objCelda["BC"];
        $a[55] = $objCelda["BD"];
        $a[56] = $objCelda["BE"];
        $a[57] = $objCelda["BF"];
###############################################################
        $a[58] = $objCelda["BG"];
        $a[59] = $objCelda["BH"];
        $a[60] = $objCelda["BI"];
        $a[61] = $objCelda["BJ"];
        $a[62] = $objCelda["BK"];
        $a[63] = $objCelda["BL"];
        $a[64] = $objCelda["BM"];
        
    }
    $count++;
}
?>