<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alta Patrulla</title>
	<link type="text/css" rel="stylesheet" href="stylealtapatrulla.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h1>Dar de alta una patrulla</h1>
</header>
<body>
	<form id="alta-p" action="insert-patrulla.php" method="post" >
	<div id="alta-patrulla">
		<div id="header-alta"> <b><h3 id="textoalta">Dar de alta</h3></b></div> <hr>
		<div><label for="nombre" id="nombreL" >Nombre Clave:</label>
		<input required type="text" autofocus name="nombre" id="nombreI" placeholder="Ejemplo 'PA-1460'"/> </div>
		<div><label for="marca" id="marcaL" >Marca: (opcional)</label>
		<input  type="text"  name="marca" id="marcaI" placeholder="Ingrese la marca"/> </div>
		<div><label for="modelo" id="modeloL" >Modelo: (opcional)</label>
		<input  type="text"  name="modelo" id="modeloI" placeholder="Ingrese el modelo"/> </div><hr>
		<div id="enviar">
			<input type="button" value="Atrás" id="boton-regresa" onclick="history.back()">
			<input type="submit" value="Enviar Registro" id="boton-enviar" align="center">
		</div>



	</div>	
	</form>
</body>
</html>