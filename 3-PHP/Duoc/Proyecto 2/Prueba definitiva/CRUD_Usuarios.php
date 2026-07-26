<?php
include 'conexion.php';
?>
<!DOCTYPE html>
   <html lang="en">

       <head>
	        <meta charset="UTF-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <title>Document</title>
	        <link rel = "stylesheet" href = "css\Estilo.css"></link>
	        <script src="ajax.js"></script>
	

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

          <script type="text/javascript" src = "js\JavaScript.js"></script>
		  <header align = "middle"><p>	<h1>Formulario<h1> </p><br>
		  </p></header>

		  <section>
	            <form action="ControladorCRUD.php" method="POST">
	                <H2 align = "middle"> Nuevo Colaborador </H2>
	                <center>Rut</center>           
	                <center><input type="text" name="rut1" size=10></center>
	                <center>Nombres</center>
	                <center><input type="text" name="nombres1" size=10></center>
	                <center>Apellido Paterno</center> 
	                <center><input type="text" name="apellidoPaterno1" size=10></center>
	                <center>Apellido Materno</center> 
                 	<center><input type="text" name="apellidoMaterno1" size=10></center>
	                <center>Fecha de Nacimiento</center>  
	                <center><input type="text" name="fechaNacimiento1" size=10></center>
	                <center>Correo Institucional</center>   
	                <center><input type="text" name="correoInstitucional1" size=10></center>
	                <center>Correo Personal</center>        
	                <center><input type="text" name="correoPersonal1" size=10></center>
	                <center>Fono Fijo</center>              
	                <center><input type="text" name="fonoFijo1" size=10></center>
	                <center>Fono Movil</center>             
	                <center><input type="text" name="fonoMovil1" size=10></center>
	                <center>Fecha de Contrato</center>      
	                <center><input type="text" name="fechaContrato1" size=10></center>
	                <center>Tipo de Contrato</center>       
	                <center><input type="text" name="tipoContrato1" size=10></center>
	                <center>Nombre Foto</center>            
	                <center><input type="text" name="nombreFoto1" size=10></center>
	                <center>Direccion</center>              
	                <center><input type="text" name="direccion1" size=10></center>
					
	                <?php
                        $con=conexion();
                        $res=mysql_query("select * from region",$con);
                    ?>

                    <Center>Region</center>
		            <center><select name="region1" id="reg" onchange="myFunction(this.value)">
                    <option value="">Seleccione</option>

                    <?php
                        while($fila=mysql_fetch_array($res)){
                    ?>

                    <option value="<?php echo $fila['reg_id']; ?>"><?php echo $fila['reg_nom']; ?></option>

                    <?php } ?>

                    </select></center>

                    <center>Provincia</center>
		            <center><div id="myDiv"></div></center><!--div donde aparecen los paises-->
                    <center>Comuna</center>
		            <center><div id="myDiv2"></div></center><!--div donde aparecen los estados de los paises-->
    

	              <center>
				       <table>
	                      <tr>
	 	                      <td><input type="submit" name="opcion" value="Agregar" size=10></td>
	 	                      <td><input type="submit" name="opcion" value="Eliminar" size=10></td>
	 	                      <td><input type="submit" name="opcion" value="Modificar" size=10></td>
	 	                      <td><input type="submit" name="opcion" value="Listar" size=10></td>
	                       </tr>
	                  </table>
                   </center>
	            </form>
            </section>

	<footer><p align="middle"> DAI Prueba 2</p></footer>
</body>
</html>