<?php
include 'conexion.php';

$q=$_POST['q'];
$con=conexion();

$res=mysql_query("select * from provincia where pro_reg_id=".$q."",$con);

?>

<select name="provincia1" id="provincia" onchange="myFunction2(this.value)"><!--cuando seleccionan un pais se ejecuta la funcion myFunction2() ubicada en el archivo index.php-->

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['pro_id']; ?>"><?php echo $fila['pro_nom']; ?></option>
<?php } ?>

</select>

