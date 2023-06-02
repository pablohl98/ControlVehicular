<?php 
session_start();
$usuario = $_SESSION['idUsuario'];
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
	<title>Actualizar policia</title>
	<link type="text/css" rel="stylesheet" href="style-buscador-poli.css">
		<script type="text/javascript" src='index.js'> </script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h2>Actualizar oficial de Policía</h2>
</header>
<body>
<?php
		$id = ""; 
		$nombre = ""; 
		$ape_pat = ""; 
		$ape_mat = ""; 
		$comandancia = ""; 
		$email = "";
		$celular = ""; 
		$nulo = "Valor no encontrado";
		$variablecero= 0;
		include("config.php");
		if(isset($_POST['buscar'])){
		$id = $_POST['id'];
		$query = "SELECT * FROM agregar_oficial where id_oficial = '$id'";
		$query_run = mysqli_query($db,$query);
		if ($query_run->num_rows==0) {
			echo '<script type="text/javascript">sweetAlert("Policia no encontrado","Número de policia incorrecto","error")</script>';
			$id= $nulo;
			$nombre = $nulo;
			$ape_pat = $nulo;
			$ape_mat =  $nulo;
			$comandancia = $nulo;
			$email =  $nulo;
			$celular = $nulo;  
		} else {
			while($row = mysqli_fetch_array($query_run)){
				$id = $row['id_oficial'] ;
				$nombre = $row['nombre'] ;	
				$ape_pat =  $row['ape_pat'] ;	
				$ape_mat =  $row['ape_mat'] ;	
				$comandancia =  $row['comandancia'];	
				$email =  $row['email'];	
				$celular = $row['celular'];  
			}
		}	
	}
?>
<div id="todo">
<form action="" method="post">
<div id="header-buscar"><b><h3 id="textobuscar">Buscar oficial por su id</h3></b></div> <hr>
<div><input id="buscarI" required autofocus type="text" name="id" placeholder="Escriba id a buscar">
<input id="boton-buscar" type="submit" name="buscar" value="Buscar"> </div><hr>
<div><b><label id="lid">ID del oficial: </label> </b>	
<input id="id" type="text" name="id_oficial" disabled value="<?php echo $id ?>"/> </div>
<div><b><label id="lnombre">Nombre o nombres: </label>	</b>
<input id="nombre" type="text" name="nombre" value="<?php echo $nombre ?>"/> </div>
<div><b><label id="lapep">Apellido Paterno: </label></b>	
<input id="ape_pat" type="text" name="ape_pat" value="<?php echo $ape_pat ?>"/> </div>
<div><b><label id="lapem">Apellido Materno: </label></b>	
<input id="ape_mat" type="text" name="ape_mat" value="<?php echo $ape_mat ?>"/> </div>
<div><b><label id="lcomandancia">Comandancia: </label></b>	
<input id="comandancia" id="comandancia" type="text" name="comandancia" value="<?php echo $comandancia ?>" /> </div>
<div><b><label id="lemail">Email: </label>	
<input id="email" type="text" name="email" value="<?php echo $email ?>" /></b> </div>
<div><b><label id="lcelular">Celular: </label></b>	
<input id="celular" type="text" name="celular" value="<?php echo $celular ?>" /> </div>	<hr>	
<input type="button" value="Atrás" id="boton-regresa" onclick="history.back()">
<input id="boton-actualizar" type="button" name="actualizar" value="Guardar" onclick="xddd()"> <br>
</form>
<form action="" method="post">
	
</form>

</div>
<script>
	function xddd() {
		Swal.fire({
  title: '¿100% Seguro?',
  text: "La Base De Datos Se Actualizará",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Estoy Seguro',
  cancelButtonText: 'No Estoy Seguro'
}).then((result) => {
  if (result.isConfirmed) {
  	postActualizar();
    Swal.fire(
      'Modificado',
      'El registro ha sido Modificado',
      'success'
    )
  }
})
	}
</script>
</body>
</html>