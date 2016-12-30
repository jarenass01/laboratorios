<?php
$objDatos = json_decode(file_get_contents("php://input"));
echo $objDatos->nombre;

?>