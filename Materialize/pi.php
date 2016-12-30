<?php
$conexion= new mysqli("localhost", "root", "", "alimentos");
$conexion->query("SET NAMES 'utf8'");

$data= array("O'Reilly", 12, 13, 14, 15, 33 );

$cadena= addslashes($data[0]);

$SQL="INSERT INTO alimentos VALUES(NULL, '$cadena' , $data[1], $data[2], $data[3], $data[4], $data[5])";

$conexion->query($SQL);
echo $SQL;
echo $conexion->insert_id;
