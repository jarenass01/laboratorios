<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../../cirugia/lib/jquery19.js"></script>
        <script>
            $(function() {
                $("#selmix").change(function() {
                    if ($("#selmix").val() != "") {
                        $("#container").append("<input type='text' ondblclick='borrComponente(this)' class='added' readonly name='hola[]' value='" + $("#selmix").val() + "'><br>");
                    }
                });
            });
            function borrComponente(component){
                $(component).remove();
            }
        </script>
        <style>
            .added{
                background-color: lightblue;
            }
            #texta{
                background-color: lightblue;
                font-family: Trebuchet MS;
            }
        </style>
    </head>
    <body>
        <select id="selmix">
            <option></option>
            <option>Ana Yelitza Cardona</option>
            <option>Juan Fernando Arenas</option>
            <option>laura Melisa Garcés</option>
        </select>
        <br>
        <br>
        <div id="container">

        </div>
    </body>
</html>