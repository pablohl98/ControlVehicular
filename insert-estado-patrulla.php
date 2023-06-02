<?php 
session_start();
if(!isset($_SESSION['idUsuario'])){
  header("location:index.html");
      die();
   }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'> </script>
    <link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
</head>
<body>
</body>
</html>
<?php
    include("config2.php");
    $usuario = explode("\"", $_SESSION['idUsuario'])[1];
    $contra = $_SESSION['pass'];
    if(isset($_POST['llantas']))
{    
     $llantas = $_POST['llantas'];
     $cristales = $_POST['cristales'];
     $carroceria = $_POST['carroceria'];
     $pintura = $_POST['pintura'];
     $caja = $_POST['caja'];
     $observaciones = $_POST['observa'];
 
     $sql = "INSERT INTO registropatrulla (usuarios_IMPE,estado_llantas,estado_cristales,estado_carroceria,estado_pintura,estado_caja,observaciones) values ($contra,'$llantas','$cristales','$carroceria','$pintura','$caja','$observaciones')";
    
     if (mysqli_query($db, $sql)) {
 
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}
        header("location: datos-enviados.html");
?>