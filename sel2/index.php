<!DOCTYPE html>
<html>
    <head>
        <script src="https://select2.github.io/vendor/js/jquery.min.js"></script>
        <script src="select2.js"></script>
        <link rel="stylesheet" href="select2.css">
        <script>
            $(function() {
                
                $("select[name=seleccion]").val("<?= 3 ?>");
                
                $(".js-example-placeholder-single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
            });
        </script>
    </head>
    <body>
        <select style="width: 100%;" name="seleccion" class="js-example-placeholder-single">
            <option></option>
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
            <option value="4">CCUUUUUUUUUUAAAAATROO</option>
        </select>
    </body>
</html>