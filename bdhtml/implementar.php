<?php
$conex= new mysqli("localhost", "root", "", "inventory_jn");
$data= $conex->query("SELECT * FROM parsehtml WHERE id=1");
$daa= $data->fetch_object();
?>
<!doctype html>
<html>
<?= $daa->html ?>
</html>