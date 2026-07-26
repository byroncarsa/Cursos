<?php
include 'conexion.php';

$q=$_POST['q'];
$con=conexion();

$res=mysql_query("select * from sitio where si_tipo_id=".$q."",$con);

?>

<select name="sitio1" id="sitio" onchange="myFunction2(this.value)"><!--cuando seleccionan un pais se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['si_id']; ?>"><?php echo $fila['si_nombre']; ?></option>
<?php } ?>

</select>

