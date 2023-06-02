<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buscador Patrulla</title>
	<link type="text/css" rel="stylesheet" href="style-buscador-patrulla.css">
	<script type="text/javascript" src='elimina-patrulla.js'> </script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>	
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h2>Eliminar Patrulla</h2>
</header>
<body>
<?php
		$id = ""; 
		$nombre = ""; 
		$marca = ""; 
		$modelo = ""; 
		$nulo = "Valor no encontrado";
		$variablecero= 0;
		include("config2.php");
		if(isset($_POST['buscar'])){
		$id = $_POST['id'];
		$query = "SELECT * FROM patrulla where idpatrulla = '$id'";
		$query_run = mysqli_query($db,$query);
		if ($query_run->num_rows==0) {
			echo '<script type="text/javascript">sweetAlert("Policia no encontrado","Número de policia incorrecto","error")</script>';
			$id= $nulo;
			$nombre = $nulo;
			$marca = $nulo;
			$modelo =  $nulo;  
		} else {
			while($row = mysqli_fetch_array($query_run)){
				$id = $row['idpatrulla'] ;
				$nombre = $row['nombrePatrulla'] ;	
				$marca =  $row['marca'] ;	
				$modelo =  $row['modelo'] ;	 
			}
		}	
	}
?>	
<div id="todo">
	<form action="" method="post">
	<div id="header-buscar"><b><h3 id="textobuscar">Buscar patrulla por su id</h3></b></div> <hr>
	<div><input id="buscarI" required autofocus type="text" name="id" placeholder="Escriba id a buscar">
	<input id="boton-buscar" type="submit" name="buscar" value="Buscar"> </div><hr>
	<div><b><label id="lid">ID de la patrulla: </label> </b>	
	<input id="id" type="text" name="id_oficial" disabled value="<?php echo $id ?>"/> </div>	
	<div><b><label id="lnombre">Nombre Clave: </label>	</b>
	<input id="nombre" type="text" name="nombre" value="<?php echo $nombre ?>"/> </div>
	<div><b><label id="lmarca">Marca: (opcional) </label></b>	
	<input id="marca" type="text" name="marca" value="<?php echo $marca ?>"/> </div>
	<div><b><label id="lmodelo">Modelo: (opcional) </label></b>	
	<input id="modelo" type="text" name="modelo" value="<?php echo $modelo ?>"/> </div> <hr>	
	<input type="button" value="Atrás" id="boton-regresa" onclick="window.location='menu-admin.html';">
	<input id="boton-actualizar" type="button" name="actualizar" value="Eliminar" onclick="xddd()"> <br>
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
  	posteliminapatru();
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