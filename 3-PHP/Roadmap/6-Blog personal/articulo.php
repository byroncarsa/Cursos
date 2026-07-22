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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">

        <div class="titulo">
            <h1><?php echo $articulo['titulo']; ?></h1>
            <a href="index.php">Back</a>
        </div>
        
        <p class="fecha c-gray"><?php echo $articulo['fecha']; ?></p>

        <p class="contenido"><?php echo $articulo['contenido']; ?></p>
    </main>

</body>
</html>