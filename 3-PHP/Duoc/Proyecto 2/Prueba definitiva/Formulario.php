<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="ajax.js"></script>
	<script src="Validaciones.js"> </script>
	<link rel = "stylesheet" href = "css\Estilo.css"></link>

           <script>

                function myFunction(str)
                {
                  loadDoc("q="+str,"proc.php",function()
                    {
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                           document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                        }
                    });
                }

               function myFunction2(str)
                {
                 loadDoc("r="+str,"proc2.php",function()
                    {
                      if (xmlhttp.readyState==4 && xmlhttp.status==200)
                        {
                           document.getElementById("myDiv2").innerHTML=xmlhttp.responseText;
                        }
                    });
                }

           </script>
</head>
<body>
	<header align = "middle"><p><H1>	Formulario </H1></p><br>
	</p></header>
	<br>
	<section>
	<form action="ControladorCRUD.php" method="POST">
	<H2 align = "middle"> Nuevo Colaborador </H2>
	<table>
		<tr>
			<td>Rut</td>         
			<td><input type="text" name="rut1" size=20 pattern="\d{3,8}-[\d|kK]{1}" title="Debe ser un Rut válido" onkeypress="return validarFormatoRut(event)" required=""></td>
		</tr>
		<tr>
			<td>Nombres</td>
			<td><input type="text" name="nombres1" size=20 pattern="[A-Za-z]{3,20}" title="Minimo 3 - Maximo 20" onkeypress="return validarLetras(event)" required=""></td>
		</tr>
		<tr>
			<td>Apellido Paterno</td>
			<td><input type="text" name="apellidoPaterno1" size=20 pattern="[A-Za-z]{3,20}" title="Minimo 3 - Maximo 20" onkeypress="return validarLetras(event)" required=""></td>
		</tr>
		<tr>
			<td>Apellido Materno</td>
			<td><input type="text" name="apellidoMaterno1" size=20 pattern="[A-Za-z]{3,20}" title="Minimo 3 - Maximo 20" onkeypress="return validarLetras(event)" required=""></td>
		</tr>
		<tr>
			<td>Fecha de Nacimiento </td>
			<td><input type="date" name="fechaNacimiento1" size=20 required=""></td>
		</tr>
		<tr>
			<td>Correo Institucional</td>
			<td><input type="email" name="correoInstitucional1" size=20 pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required=""></td>
		</tr>
		<tr>
			<td>Correo Personal</td>
			<td><input type="email" name="correoPersonal1" size=20 pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required=""></td>
		</tr>
		<tr>
			<td>Fono Fijo</td>
			<td><input type="text" name="fonoFijo1" size=20 pattern="[0-9]{8,15}" onkeypress="return validarNumeros(event)" required=""></td>
		</tr>
		<tr>
			<td>Fono Movil</td>
			<td><input type="tel" name="fonoMovil1" size=20 pattern="[0-9]{8,15}" onkeypress="return validarNumeros(event)" required=""></td>
		</tr>
		<tr>
			<td>Fecha de Contrato</td>
			<td><input type="date" name="fechaContrato1" size=20 onblur="validarDireccion();" required=""></td>
		</tr>
		<tr>
			<td>Tipo de Contrato</td>
			<!--<td><input type="text" name="tipoContrato1" size=20>-->
			<td>
				<SELECT NAME="tipoContrato1" SIZE=1 required=""> 
				<OPTION VALUE="Indefinido">Indefinido</OPTION>
				<OPTION VALUE="Partime">Partime</OPTION>
				</SELECT> 
			</td>
		</tr>
		<tr>
			<td>Direccion</td>
			<td><input type="text" name="direccion1" size=20 required=""></td>
		</tr> 
		<?php
               $con=conexion();
               $res=mysql_query("select * from region",$con);
           ?>
		<tr>
			<td>Region</td>
			<td><select name="region1" id="reg" onchange="myFunction(this.value)" required="">
                <option value="">Seleccione</option>

                <?php
                    while($fila=mysql_fetch_array($res)){
                ?>

                <option value="<?php echo $fila['reg_id']; ?>"><?php echo $fila['reg_nom']; ?></option>

                <?php } ?>

           </select></td>
		</tr> 
		<tr>
			<td>Provincia</td>
			<td><div id="myDiv"></div><!--div donde aparecen los paises--></td>
		</tr> 
		<tr>
			<td>Comuna</td>
			<td><div id="myDiv2"></div><!--div donde aparecen los estados de los paises--></td>
		</tr>
		<tr>
			<td>Foto <input name="nombreFoto" type="file"></td>
		</tr>

		
    </table>
	
	<table>
	 <tr>
	 	<td><input type="submit" name="opcion" value="Agregar" size=10></td>
	 	<td><input type="submit" name="opcion" value="Eliminar" size=10></td>
	 	<td><input type="submit" name="opcion" value="Modificar" size=10></td>
		<td><input type="submit" name="opcion" value="Listar en PDF" size=10 onclick="window.open('importarPDF.php')"></td>
		<td><input type="submit" name="opcion" value="Listar en Excel" size=10 onclick="window.open('importarExcel.php')"></td>
		
	 </tr>
	</table>
	</form>
	</section>
<footer>
	<H3 align = "middle"> PRUEBA DAI 2 </H3>
</footer>
	
</body>
</html>