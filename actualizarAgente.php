<?php

include("config.php");

$id = htmlspecialchars($_GET['id']);
$nombre = htmlspecialchars($_GET['nombre']);
$ape_pat = htmlspecialchars($_GET['ape_pat']);
$ape_mat = htmlspecialchars($_GET['ape_mat']);
$comandancia = htmlspecialchars($_GET['comandancia']);
$email = htmlspecialchars($_GET['email']);
$celular = htmlspecialchars($_GET['celular']);


$sql = "UPDATE agregar_oficial ao SET ao.nombre = '$nombre' where ao.id_oficial = '$id'";
$sql2 = "UPDATE agregar_oficial ao SET ao.nombre = '$nombre' ,ao.ape_pat = '$ape_pat',ao.ape_mat = '$ape_mat',ao.comandancia = '$comandancia',ao.email = '$email',ao.celular = '$celular' where ao.id_oficial = '$id'";

$query_run = mysqli_query($db, $sql2);
return $id . " " . $ape_pat . " " . $ape_mat . " " . $comandancia . " " . $email . " " . $celular;
