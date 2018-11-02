<?php

include("config.php");


$id = $_GET['motivo'];

$sql = "DELETE FROM motivos_es_gt WHERE motivo=:motivo";
$query = $dbConn->prepare($sql);
$query->execute(array(':motivo' => $motivo));


header("Location:listar.php");
?>