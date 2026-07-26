<?php
include 'conexion.php';
?>
<!DOCTYPE html>
  <html lang="es">

     <head>
   
    	  <title>Registrese | CRM</title>
		  
		  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		 
		  <link rel="stylesheet" href="css/Menu.css">
		  <link rel="stylesheet" href="css/PaginaRegistrese.css">
		  <link rel="stylesheet" href="css/PaginaRegistrese2.css">
		  <link rel="stylesheet" type="text/css" href="css/Estilos.css">
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

     <body background="fotos/fondo.jpg">

         <header>
		     
             <a href="http://localhost/index2.php"><center><IMG src="fotos/1.png"></center> 
			 <center><h1><font color=white>-Camping Rio Maule-</font></h1></center>
			
         </header>

         <nav>
		     <div id="menu">
		          <div class="barraMenu">
				      <a class="botonMenu" href="http://localhost/index2.php">HOME</a>
			          <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Nosotros.html">NOSOTROS</a>
				      <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Servicios.html">SERVICIOS</a>
					  <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Tarifas.html">TARIFAS</a>
				      <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Reglamento.html">REGLAMENTO</a>
					  <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Contactenos.html">CONTACTENOS</a>
					  <a class="botonMenu" href="file:///C:/Users/BYRON/Desktop/Unidad%203/Prueba/Registrese.html">RESERVA</a>
			      </div>
		     </div>
		 </nav>
		 <br>
         
         <section>
			
			   <form class="contact_form" action="Controlador.php" id="contact_form" runat="server" method="POST"> 
			      <div> 
			          <center><ul> 
			              <li> 
			                  <h2>Haga su Reserva</h2> 
			                  <span class="required_notification">* Datos requeridos</span> 
			              </li>
                          <li> 
			                  <label for="name">Usuario:</label> 
			                  <input type="text" name="usuario" placeholder="maria21" pattern="^([a-z]+[0-9]{0,2}){5,12}$" required /> 
							  <span class="form_hint">Formato correcto: "maria25" o "mariatere"</span> 
			              </li>				  
						    <li> 
			                  <label for="name">Id:</label> 
			                  <input type="text" name="id" placeholder="193" pattern="[0-9]{500}" required /> 
							  <span class="form_hint">Formato correcto: "193"</span> 
			              </li>
						  <li> 
			                  <label for="name">Fecha:</label> 
			                  <td><input type="date" name="fecha1" size=20 required=""></td>
			              </li>
						   <li> 
			                  <label for="name">Dias:</label> 
			                  <input type="text" name="dias" placeholder="3" pattern="[0-9]{3}" required /> 
							  <span class="form_hint">Formato correcto: "3"</span> 
			              </li>
						   <li> 
			                  <label for="name">Personas:</label> 
			                  <input type="text" name="personas" placeholder="6" pattern="[0-9]{1}" required /> 
							  <span class="form_hint">Formato correcto: "6"</span> 
			              </li>
						    <li> 
			                  <label for="name">Total:</label> 
			                  <input type="text" name="total" placeholder="30000" pattern="[0-9]{9}" required /> 
							  <span class="form_hint">Formato correcto: "30000"</span> 
			              </li>
						    <li> 
			                  <label for="name">Estado:</label> 
			                  <input type="text" name="estado" placeholder="1" pattern="[0-2]{1}" required /> 
							  <span class="form_hint">Formato correcto: "1 o 2"</span> 
			              </li>
						  
						  
					
						  <?php
                              $con=conexion();
                              $res=mysql_query("select * from tipo_sitio",$con);
                           ?>
		
		                   <li> 
			                  <label for="name">Tipo Sitio:</label> 
			                   <select name="region1" id="reg" onchange="myFunction(this.value)" required="">
							   <option value="">Seleccione</option>
			               </li>
						  

                         <?php
                              while($fila=mysql_fetch_array($res)){
                           ?>

                          <option value="<?php echo $fila['tipo_id']; ?>"><?php echo $fila['tipo_nombre']; ?></option>

                           <?php } ?>

                          </select>
						  
						   	<li>
			                    <label for="name">Sitio:</label> 
			                    <div id="myDiv"></div><!--div donde aparecen los paises-->
		                    </li>
						  
						 
						   
						
						 
						  
						   </li>
			              <li> <input type="submit" name="opcion" value="Reservar" >
			              </li> 
			          </ul> </center>
			      </div> 
			   </form>
         </section>
		 <br>

         <footer>
		   <center><IMG src="fotos/1.png"  width=7% height=7% align=center></center>
		   <center><font color=white>Copyright © 2016. Camping Rio Maule | Lugar privilegiado, ubicado en la rivera del río Maule.Rodeado por bosques y a solo 15 minutos del centro de la ciudad.</font></center><br>
		 </footer>

     </body>

</html>