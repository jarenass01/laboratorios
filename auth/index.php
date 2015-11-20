<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <script src="../../cirugia/lib/validador/live.js"></script>
    </head>
    <body>
        <?php
        echo md5("f0rj4d0r@r10n3gr0");
        ?>
        <form ction="prueba.php" method="POST">
            <b>Por favor escriba su nombre una opción</b>
            <input type="text" name="nombres" id="names"><br>
            <input type="submit" value="Enviar">
            <script>
            var nombres= new LiveValidation('names');
            nombres.add(Validate.Presence);
            </script>
        </form>
    </body>
</html>
