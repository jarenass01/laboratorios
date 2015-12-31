<?php
require_once './nusoap/lib/nusoap.php';

@$cliente= new nusoap_client("http://medirestdiet.cloudapp.net/WCF_medirest/WS_medirest.svc?wsdl", TRUE);
@$cliente->soap_defencoding= 'UTF-8';
$error= $cliente->getError();

if($error){
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}
$parametros= array(
    "Usuario"=>"admin",
    "Acceso"=>"1234",
    "HistoriaClinica"=>"0001",
    "Ubicacion"=>"TCP2",
    "Cama"=>"202",
    "Paciente"=>"Pte_Prueba",
    "Edad"=>"23_anios",
    "Dieta"=>"HPGL",
    "VIP"=>"Si",
    "Observaciones"=>"Observacion1",
    "Estado"=>"1",
);
$result= $cliente->call("putPaciente", $parametros);

if ($cliente->fault) {
        echo "<h2>Falta</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
    }