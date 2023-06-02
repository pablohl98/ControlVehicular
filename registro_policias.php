<?php
$connection = mysqli_connect("localhost","root","","control_vehícular_pruebas") or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="styleregistro.css">
	<title>Registro de Usuario</title>
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h1>Registrar oficial de Policía</h1>
	
</header>
<body>
	<form action="registro.php" method="post" >
<div id="registro">
	<div id="header-registro"> <b><h3 id="textoregistro">Registrarse</h3></b></div> <hr>
		<div><label for="nombre" id="nombreL" >Nombre:</label>
		<input required type="text" autofocus name="nombre" id="nombreI" placeholder="Escribe tu nombre(es)"/> </div>
		<div><label for="apellidop" id="apellidoPL">Apellido Paterno:</label>
		<input required type="text" autofocus name="apellidop" id="apellidoPI" placeholder="Escribe tu apellido paterno"/> </div>
		<div><label for="apellidom" id="apellidoML">Apellido Materno:</label>
		<input required type="text" autofocus name="apellidom" id="apellidoMI" placeholder="Escribe tu apellido materno"/> </div>
		<div><label for="apellidom" id="comandancia">Comandancia:</label>
			<select required name="comandancia" id="comandancias">
                <option value="comandancia-norte">Norte: Av. Homero #500 Col. Revolución</option>
                <option value="comandancia-sur" selected>Sur: Av. Pacheco #8800 Col. 2 de Octubre</option>
            </select> 	
		</div>
		<div><label for="nombre" id="correoL" >Correo Electrónico:</label>
			<input type="email" name="email" required id="correoI" placeholder="Escribe tu correo electrónico">
		</div>
		<div><label for="nombre" id="celuL" >Número de Celular:</label>
		<input required type="tel" autofocus name="celular" id="celuI" placeholder="Celular a 10 digitos" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"/> </div> <hr>
		<div id="enviar"><input type="submit" value="Enviar Registro" id="boton-enviar" align="center"></div>
		</form>
</div>
</form>
</body>
</html>
