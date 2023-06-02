<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>
<?php
include("config2.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    



    $sql = "SELECT usuario, password FROM login WHERE usuario = '$myusername' and password = '$mypassword' ";
    $sql2 = "SELECT usuario, IMPE FROM usuarios WHERE usuario = '$myusername' and IMPE = '$mypassword' ";
    $result = mysqli_query($db,$sql2);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $count = mysqli_num_rows($result);

    if($count == 1) {
        $_SESSION['idUsuario'] = json_encode($myusername);
        $_SESSION['pass'] = json_encode($mypassword);
        //$_SESSION['idUsuario'] =  $row['idUsuario'] ;

        //$_SESSION['Users'] =  $myusername ;


        if ( password_verify( $_POST['password'], $user->password ) ) {
            $_SESSION['user_id'] = $user->ID;
        } 
            header("location: cambio-de-turno.html.php");
    }else {
           echo '<script type="text/javascript">sweetAlert("Acceso denegado","Usuario o contraseña incorrectos","error")</script>';
           include "index.html";
         }
}
?>
</body>

</html>
