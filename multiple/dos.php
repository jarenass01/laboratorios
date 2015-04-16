<?php
date_default_timezone_set("America/Bogota");
function interval_date($init,$finish)
{
    $diferencia = strtotime($finish) - strtotime($init);
    if($diferencia < 60){
        $tiempo = "Hace " . floor($diferencia) . " segundos";
    }else if($diferencia > 60 && $diferencia < 3600){
        $tiempo = "Hace " . floor($diferencia/60) . " minutos'";
    }else if($diferencia > 3600 && $diferencia < 86400){
        $tiempo = "Hace " . floor($diferencia/3600) . " horas";
    }else if($diferencia > 86400 && $diferencia < 2592000){
        $tiempo = "Hace " . floor($diferencia/86400) . " días";
    }else if($diferencia > 2592000 && $diferencia < 31104000){
        $tiempo = "Hace " . floor($diferencia/2592000) . " meses";
    }else if($diferencia > 31104000){
        $tiempo = "Hace " . floor($diferencia/31104000) . " años";
    }else{
        $tiempo = "";
    }
    return $tiempo;
}

echo interval_date("2015-04-08 10:21:10", date("Y-m-d G:i:s"));
?>