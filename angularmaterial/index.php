<?php require_once 'lib.php'?>
<?php cabecera(); ?>
<body ng-app="ba" ng-cloak>

<div layout="row" layout-wrap>
    <div flex="50" flex-offset="25">
        <md-button>Normalito</md-button>
        <md-button class="md-primary">Primario</md-button>
        <md-button ng-disabled="true" class="md-primary">Primario deshabilitado</md-button>
        <md-button  class="md-warn">Warning</md-button>
    </div>
</div>

<div layout="row" layout-wrap>
    <div flex="50" flex-offset="25">
        <md-button class="md-raised">Raised</md-button>
        <md-button class="md-raised md-primary">Raised</md-button>
        <md-button class="md-raised md-warn">Raised</md-button>

    </div>
</div>

<div layout="row" layout-wrap>
    <div flex="50" flex-offset="25">
        <md-button class="md-fab md-primary" aria-label="Eat cake">
            <md-icon md-svg-src="img/icons/cake.svg"></md-icon>
        </md-button>

    </div>
</div>
<?php librerias(); ?>
<script>
var app= angular.module("ba", ['ngMaterial']);

</script>
<?php finPagina(); ?>


