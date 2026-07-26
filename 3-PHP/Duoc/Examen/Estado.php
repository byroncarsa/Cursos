<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
  <html lang="es">
     <html xmlns="http://www.w3.org/1999/xhtml">
     <head runat="server">
   
    	  <title>Estado | CD</title>
		 
		  <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
		 
		  <link rel="stylesheet" href="css/Menu.css">
		  <link rel="stylesheet" href="css/PaginaEstado.css">
		  <link rel="stylesheet" type="text/css" href="css/Slider.css">
	
     </head>

     <body background="Imagenes/Fondos.jpg">

          <header>
		    
			 <font color=white><div id="fecha" ALIGN=right>
             <a href="http://localhost/index2.php"><center><IMG src="Imagenes/Logo.png"></center> 
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
		 
			     <form class="contact_form" action="Controladores/ControladorPostular.php" id="contact_form" runat="server" method="POST">
			    <center>
				
					<label for="name">Rut:</label> 
			        <input type="text" name="rut"  placeholder="18976649" pattern="[0-9]{8}"  required/> 
							  
			        <input type="text" name="verificador"  size="1" placeholder="7" pattern="[1-9]{1}"  required/> 
				
			        <button class="submit" type="submit" value="Enviar">Estado Postulacion</button>
			        
			    </center>
				</form>
			    
         </section>
		 <br>

         <footer>
		   <center><IMG src="Imagenes/Logo.png"  width=7% height=7% align=center></center>
		   <center><font color=white>Copyright © 2016. CertificaDev | Cursos en el area de la Informatica, programacion y desarrollo.</font></center><br>
		 </footer>

     </body>

</html>