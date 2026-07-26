<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");


  $conexion=mysql_connect("localhost","root","");
  mysql_select_db("empresa",$conexion); //"ejemplo_pdf"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="16" bgcolor="skyblue"><CENTER><strong>REPORTE DE USUARIOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>RUT</strong></td>
    <td><strong>NOMBRES</strong></td>
    <td><strong>APELLIDO PATERNO</strong></td>
    <td><strong>APELLIDO MATERNO</strong></td>
    <td><strong>FECHA NACIMIENTO</strong></td>
    <td><strong>CORREO EMPRESA</strong></td>
    <td><strong>CORREO PERSONAL</strong></td>
    <td><strong>FONO FIJO</strong></td>
    <td><strong>FONO MOVIL</strong></td>
    <td><strong>DIRECCION</strong></td>
    <td><strong>REGION</strong></td>
    <td><strong>PROVINCIA</strong></td>
    <td><strong>COMUNA</strong></td>
    <td><strong>FECHA CONTRATO</strong></td>
    <td><strong>TIPO CONTRATO</strong></td>
    <td><strong>NOMBRE FOTO</strong></td>
    <!--<td><strong>DNI</strong></td>-->
  </tr>
  
<?PHP
  
$sql=mysql_query("select * from colaborador");//rut,nombres,apellidoPaterno,apellidoMaterno,fechaNacimiento
while($res=mysql_fetch_array($sql)){  

 $rut=$res["rut"];
 $nombres=$res["nombres"];
 $ApellidoPa=$res["apellidoPaterno"];
 $ApellidoMa=$res["apellidoMaterno"];
 $fechaNA=$res["fechaNacimiento"];
 $correoEmp=$res["correoInstitucional"];
 $correoPer=$res["correoPersonal"];
 $fonoF=$res["fonoFijo"];
        
 $fonoMo=$res["fonoMovil"];
 $direc=$res["direccion"];
 $id_reg=$res["reg_id"];
 $id_pro=$res["pro_id"];
 $id_com=$res["com_id"];
 $fechaCon=$res["fechaContrato"];
 $tipoCon=$res["tipoContrato"];
 $nombreFo=$res["nombreFoto"];
 //$dni=$res["dni"];     

?>  
 <tr>
 <td><?php echo $rut; ?></td>
 <td><?php echo $nombres; ?></td>
 <td><?php echo $ApellidoPa; ?></td>
 <td><?php echo $ApellidoMa; ?></td>
 <td><?php echo $fechaNA; ?></td>
 <td><?php echo $correoEmp; ?></td>
 <td><?php echo $correoPer; ?></td>
 <td><?php echo $fonoF; ?></td>
 <td><?php echo $fonoMo; ?></td>
 <td><?php echo $direc; ?></td>
 <td><?php echo $id_reg; ?></td>
 <td><?php echo $id_pro; ?></td>
 <td><?php echo $id_com; ?></td>
 <td><?php echo $fechaCon; ?></td>
 <td><?php echo $tipoCon; ?></td>
 <td><?php echo $nombreFo; ?></td>
                    
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>