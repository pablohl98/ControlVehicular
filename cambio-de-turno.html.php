<?php 
session_start();
if(!isset($_SESSION['idUsuario'])){
  header("location:index.html");
      die();
   }


$connection = mysqli_connect("localhost","root","","control_vehicular") or die("Error " . mysqli_error($connection));

$sql = "select idpatrulla,nombrePatrulla from patrulla";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
$sql2 = "select apellidop,apellidom,nombre from usuarios order by apellidop asc";
$result2 = mysqli_query($connection, $sql2) or die("Error " . mysqli_error($connection));
$sql3 = "select idturno,nombreTurno from turno order by idturno asc";
$result3 = mysqli_query($connection, $sql3) or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cambio de Turno</title>
	<link type="text/css" rel="stylesheet" href="stylecambio-de-turno.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
	<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h1>Cambio de turno</h1>
	</header>
<body>
	<script type="text/javascript">
	
	</script>
 	<div id="registro">
 		<div id="header-registro"> <b><h4 id="textoregistro">El oficial que entrega la unidad es: </h4></b></div> <hr>
 			<form id="cambio-de-turno" action="insert-cambio-de-turno.php" method="POST">
 				<?php echo "<input id='valorusuario' type='text' hidden value= ". $_SESSION['idUsuario'] .">"; ?>
 				<?php echo "<input id='contras' type='text' hidden value= ". $_SESSION['pass'] .">"; ?>
 			<h5>Seleccione el nombre de la lista: </h5>   	
        		<b>		<select id="nombres" name="nombre">
							<?php while($row = mysqli_fetch_array($result2)) { ?>
           					 <option value="<?php echo $row['apellidop']." ".$row['apellidom']." ".$row['nombre']; ?>">
           					 	<?php echo $row['apellidop']." ".$row['apellidom']." ".$row['nombre']; ?></option>
       						 <?php } ?>
						</select></b> <hr>
<div id="header-registro"> <b><h4 id="textoregistro">El Turno a evaluar es: </h4></b></div> <hr>
<h5>Seleccione el nombre de la lista: </h5>   	
<b><select id="numero-de-turno" name="turno">
<?php while($row = mysqli_fetch_array($result3)) { ?>
<option value="<?php echo $row['idturno']; ?>"><?php echo $row['nombreTurno']; ?></option>
<?php } ?>
</select></b> <hr>
		<div id="header-registro"> <b><h4 id="textoregistro">El número de patrulla es: </h4></b></div> <hr>
 			<h5>Seleccione el número de la lista: </h5>   	
        		<b>		<select id="numero-de-patrullas" name="patrulla">
							<?php while($row = mysqli_fetch_array($result)) { ?>
           					 <option value="<?php echo $row['idpatrulla']; ?>"><?php echo $row['nombrePatrulla']; ?></option>
       						 <?php } ?>
						</select></b> <hr>			
				<div id="enviar"><input type="button" value="Siguiente" id="boton-enviar" align="center"></div>
			</form>
		<script>
			var usuario = document.getElementById("valorusuario").value;
			var contrasena = document.getElementById("contras").value;
				const Toast = Swal.mixin({
				  toast: true,
				  position: 'top-end',
				  showConfirmButton: false,
				  timer: 6000,
				  timerProgressBar: true,
				  didOpen: (toast) => {
				    toast.addEventListener('mouseenter', Swal.stopTimer)
				    toast.addEventListener('mouseleave', Swal.resumeTimer)
				  }
				})

				Toast.fire({
					icon: 'success',
	 				iconColor: '#7CFC00',
	  				title: 'Bienvenido '+usuario,
	  				text: 'Que tenga un excelente turno'
				})
				console.log(document.getElementById("valorusuario").value);
				$(document).on('click','#boton-enviar', function(e) {
				 e.preventDefault();
					Swal.fire({
					  title: 'Confirmación',
					  text: "¿Los datos son correctos?",
					  icon: 'warning',
					  showCancelButton: true,
					  confirmButtonColor: '#3085d6',
					  cancelButtonColor: '#d33',
					  confirmButtonText: 'Continuar',
					  cancelButtonText: 'Cancelar'
					}).then((result) => {
					  if (result.isConfirmed) {
					  	$('#cambio-de-turno').submit();					    
					  }
					})				
					});
		</script>						
 	</div>
</body>
</html>