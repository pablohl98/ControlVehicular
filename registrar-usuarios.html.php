<?php 
$connection = mysqli_connect("localhost","root","","control_vehicular") or die("Error " . mysqli_error($connection));

$sql = "select idRol,nombreRol from rol order by idRol asc";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
$sql2 = "select idDistrito,nombreDistrito from distrito ORDER BY idDistrito desc";
$result2 = mysqli_query($connection, $sql2) or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar Usuarios</title>
	<link type="text/css" rel="stylesheet" href="style-registrar-usuarios.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src='index.js'> </script>	
</head>
<header>
	<div id="logotipo"><img src="imagenes/logo.png"></div>
	<h1>Registrar oficial de Policía</h1>
</header>
<body>
<form id="regis" action="insert-registro-usuarios.php" method="post" >
	<div id="registro">
		<div id="header-registro"> <b><h3 id="textoregistro">Registrarse</h3></b></div> <hr>
		<div><label for="impe" id="impeL" >IMPE:</label>
		<input required type="text" autofocus name="impe" id="impeI" placeholder="Número de empleado"/> </div>
		<div><label for="nombre" id="nombreL" >Nombre:</label>
		<input required type="text" name="nombre" id="nombreI" placeholder="Escribe tu nombre(es)"/> </div>		
		<div><label for="apellidop" id="apellidoPL">Apellido Paterno:</label>
		<input required type="text"  name="apellidop" id="apellidoPI" placeholder="Apellido paterno"/> </div>
		<div><label for="apellidom" id="apellidoML">Apellido Materno:</label>
		<input required type="text"  name="apellidom" id="apellidoMI" placeholder="Apellido materno"/> </div>
		<div><label for="usuario" id="usuarioL">Usuario:</label> 
			<input required value="" type="text"  name="usuario" id="usuarioI" readonly placeholder="Genera tu Usuario ------>"/><input type="button"  id="boton-usuario" value="Generar" onclick="generador()"> 
		</div>
		<div><label for="distritos" id="distritoL">Distrito:</label>
			 <b><select id="distritoI" name="distritos">
			 <?php while($row = mysqli_fetch_array($result2)) { ?>
			 <option value="<?php echo $row['idDistrito']; ?>"><?php echo $row['nombreDistrito']; ?></option>
			 <?php } ?>
			 </select></b>	
		</div>		
		<div><label for="roles" id="rolesL">Roles:</label>
			 <b><select id="rolesI" name="roles">
			 <?php while($row = mysqli_fetch_array($result)) { ?>
			 <option value="<?php echo $row['idRol']; ?>"><?php echo $row['nombreRol']; ?></option>
			 <?php } ?>
			 </select></b>	
		</div> <hr>
		<div id="enviar">
			<input type="button" value="Atrás" id="boton-regresa" onclick="history.back()">
			<input type="submit" value="Enviar Registro" id="boton-enviar" align="center">
		</div>
	</div>
</form>
<script type="text/javascript">
function generador() {
   var nombre = document.getElementById('nombreI').value;

   a = nombre.split(' ');
   console.log(a);
   a2 = a[0].substring(0, a[0].length);
   var apellidop = document.getElementById('apellidoPI').value;
   b = apellidop.substring(0,1);
   var apellidom = document.getElementById('apellidoMI').value;
   c = apellidom.substring(0, 1);
   usuario = a2+b+c;
    document.getElementById("usuarioI").value = usuario.toLowerCase();
}
</script>
</body>
</html>