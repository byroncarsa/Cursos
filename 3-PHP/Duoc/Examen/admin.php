<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	
	
	
	<title>Home | CD</title>
		  
		   <meta http-equiv="content-Type" content="text/html; charset=utf-8" />

           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="description" content="">
           <meta name="author" content="Joseph Godoy">
		   
		    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		  <link rel="stylesheet" href="css/Menu2.css">
		  <link rel="stylesheet" href="css/PaginaHome.css">
		  <link rel="stylesheet" type="text/css" href="css/Slider.css">
  </head>
<body data-offset="40" background="imagenes/fondotot.jpg" style="background-attachment: fixed">


<div class="container">
<header class="header">
 <font color=white><div id="fecha" ALIGN=right>
             <a href="http://localhost/index2.php"><center><IMG src="Imagenes/Logo.png"></center> 
			 <center><h1><font color=white>-CertificaDev (ADMINISTRADOR)-</font></h1></center>
<div class="row">
	<?php
	include("include/menu.php");
	?>
</div>

<nav>
		     <div id="menu">
		          <div class="barraMenu">
				      <a class="botonMenu" href="http://localhost/admin.php">POSTULACIONES</a>
					  <a class="botonMenu" href="http://localhost/PostularAdmin.php">POSTULAR</a>
				      <a class="botonMenu" href="http://localhost/BuscarAdmin.php">BUSCAR</a>
			      </div>
		     </div>
		 </nav>
</header>

  <!-- Navbar
    ================================================== -->



<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Postulaciones</h4>
		<div class="row-fluid">
		



			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM postulacion ");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Rut</td>";
						echo "<td>Verificador</td>";
						echo "<td>Nombre</td>";
						echo "<td>Apellido</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM postulacion WHERE id=$id";
						$resborrar=mysql_query($sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer>
		   <center><IMG src="Imagenes/Logo.png"  width=7% height=7% align=center></center>
		   <center><font color=white>Copyright © 2016. CertificaDev | Cursos en el area de la Informatica, programacion y desarrollo.</font></center><br>
		 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>