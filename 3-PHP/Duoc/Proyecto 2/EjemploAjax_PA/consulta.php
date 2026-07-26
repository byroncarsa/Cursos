<?php
 
//Configuracion de la conexion a base de datos
  $database="EMPRESA_XX";
  $hostname = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $bd_base = "ajax"; 
  
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
	
	$query = "SELECT * FROM EMPLEADOS";
				
	$resultado = $con->query($query);  
 

?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Rut</td>
		<td>Nombre</td>
		<td>Apellido</td>
	</tr>

	<?php
  foreach($resultado as $row)
  {
    echo "<tr>";
  	echo "<td>".$row['rut']."</td>";
  	echo "<td>".$row['nombre']."</td>";
  	echo "<td>".$row['apellido']."</td>";
  	echo "</tr>";
  }
  
  $con=null;
?>
</table> 
