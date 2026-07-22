<?php

    require 'funciones.php';

    $id = $_GET['id'];
    $id = filter_var($id);

    if(!$id) {
        header('Location: /');
    }

    // 1. Leer el archivo JSON completo
    $jsonString = file_get_contents('articulos.json');
    
    // 2. Convertir el texto JSON a un arreglo asociativo de PHP
    $articulos = json_decode($jsonString, true);

    // 3. Listar todo
    foreach($articulos as $tmp){
        if($tmp['id'] == $id){
            $articulo = $tmp;
            break;
        }
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">
        <div class="titulo">
            <h1>Update Article</h1>
            <a href="admin.php">Back</a>
        </div>

        <form action="" class="formulario">

            <div class="entradas">
                 <input type="text" placeholder="Article Title" name="titulo" value="<?php echo $articulo['titulo']; ?>">
                <input type="text" placeholder="Publishing Date" name="date" value="<?php echo $articulo['fecha']; ?>">
                <textarea name="mensaje" placeholder="Content"><?php echo $articulo['contenido']; ?></textarea>
            </div>

            <input type="submit" value="Update" class="boton">
        </form>



    </main>

</body>
</html>