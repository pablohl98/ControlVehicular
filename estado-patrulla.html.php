<?php 
session_start();
if(!isset($_SESSION['idUsuario'])){
  header("location:index.html");
      die();
   }
 echo "<script>console.log(" . $_SESSION['pass'] . ");</script>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="style-estado-patrulla.css">
	<title>Estado de la Patrulla</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src='index.js'> </script>

</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	
</header>
<body>
	<div id="registro">	
		<form id="estado-patrulla" action="insert-estado-patrulla.php" method="post">	
			<?php echo "<input id='contras' type='text' hidden value= ". $_SESSION['pass'] .">"; ?>
		<div id="header-estado"> <b><h3 id="textoestado">Estado de la Patrulla</h3></b></div> <hr>
			<div id="pregunta1"> <b><h5 id="textollantas">Estado de las Llantas :</h5></b></div>
			<h4 id="llantasEstado">Buen Estado <input type="radio" name="llantas" value="Buen Estado" id="llantasbienestado" checked required>
			Mal Estado <input type="radio" name="llantas" value="Mal Estado" id="llantasmalestado"> <input type="radio" name="llantas" value="pordefecto" id="llantashidden" hidden checked></h4> <hr>	

			<div id="pregunta2"><b><h5 id="textocristales">Estado de los Cristales :</h5></b></div>
			<h4 id="llantasEstado">Buen Estado <input type="radio" name="cristales" value="Buen Estado" id="cristalesbienestado" required>
			Mal Estado <input type="radio" name="cristales" value="Mal Estado" id="cristalesmalestado"> <input type="radio" name="cristales" value="pordefecto" id="llantashidden" hidden checked> </h4> <hr>

			<div id="pregunta3"> <b><h5 id="textocarrocería">Estado de la Carrocería :</h5></b></div>
			<h4 id="llantasEstado">Buen Estado <input type="radio" name="carroceria" value="Buen Estado" id="carroceriabienestado" required>
			Mal Estado <input type="radio" name="carroceria" value="Mal Estado" id="carroceriamalestado"> <input type="radio" name="carroceria" value="pordefecto" id="llantashidden" hidden checked> </h4> <hr>	

			<div id="pregunta4"> <b><h5 id="textopintura">Estado de la Pintura :</h5></b></div>
			<h4 id="llantasEstado">Buen Estado <input type="radio" name="pintura" value="Buen Estado" id="pinturabienestado" required>
			Mal Estado <input type="radio" name="pintura" value="Mal Estado" id="pinturamalestado"> <input type="radio" name="pintura" value="pordefecto" id="llantashidden" hidden checked> </h4> <hr>

			<div id="pregunta5"> <b><h5 id="textocaja">Estado de la Caja :</h5></b></div>
			<h4 id="llantasEstado">Buen Estado <input type="radio" name="caja" value="Buen Estado" id="cajabienestado" required>
			Mal Estado <input type="radio" name="caja" value="Mal Estado" id="cajamalestado"> <input type="radio" name="caja" value="pordefecto" id="llantashidden" hidden checked> </h4> <hr>

			<div id="pregunta6"> <b><h5 id="textoobservaciones">Observaciones (opcional)</h5></b></div>
			<h4><textarea id="Observaciones"placeholder="Escribe tus Observaciones aquí"cols="30" rows="8" name="observa"></textarea></h4>
			<div id="enviar">
				<input type="button" value="Atrás" id="boton-regresa" onclick="history.back()">
				<input type="button" value="Enviar y Salir" id="boton-enviar" align="center">
			</div>
			</div>
		</form>
				<script>
					$(document).on('click','#boton-enviar', function(e) {
						if (!document.getElementsByName("llantas")[2].checked && !document.getElementsByName("cristales")[2].checked && 
								!document.getElementsByName("carroceria")[2].checked && !document.getElementsByName("pintura")[2].checked &&
								!document.getElementsByName("caja")[2].checked) {
								e.preventDefault();
								Swal.fire({
								  title: '¿100% Seguro?',
								  text: "El Reporte será Enviado",
								  icon: 'warning',
								  iconColor: '#FF7216',
								  showCancelButton: true,
								  confirmButtonColor: '#3085d6',
								  cancelButtonColor: '#d33',
								  confirmButtonText: 'Estoy Seguro',
								  cancelButtonText: 'No Estoy Seguro'
								}).then((result) => {
								  if (result.isConfirmed) {
								  	$('#estado-patrulla').submit();					    
								  }
								})
						}	else{
							Swal.fire({
  						icon: 'error',
  						iconColor: '#FF33336',
  						title: 'Falta Seleccionar',
  						text: 'Porfavor llene todas las opciones'
				})
						}			
					});
				
		</script>
	</div>
</form>
</body>
</html>
