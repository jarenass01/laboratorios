<?php

$directorio = opendir("."); //ruta actual
while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
    if (!is_dir($archivo)) {//verificamos si es o no un directorio
        //echo $archivo . "<br />";
        print_r(file($archivo))."<br>";
    }
}
?>