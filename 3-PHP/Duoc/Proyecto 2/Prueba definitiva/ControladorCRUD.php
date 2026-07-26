<?php
  	
      if(isset($_POST['opcion']))
      {
        $rut= $_POST["rut1"];
        $nombres= $_POST["nombres1"];
		$apellidoPaterno= $_POST["apellidoPaterno1"];
        $apellidoMaterno= $_POST["apellidoMaterno1"];
		$fechaNacimiento= $_POST["fechaNacimiento1"];
        $correoInstitucional= $_POST["correoInstitucional1"];
		$correoPersonal= $_POST["correoPersonal1"];
        $fonoFijo= $_POST["fonoFijo1"];
		$fonoMovil= $_POST["fonoMovil1"];
        $direccion= $_POST["direccion1"];
		$region= $_POST["region1"];
        $provincia= $_POST["provincia1"];
		$comuna= $_POST["comuna1"];
        $fechaContrato= $_POST["fechaContrato1"];
		$tipoContrato= $_POST["tipoContrato1"];
        $nombreFoto= $_POST["nombreFoto"];
		
        $opcion=$_POST['opcion'];

         $hostname='localhost';
         $database='empresa';
         $username='root';
         $password='';
		
		 $ruta="./fotosColaboradores/";//ruta carpeta donde queremos copiar las imágenes 
         $uploadfile_temporal=$_FILES['nombreFoto']['tmp_name']; 
         $uploadfile_nombre=$ruta.$_FILES['nombreFoto']['name']; 

          if (is_uploaded_file($uploadfile_temporal)) 
          { 
              move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
          } 
          else 
          { 
          echo "error"; 
          } 
          $directorio=opendir("fotosColaboradores/"); 
          while($ficheros=readdir($directorio)) 
          { 
              $url="fotosColaboradores/".$ficheros; 
              echo "<imagenes src=".$url.">"; 
          } 
		
		
		
		
            if ($opcion=="Agregar") {
                
               try {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$database,  $username, $password);
                print "Conexión exitosa!";        
              $sql="INSERT INTO colaborador(rut, nombres, apellidoPaterno, apellidoMaterno, fechaNacimiento, correoInstitucional, correoPersonal, fonoFijo, fonoMovil, direccion, reg_id, pro_id, com_id, fechaContrato, tipoContrato, nombreFoto)  
			  VALUES(:rut1,:nombres1,:apellidoPaterno1,:apellidoMaterno1,:fechaNacimiento1,:correoInstitucional1,:correoPersonal1,:fonoFijo1,:fonoMovil1,:direccion1,:region1,:provincia1,:comuna1,:fechaContrato1,:tipoContrato1,:nombreFoto1)";
              $stmt=$con->prepare($sql);
			  $stmt->bindParam(':rut1',$rut);
              $stmt->bindParam(':nombres1',$nombres);
			  $stmt->bindParam(':apellidoPaterno1',$apellidoPaterno);
              $stmt->bindParam(':apellidoMaterno1',$apellidoMaterno);
			  $stmt->bindParam(':fechaNacimiento1',$fechaNacimiento);
              $stmt->bindParam(':correoInstitucional1',$correoInstitucional);
			  $stmt->bindParam(':correoPersonal1',$correoPersonal);
              $stmt->bindParam(':fonoFijo1',$fonoFijo);
			  $stmt->bindParam(':fonoMovil1',$fonoMovil);
              $stmt->bindParam(':direccion1',$direccion);
			  $stmt->bindParam(':region1',$region);
              $stmt->bindParam(':provincia1',$provincia);
			  $stmt->bindParam(':comuna1',$comuna);
              $stmt->bindParam(':fechaContrato1',$fechaContrato);
			  $stmt->bindParam(':tipoContrato1',$tipoContrato);
              $stmt->bindParam(':nombreFoto1',$nombreFoto);
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

                $count= $con->exec("UPDATE colaborador SET nombres='".$nombres."' WHERE rut='".$rut."'");
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

                  $count= $con->exec("DELETE FROM colaborador WHERE rut='".$rut."'");
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
                      $query = "SELECT * FROM colaborador";
                      print("<table border=1>");
                      $resultado = $con->query($query); 
                      foreach ( $resultado as $rows) { 
                        print("<tr>");
						print("<td>".$rows["rut"]."</td>");
                        print("<td>".$rows["nombres"]."</td>");
						print("<td>".$rows["apellidoMaterno"]."</td>");
                        print("<td>".$rows["apellidoPaterno"]."</td>");
						print("<td>".$rows["fechaNacimiento"]."</td>");
                        print("<td>".$rows["correoInstitucional"]."</td>");
						print("<td>".$rows["correoPersonal"]."</td>");
                        print("<td>".$rows["fonoFijo"]."</td>");
						print("<td>".$rows["fonoMovil"]."</td>");
                        print("<td>".$rows["direccion"]."</td>");
						print("<td>".$rows["region"]."</td>");
                        print("<td>".$rows["provincia"]."</td>");
						print("<td>".$rows["comuna"]."</td>");
                        print("<td>".$rows["fechaContrato"]."</td>");
						print("<td>".$rows["tipoContrato"]."</td>");
                        print("<td>".$rows["nombreFoto"]."</td>");
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


