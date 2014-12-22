<?php
    require_once "nusoap/lib/nusoap.php";
    //$cliente = new nusoap_client("http://www.webservicex.net/globalweather.asmx?WSDL");
    $cliente= new nusoap_client("http://www.webservicex.net/globalweather.asmx?WSDL", true, "192.168.1.2", "8086");
      
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
      
    $result = $cliente->call("getProd", array("categoria" => "libros"));
      
    if ($cliente->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<h2>Libros</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>