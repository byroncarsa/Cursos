<?php
  	
      if(isset($_POST['opcion']))
      {
        
		$fecha= $_POST["fecha"];
        $dias= $_POST["dias"];
		$tipoSitio= $_POST["tipoSitio"];
        $nSitio= $_POST["nSitio"];
		$nEsta= $_POST["nEsta"];
        
		
        $opcion=$_POST['opcion'];

         $hostname='localhost';
         $database='academ';
         $username='root';
         $password='';

            if ($opcion=="Reservar") {
                
               try {
                $con = new PDO('mysql:host='.$hostname.';dbname='.$database,  $username, $password);
                print "Conexión exitosa!";        
              $sql="INSERT INTO reserva(re_lo_id, re_id, re_fecha, re_dias,re_tipo_sitio,re_n_sitio,re_n_estacionamiento,re_estado)  VALUES( 0, 0,:fecha,:dias,:tipoSitio,:nSitio,:nEsta,0)";
              $stmt=$con->prepare($sql);
              $stmt->bindParam(':fecha',$usuario);
              $stmt->bindParam(':dias',$clave);
			   $stmt->bindParam(':tipoSitio',$rut);
              $stmt->bindParam(':nSitio',$nombre);
			  $stmt->bindParam(':nEsta',$paterno);
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


