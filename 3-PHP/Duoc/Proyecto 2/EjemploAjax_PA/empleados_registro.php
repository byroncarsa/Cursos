
<html>
  <head>
  <title>Registro de empleados</title>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  <body>
		<form name="nuevo_empleado" action="" onsubmit="enviarDatosEmpleado(); return false">
			<h2>Nuevo empleado</h2>
				<table>
				<tr>
                	<td>Rut</td><td><label><input name="rut" type="text" /></label></td>
               	</tr>
                <tr>
                	<td>Nombres</td><td><label><input name="nombre" type="text" /></label></td>
               	</tr>
                <tr>
					<td>Apellido</td><td><label><input type="text" name="apellido"></label></td>
				</tr>
                
                <tr>
                   	<td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label></td>
                </tr>
                </table>
		</form>
 
		<div id="resultado"><?php include('/consulta.php');?></div>
 
    </body>
</html>

