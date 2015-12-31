<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            #espane{
                background-image: url('http://vmsrv-encu/enclieninterno/img/bgTop.png');
                background-repeat: no-repeat;
                /* background-position: right top; */
                background-position: right top;
                /* background-color: #E6E6E6; */
            }
        </style>
    </head>
    <body>
        <div class="container">


            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: rgb(0,105,65); color: white;">
                    <img src="http://centrosespecializados.sanvicentefundacion.com/site/portals/0/Sala%20de%20prensa/logo_sanvicente_CE.jpg" width="200px;">
                    <label style="font-size: 20px; margin-left: 16%;">Encuestas de satisfacción del cliente interno</label>
                </div>
                <div id="espane" class="panel-body">
                    <div class="col-md-6">
                        <?php
                        $numero1= 1300000;
                        $numero2= 300000;
                        
                        echo number_format($numero1+$numero2);
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
