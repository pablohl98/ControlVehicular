<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
if(isset($_POST['nombre']))
{    
     $name = $_POST['nombre'];
     $patrulla = $_POST['patrulla'];
     $turnos = $_POST['turno'];
     //$sql = "INSERT INTO registro(nombre,patrulla) VALUES ('$name','$patrulla')";
     //$sql = "INSERT into registro (usuario,nombre,patrulla) VALUES ('$usuario','$name','$patrulla')";
     $sql2 = "INSERT INTO registroturno (usuarios_IMPE, oficialentrega, idturno, idpatrulla) VALUES ($contra,'$name',$turnos,$patrulla)";
     if (mysqli_query($db, $sql2)) {
 
     } else {
        echo "Error: " . $sql2 . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}
        header("location: estado-patrulla.html.php");
?>