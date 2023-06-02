<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
	$name=$_POST["name"];
	$city=$_POST["city"];
}
?>
<form action="page2.php" method="POST">
	Enter Name: <input type="text" name="name"><br>
	City: <input type="text" name="city"> </br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>