<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo en Materialize CSS</title>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <script src="../../turnoshospital/js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <style>

    </style>
</head>
<body>

<div class="valign-wrapper row login-box">
<div class="col card hoverable spinner-green s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form>
        <div class="card-content">
            <span class="card-title">Inicio de sesión</span>
            <img src="">
            <div class="row">
                <div class="input-field col s12">
                    <label for="email">Email address</label>
                    <input type="email" class="validate" name="email" id="email" />
                </div>
                <div class="input-field col s12">
                    <label for="password">Password </label>
                    <input type="password" class="validate" name="password" id="password" />
                </div>
            </div>
        </div>
        <div class="card-action right-align">
            <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
            <input type="submit" class="btn green waves-effect waves-light" value="Login">
        </div>
    </form>
</div>
</div>
<script>
    $(function () {
        
    });
</script>
</body>
</html>