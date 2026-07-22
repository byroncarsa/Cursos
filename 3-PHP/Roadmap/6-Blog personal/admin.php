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
    <title>Admin</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">

        <div class="titulo">
            <h1>Personal blog</h1>
            <div class="sesion">
                <a href="new.php"><span>+</span>Add</a>
                <a href="index.php">Logout</a>
            </div>
        </div>

         <div class="articulos">
            <?php foreach($articulos as $articulo): ?>
                <div class="articulo" id="<?php $articulo['id'] ?>">
                    <p><?php echo $articulo['titulo']; ?></p>

                    <div class="botones">
                        <a href="update.php?id=<?php echo $articulo['id']; ?>" class="c-gray">Edit</a>
                        <a href="update.php" class="c-gray">Delete</a>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

</body>
</html>