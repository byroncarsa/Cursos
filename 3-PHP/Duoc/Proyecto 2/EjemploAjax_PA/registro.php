<?php
$rut="rut";
$nombre="nombre";
 $apellido="apellido";
//Configuracion de la conexion a base de datos
  $database="EMPRESA_XX";
  $hostname = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $bd_base = "ajax"; 
  
    $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
 
//variables POST
  $rut=$_POST['rut'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
 
//registra los datos del empleados


				$sql="INSERT INTO EMPLEADOS(rut,nombre, apellido) VALUES(:rut,:nombre,:apellido)";
              
			    $stmt=$con->prepare($sql);
				
                $stmt->bindParam(':rut',$rut);
                $stmt->bindParam(':nombre',$nombre);
				$stmt->bindParam(':apellido',$apellido);
				
				$stmt->execute();




 
include('consulta.php');
?> 