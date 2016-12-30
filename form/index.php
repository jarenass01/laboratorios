<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php  date_default_timezone_set("America/Bogota"); echo date("Y-m-d G:i:s") ?></h1>
        <form method="GET" action="grabar.php">
            <b>Nombre del país</b><br>
            <input name="nombre_pais"><br>
            <b>Código DANE</b><br>
            <input type="text" name="codigo_name"><br><br>
            <input type="submit" value="Grabar información">
        </form>
    </body>
</html>