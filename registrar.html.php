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
	<link type="text/css" rel="stylesheet" href="styleregistro.css">
	<title>Registro de Usuario</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src='index.js'> </script>
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h1>Registrar oficial de Policía</h1>
</header>
<body>
	<form id="registro-de-usuarios" action="registro.php" method="post" >
<div id="registro">
	<div id="header-registro"> <b><h3 id="textoregistro">Registrarse</h3></b></div> <hr>
		<div><label for="nombre" id="nombreL" >Nombre:</label>
		<input required type="text" autofocus name="nombre" id="nombreI" placeholder="Escribe tu nombre(es)"/> </div>
		<div><label for="apellidop" id="apellidoPL">Apellido Paterno:</label>
		<input required type="text"  name="apellidop" id="apellidoPI" placeholder="Escribe tu apellido paterno"/> </div>
		<div><label for="apellidom" id="apellidoML">Apellido Materno:</label>
		<input required type="text"  name="apellidom" id="apellidoMI" placeholder="Escribe tu apellido materno"/> </div>
		<div><label for="apellidom" id="comandancia">Comandancia:</label>
			<select required name="comandancia" id="comandancias">
                <option value="Norte">Norte</option>
                <option value="Sur" selected>Sur</option>
            </select> 	
		</div>
		<div><label for="nombre" id="correoL" >Correo Electrónico:</label>
			<input type="email" name="email" required id="correoI" placeholder="Escribe tu correo electrónico">
		</div>
		<div><label for="nombre" id="celuL" >Número de Celular:</label>
		<input required type="tel"  name="celular" id="celuI" placeholder="Celular a 10 digitos" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"/> </div> <hr>
		<div id="enviar">
			<input type="button" value="Atrás" id="boton-regresa" onclick="history.back()">
			<input type="submit" value="Enviar Registro" id="boton-enviar" align="center">
		</div>
		</form>
</div>
</form>
</body>
</html>