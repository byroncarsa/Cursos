

<!DOCTYPE html>
  <html lang="es">

     <head>
   
    	  <title>Reserva | CRM</title>
		  
		  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		 
		  <link rel="stylesheet" href="css2/Menu.css">
		  <link rel="stylesheet" href="css2/PaginaRegistrese.css">
		  <link rel="stylesheet" href="css2/PaginaRegistrese2.css">
		  <link rel="stylesheet" type="text/css" href="css2/Estilos.css">
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
		    
			 <font color=white><div id="fecha" ALIGN=right>
             <a href="http://localhost/index2.php"><center><IMG src="fotos/1.png"></center> 
			 <center><h1><font color=white>-Camping Rio Maule-</font></h1></center>
			
         </header>

         <nav>
		     <div id="menu">
		          <div class="barraMenu">
				      <a class="botonMenu" href="http://localhost/index2.php">HOME</a>
			          <a class="botonMenu" href="http://localhost/Nosotros.php">NOSOTROS</a>
				      <a class="botonMenu" href="http://localhost/Servicios.php">SERVICIOS</a>
					  <a class="botonMenu" href="http://localhost/Tarifas.php">TARIFAS</a>
				      <a class="botonMenu" href="http://localhost/Reglamento.php">REGLAMENTO</a>
					  <a class="botonMenu" href="http://localhost/Contactenos.php">CONTACTENOS</a>
				      <a class="botonMenu" href="http://localhost/Reserva.php">RESERVA</a>
			      </div>
		     </div>
		 </nav>
		 <br>
         
         <section>
			
			   <form class="contact_form" action="ControladorReserva.php" id="contact_form" runat="server" method="POST"> 
			      <div> 
			          <center><ul> 
			              <li> 
			                  <h2>Haga su Reserva</h2> 
			                  <span class="required_notification">* Datos requeridos</span> 
			              </li>
						  <li> 
			                  <label for="name">Fecha:</label> 
			                  <td><input type="date" name="fecha" size=20 required=""></td>
			              </li>
						   <li> 
			                  <label for="name">Dias:</label> 
			                  <input type="text" name="dias" placeholder="3" pattern="[0-9]{1}" required /> 
							  <span class="form_hint">Formato correcto: "3"</span> 
			              </li>
						  <li>
						       <label for="name">Tipo Sitio:</label> 
				               <SELECT NAME="tipoSitio" SIZE=1 required=""> 
				                   <OPTION VALUE="SinEstacionamiento">Sin Estacionamiento</OPTION>
				                   <OPTION VALUE="ConEstacionamiento">Con Estacionamiento</OPTION>
				                </SELECT> 
		                   </li>
						   
						     <li> 
			                  <label for="name">N° Sitios:</label> 
			                  <input type="text" name="nSitio" placeholder="3" pattern="[0-9]{1}" required /> 
							  <span class="form_hint">Formato correcto: "3"</span> 
			              </li>
						  
						      <li> 
			                  <label for="name">N° Estacionamiento:</label> 
			                  <input type="text" name="nEsta" placeholder="3" pattern="[0-9]{1}" required /> 
							  <span class="form_hint">Formato correcto: "3"</span> 
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