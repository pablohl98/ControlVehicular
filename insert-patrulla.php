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
    if(isset($_POST['nombre']))
{    
     $nombre = $_POST['nombre'];
     $marca = $_POST['marca'];
     $modelo = $_POST['modelo'];

     $sql = "INSERT into patrulla(nombrePatrulla,marca,modelo) values('$nombre','$marca','$modelo')";

     if (mysqli_query($db, $sql)) {
        
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}       
    header("location: altapatrulla.html.php");
?>