<?php
require_once './adodb5/adodb.inc.php';

$db= NewADOConnection('mysql');
$db->Connect("localhost", "root", "", "alimentos");


$rs= $db->Execute("SELECT * FROM alimentos");

while(!$rs->EOF){
    print_r($rs->fields);
    $rs->MoveNext();
}
