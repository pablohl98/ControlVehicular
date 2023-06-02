<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
</body>
</html>
<?php
    include("config2.php");
    if(isset($_POST['impe']))
{    
     $impe = $_POST['impe'];
     $nombre = $_POST['nombre'];     
     $apellidop = $_POST['apellidop'];
     $apellidom = $_POST['apellidom'];
     $usuario = $_POST['usuario'];
     $distritos = $_POST['distritos'];
     $roles = $_POST['roles'];

     $sql = "INSERT into usuarios(IMPE,nombre,apellidop,apellidom,usuario,distrito,rol) values ($impe,'$nombre','$apellidop','$apellidom','$usuario',$distritos,$roles)";
     if (mysqli_query($db, $sql)) {
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}       
    header("location: registrar-usuarios.html.php");
?>