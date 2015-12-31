<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="../../cirucol/web/css/bootstrap.min.css">
        <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
        <script src="../../cirucol/web/js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $("#snd").click(function() {
                    var contenedor = $("html").html();
                    var inform = $("#forma").serialize();
                    $.post("grab.php", {"data": contenedor, "inform": inform}, function(rem) {
                        alert(rem);
                    });
                });
            });
        </script>
    </head>
    <body style="background-color: lightgray;">

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-align: center; font-weight: bold;">Creación de nueva Entidad bancaria</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form method="POST" id="forma">
                                <label>Ingrese el nombre de la entidad bancaria</label>
                                <input name="nombre_entidad" class="form-control">
                                <label>Asi es un select</label>
                                <select name="ualquiera" class="form-control">
                                    <option></option>
                                    <option value="EPS">Eps</option>
                                    <option value="PEN">Pensión</option>
                                    <option value="CES">Cesantías</option>
                                </select>

                                <label>Text Area</label>
                                <textarea class="form-control"></textarea>
                                <div style="margin-top: 13px;">
                                    <input type="button" id="snd" class="btn btn-lg btn-block btn-primary" value="Grabar información">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>