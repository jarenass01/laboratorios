<?php

function getUltimoDiaMes($elAnio, $elMes) {
    return date("d", (mktime(0, 0, 0, $elMes + 1, 1, $elAnio) - 1));
}

//Ejemplo de uso
$ultimoDia = getUltimoDiaMes(2016, 2);
echo $ultimoDia;

?>