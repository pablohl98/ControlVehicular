<?php

include("config.php");

$id = htmlspecialchars($_GET['id']);



//$sql = "UPDATE agregar_oficial ao SET ao.nombre = '$nombre' where ao.id_oficial = '$id'";
$sql2 = "DELETE FROM agregar_oficial WHERE id_oficial = $id;";

$query_run = mysqli_query($db, $sql2);
return $id;
