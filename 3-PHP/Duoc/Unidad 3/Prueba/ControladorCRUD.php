<?php
  	
      if(isset($_POST['opcion']))
      {
        $usuario= $_POST["usuario"];
        $clave= $_POST["clave"];
		$rut= $_POST["rut"];
        $nombre= $_POST["nombre"];
		$paterno= $_POST["paterno"];
        $materno= $_POST["materno"];
		$correo= $_POST["correo"];
        $fono= $_POST["fono"];
		
        $opcion=$_POST['opcion'];

         $hostname='localhost';
         $database='pruebatres';
         $username='root';
         $password='';

            if ($opcion=="Agregar") {
                
               try {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$database,  $username, $password);
                print "Conexión exitosa!";        
              $sql="INSERT INTO cliente(usuario, clave,rut,nombre,paterno,materno,correo,fono)  VALUES(:usuario,:clave,:rut,:nombre,:paterno,:materno,:correo,:fono)";
              $stmt=$con->prepare($sql);
              $stmt->bindParam(':usuario',$usuario);
              $stmt->bindParam(':clave',$clave);
			   $stmt->bindParam(':rut',$rut);
              $stmt->bindParam(':nombre',$nombre);
			  $stmt->bindParam(':paterno',$paterno);
              $stmt->bindParam(':materno',$materno);
			  $stmt->bindParam(':correo',$correo);
              $stmt->bindParam(':fono',$fono);
              $stmt->execute();
        
       }
        catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "";
       die();
         }
         $con =null;

            }

            if ($opcion=="Modificar") {
              try {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$database,                                              $username, $password);
                print "Conexión exitosa!";

                $count= $con->exec("UPDATE usuarios SET clave='".$clave."' WHERE usuario='".$usuario."'");
                print ($count." filas afectadas");


                
              } catch (PDOException $e) {
                print "¡Error!: ".$e->getMessage(). "";
                die();
              }
              $con=null;
            }

              if ($opcion=="Eliminar") {
                try {
                  $con = new PDO('mysql:host='.$hostname.';dbname='.$database,                                              $username, $password);
                  print "Conexión exitosa!";

                  $count= $con->exec("DELETE FROM usuarios WHERE usuario='".$usuario."'");
                  print ($count." filas afectadas");


                  
                } catch (PDOException $e) {
                  print "¡Error!: ".$e->getMessage(). "";
                  die();
                }
                $con=null;
              }


              if ($opcion=="Listar") {
                  
                 try {
                  $con = new PDO('mysql:host='.$hostname.';dbname='.$database,                                              $username, $password);
                  print "Conexión exitosa!";
                //PDO
                      $query = "SELECT * FROM usuarios";
                      print("<table border=1>");
                      $resultado = $con->query($query); 
                      foreach ( $resultado as $rows) { 
                        print("<tr>");
                        print("<td>".$rows["usuario"]."</td>");
                        print("<td>".$rows["clave"]."</td>");
                        print("</tr>"); 
                      }
                      print("</table>");
                      $resultado =null;
                  }
                  catch (PDOException $e) {
                    print "¡Error!: " . $e->getMessage() . "";
                    die();
                  }
                  $con =null;
              }
          }



      

  ?>


