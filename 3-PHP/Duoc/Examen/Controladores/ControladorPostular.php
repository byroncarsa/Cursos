<?php
  	
      if(isset($_POST['opcion']))
      {
		$rut= $_POST["rut"];
		$verificador= $_POST["verificador"];
        $nombre= $_POST["nombre"];
		$paterno= $_POST["paterno"];
        $materno= $_POST["materno"];
		$fecha_nacimiento= $_POST["fecha_nacimiento"];
		$sexo= $_POST["sexo"];
		$telefono= $_POST["telefono"];
		$email= $_POST["email"];
		$direccion= $_POST["direccion"];
		$comuna= $_POST["comuna"];
        $educacion= $_POST["educacion"];
        $experiencia= $_POST["experiencia"];
        $anos= $_POST["anos"];
		$modalidad= $_POST["modalidad"];
        $curso= $_POST["curso"];

		
        $opcion=$_POST['opcion'];

         $hostname='localhost';
         $database='certificadev';
         $username='root';
         $password='';

            if ($opcion=="Enviar") {
                
               try {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$database,  $username, $password);
                print "Conexión exitosa!";        
              $sql="INSERT INTO postulacion 
			  VALUES(0, :rut, :verificador, :nombre, :paterno, :materno, :fecha_nacimiento, :sexo, :telefono, :email, :direccion, :comuna, :educacion, :experiencia, :anos, :modalidad, :curso,1)";
              $stmt=$con->prepare($sql);
			  $stmt->bindParam(':rut',$rut);
			  $stmt->bindParam(':verificador',$verificador);
              $stmt->bindParam(':nombre',$nombre);
			  $stmt->bindParam(':paterno',$paterno);
              $stmt->bindParam(':materno',$materno);
			  $stmt->bindParam(':fecha_nacimiento',$fecha_nacimiento);
			  $stmt->bindParam(':sexo',$sexo);
              $stmt->bindParam(':telefono',$telefono);
			  $stmt->bindParam(':email',$email);
              $stmt->bindParam(':direccion',$direccion);  
			  $stmt->bindParam(':comuna',$comuna);
              $stmt->bindParam(':educacion',$educacion);
			  $stmt->bindParam(':experiencia',$experiencia);
			  $stmt->bindParam(':anos',$anos);
              $stmt->bindParam(':modalidad',$modalidad);
			  $stmt->bindParam(':curso',$curso);
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


