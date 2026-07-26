<?php
include 'conexion.php';

$r=$_POST['r'];
$con=conexion();

$res=mysql_query("select * from comuna where com_pro_id=".$r."",$con);

?>

<select name="comuna1" id="comuna">

<option value="">Seleccione</option>
<?php while($fila=mysql_fetch_array($res)){ ?>
 <option value="<?php echo $fila['com_id']; ?>"><?php echo $fila['com_nom']; ?></option>
<?php } ?>

</select>

