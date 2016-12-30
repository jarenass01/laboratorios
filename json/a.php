<html ng-app="app">
<head>
    <title>Hola mundi</title>
    <script src="../../cirucol/web/js/angular.min.js"></script>
</head>
<body>
<div ng-controller="ctrl">
    {{datos}}
</div>

<script>
    var app= angular.module("app", []);
    app.controller("ctrl", function ($scope, $http) {
        $scope.datos={};

        $http.post("datason.php", {
            nombre: "Miguel",
            fechaNacimiento: "21/02/1975",
            sitiosPreferidos: [
                "DesarrolloWeb.com",
                "Guiarte.com"
            ],
            direccion: {
                calle: "De la alegría",
                numero: 18,
                ciudad: "Villadigital"
            }
        })
            .success(function(respuesta){
                $scope.datos= respuesta;
            });
    });
    
</script>
</body>
</html>