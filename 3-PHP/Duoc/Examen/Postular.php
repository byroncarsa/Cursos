<?php
include 'conexion.php';
?>
<!DOCTYPE html>
  <html lang="es">

     <head>
   
    	  <title>Postular | CRM</title>
		  
		  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		 
		  <link rel="stylesheet" href="css/Menu.css">
		  <link rel="stylesheet" href="css/Postular.css">
		  <link rel="stylesheet" href="css/Postular2.css">
		  <link rel="stylesheet" type="text/css" href="css/Slider.css">
		  
		  
     </head>

     <body background="Imagenes/Fondos.jpg">

         <header>
		     
             <a href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Home.html"><center><IMG src="Imagenes/Logo.png"></center> 
			 <center><h1><font color=white>-CertificaDev-</font></h1></center>
			
         </header>

          <nav>
		     <div id="menu">
		          <div class="barraMenu">
				      <a class="botonMenu" href="http://localhost/index2.php">HOME</a>
			          <a class="botonMenu" href="http://localhost/Nosotros.php">NOSOTROS</a>
				      <a class="botonMenu" href="http://localhost/Servicios.php">SERVICIOS</a>
				      <a class="botonMenu" href="http://localhost/Postular.php">POSTULAR</a>
					  <a class="botonMenu" href="http://localhost/Estado.php">ESTADO</a>
			      </div>
		     </div>
		 </nav>
		 <br>
         
         <section>
			
			<center><h1>Postulacion</h1></center>
			   <form class="contact_form" action="Controladores/ControladorPostular.php" id="contact_form" runat="server" method="POST"> 
			  
			      
				       <fieldset style= "padding: 20px 50px 20px 50px;  margin-left: 120px; margin-right: 120px">
			       
					  
					      <legend>Formulario de Postulacion</legend>
						  
						   <div style="width:50%; float:left;">
						   
						      
							  
							  
							  
			                  <label for="name">Rut:</label> 
			                  <input type="text" name="rut"  placeholder="18976649" pattern="[0-9]{8}"  required/> 
							  
							  <input type="text" name="verificador"  size="1" placeholder="2" pattern="[1-9]{1}"  required/> 
			              
						      <br>
							  <br>
							  
			                  <label for="name">Nombre:</label> 
			                  <input type="text" name="nombre" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ']{3,25})" required />
							  
							  <br>
							  <br>
							  
			                  <label for="name">Apellido Paterno:</label> 
			                  <input type="text" name="paterno" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ']{3,25})" required /> 
							  
							  <br>
							  <br>
							  
			                  <label for="name">Apellido Materno:</label> 
			                  <input type="text" name="materno" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ']{3,25})" required /> 
							  
							  <br>
							  <br>
							  
			                  <label for="name">Fecha Nacimiento:</label> 
			                  <input type="date" name="fecha_nacimiento" required /> 

							  <br>
							  <br>
							  
							  
			                  <label for="name">Sexo:</label> 
			                  <input type="radio" name="sexo" value="Masculino" required /> 
							  M
							  <input type="radio" name="sexo" value="Femenino" required /> 
							  F
							  
							  
                              <br>
							  <br>
							  
			                  <label for="name">Telefono:</label> 
			                  <input type="text" name="telefono" placeholder="951163608" pattern="[0-9]{9}" required /> 
							  
							  <br>
							  <br>
							  
			                  <label for="email">Email:</label> 
			                  <input type="email" name="email" placeholder="tucorreo@dominio.com" required /> 
							   
						 </div>  
							   
					     <div style="width:50%; float:left;">
						      <label for="name">Direccion:</label> 
			                  <input type="text" name="direccion" pattern="([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ']{3,25})" required /> 

							  <br>
							  <br>
							  
							  
							  <?php

                                  $con=conexion();
                                  $res=mysql_query("select * from comuna",$con);

                                ?>
						      <label for="name">Comuna:</label> 
                              <select name="comuna" id="cont" onchange="myFunction(this.value)">

                                   <option value="">Seleccione</option>

                                   <?php

                                     while($fila=mysql_fetch_array($res)){

                                    ?>

                                    <option value="<?php echo $fila['COM_ID']; ?>"><?php echo $fila['COM_NOM']; ?></option>

                                   <?php } ?>

                             </select>
							
							  <br>
							  <br>
			
                               
								 <?php

                                  $con=conexion();
                                  $res=mysql_query("select * from educacion",$con);

                                ?>
			                  <label for="name">Educacion:</label>
				                <select name="educacion" id="cont" onchange="myFunction(this.value)">

                                   <option value="">Seleccione</option>

                                   <?php

                                     while($fila=mysql_fetch_array($res)){

                                    ?>

                                    <option value="<?php echo $fila['ID_EDUCACION']; ?>"><?php echo $fila['EDUCACION']; ?></option>

                                   <?php } ?>

                             </select>
							 
		
							  
							  <br>
							  <br>
							  
							  
							  <input type="checkbox" name="experiencia" value="SI">
						      <label for="name">Experiencia laboral en el area de programacion</label> 
			                 
 
                              <br>
							  <br>
							  
							  
						      <label for="name">Ingrese cantidad de años:</label> 
			                  <input type="number" name="anos" size="2" min="0" max="100" value='0' required />
							 
							  
							  <br>
							  <br>
							  
							   <fieldset>
						      <legend>Modalidad y Curso al que Postula</legend>
							  <br>
							  
							  
							   <?php

                                  $con=conexion();
                                  $res=mysql_query("select * from modalidad",$con);

                                ?>
							  <label for="name">Modalidad:</label>
				                 <select name="modalidad" id="cont" onchange="myFunction(this.value)">

                                   <option value="">Seleccione</option>

                                   <?php

                                     while($fila=mysql_fetch_array($res)){

                                    ?>

                                    <option value="<?php echo $fila['ID_MODALIDAD']; ?>"><?php echo $fila['MODALIDAD']; ?></option>

                                   <?php } ?>

                             </select>
							 
                              
							  <br>
							  <br>
							  
							  
							   <?php

                                  $con=conexion();
                                  $res=mysql_query("select * from curso",$con);

                                ?>
			                     <label for="name">Curso:</label>
				                 <select name="curso" id="cont" onchange="myFunction(this.value)">

                                   <option value="">Seleccione</option>

                                   <?php

                                     while($fila=mysql_fetch_array($res)){

                                    ?>

                                    <option value="<?php echo $fila['ID_CURSO']; ?>"><?php echo $fila['CURSO']; ?></option>

                                   <?php } ?>

                             </select>
							 
			                   </fieldset>
							   <br>
						  </div>
						   <br>
						   <br>
			               <center><input type="submit" name="opcion" value="Enviar" ></center>
			               
						  
			           
					  </fieldset>
			     
				  
			   </form>
         </section>
		 <br>

         <footer>
		   <center><IMG src="Imagenes/Logo.png"  width=7% height=7% align=center></center>
		   <center><font color=white>Copyright © 2016. CertificaDev | Cursos en el area de la Informatica, programacion y desarrollo.</font></center><br>
		 </footer>

     </body>

</html>