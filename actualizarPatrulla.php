<?php

include("config2.php");

$id = htmlspecialchars($_GET['id']);
$nombre = htmlspecialchars($_GET['nombre']);
$marca = htmlspecialchars($_GET['marca']);
$modelo = htmlspecialchars($_GET['modelo']);



$sql2 = "UPDATE patrulla pat SET pat.nombrePatrulla = '$nombre' ,pat.marca = '$marca',pat.modelo = '$modelo' where pat.idpatrulla = '$id'";

$query_run = mysqli_query($db, $sql2);
return $id . " " . $marca . " " . $modelo;