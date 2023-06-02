<?php
$connection = mysqli_connect("localhost","root","","control_vehícular_pruebas") or die("Error " . mysqli_error($connection));

$sql = "select patrulla from cambio_de_turno";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete Textbox in HTML5 PHP and MySQL</title>
</head>
<body>
    <label for="pcategory">Product Category</label>
    <input type="text" list="categoryname" id="pcategory">
    <datalist id="categoryname">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['patrulla']; ?>"><?php echo $row['patrulla']; ?></option>
        <?php } ?>
    </datalist>
    <?php mysqli_close($connection); ?>
</body>
</html>