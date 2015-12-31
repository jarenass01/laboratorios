<!Doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tu pagina</title>
        <script language="javascript" type="text/javascript">
            window.onbeforeunload = function(e) {
                var e = e || window.event;
                if (e) {
                    e.returnValue = '¿Realmente vas a abandonar la página?';
                }
                return '¿Realmente vas a abandonar la página?';
            }
        </script>
    </head>
    <body>
    </body>
</html>