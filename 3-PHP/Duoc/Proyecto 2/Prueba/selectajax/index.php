<?php
include 'conexion.php';
?>
<!DOCTYPE html>

<html>

<head>

<script src="ajax.js"></script>

</head>

<body>

<h2>HTML - PHP - AJAX - MySQL</h2>

<?php

$con=conexion();
$res=mysql_query("select * from continente",$con);

?>

<select id="cont" onchange="load(this.value)">

<option value="">Seleccione</option>

<?php

while($fila=mysql_fetch_array($res)){

?>

 <option value="<?php echo $fila[codigo]; ?>"><?php echo $fila[nombre]; ?></option>

<?php } ?>

</select>


<div id="myDiv"></div>

</body>

</html>