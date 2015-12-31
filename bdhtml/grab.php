<?php
$conex= new mysqli("localhost", "root", "", "inventory_jn");
$data= $_REQUEST['data'];
$inform= json_encode($_REQUEST['inform']);

$resm= $conex->query("INSERT INTO parsehtml VALUES(NULL, '$data', '$inform')");
echo $resm;