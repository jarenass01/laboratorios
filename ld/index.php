<?php
require_once './ldap/adLDAP.php';

$usuario = "jfa1";
$clave = "";

###################### NO TOCAR #######################
try {
    $da = new adLDAP();
} catch (Exception $ex) {
    
}

$validation = $da->authenticate($usuario, $clave);
//$result = $da->user()->info($usuario);
$result= explode(",", $da->user()->dn("cmcx"));

print_r($result);
if(in_array("OU=Medicos", $result) || in_array("OU=Enfermeras Generales", $result)){
    echo "Está";
}else{
    echo "No está";
}
?>