<?php
function crearConexion(){       
    $servidor   ="localhost";
    $nombreBD   = "ce_sivigila";
    $usuario    = "root";
    $contrasena = "";
    $conexion = new mysqli($servidor,$usuario,$contrasena,$nombreBD);
    if($conexion->connect_error){
        die("Error en la conexion : ".$conexion->connect_errno."-".$conexion->connect_error);
    }
    $conexion->query("SET NAMES 'utf8'");
    return $conexion;
}

?>