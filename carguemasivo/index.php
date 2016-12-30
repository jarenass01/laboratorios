<?php //Ejemplo aprenderaprogramar.com

$texto="";

$file = fopen("carga.csv", "r");
while(!feof($file)) {
    $texto.= fgets($file);
}
fclose($file);
$filas= explode("\n", $texto);
?>
<table border="1">
    <thead>
    <th>Primer nombre</th>
    <th>Segundo nombre</th>
    <th>Primer apellido</th>
    <th>Segundo apellido</th>
    </thead>
    <tbody>
    <?php
    foreach ($filas as $row){
        if($row != ""){
            echo "<tr>";
            $columnas= explode(";",$row);
            echo "<td>$columnas[0]</td>
              <td>$columnas[1]</td>
              <td>$columnas[2]</td>
              <td>$columnas[3]</td>";

            echo "</tr>";
        }
    }

    ?>
    </tbody>
</table>
