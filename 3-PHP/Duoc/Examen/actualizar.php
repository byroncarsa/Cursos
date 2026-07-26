<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
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
	
	<title>Modificar | CD</title>
		  
		   <meta http-equiv="content-Type" content="text/html; charset=utf-8" />

           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="description" content="">
           <meta name="author" content="Joseph Godoy">
		   
		    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		  <link rel="stylesheet" href="css/Menu2.css">
		  <link rel="stylesheet" href="css/PaginaHome.css">
		  <link rel="stylesheet" type="text/css" href="css/Slider.css">
  </head>
<body data-offset="40" background="Imagenes/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
 <a href="http://localhost/index2.php"><center><IMG src="Imagenes/Logo.png"></center> 
			 <center><h1><font color=white>-CertificaDev (ADMINISTRADOR)-</font></h1></center>
<div class="row">
	<?php
	include("include/menu.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->



<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de postulaciones registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de postulaciones</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM postulacion WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Password usuario<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Pssword administrador<br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
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


