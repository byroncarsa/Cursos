<?php 
    // 1. Leer el archivo JSON completo
    $jsonString = file_get_contents('articulos.json');
    
    // 2. Convertir el texto JSON a un arreglo asociativo de PHP
    $articulos = json_decode($jsonString, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">
        <div class="titulo">
            <h1>Personal blog</h1>
            <a href="login.php">Login</a>
        </div>

        <div class="articulos">
            <?php foreach($articulos as $articulo): ?>
                <div class="articulo" id="<?php $articulo['id'] ?>">
                    <a href="articulo.php?id=<?php echo $articulo['id']; ?>">
                        <p><?php echo $articulo['titulo']; ?></p>
                    </a>

                    <p class="c-gray"><?php echo $articulo['fecha']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>
</html>