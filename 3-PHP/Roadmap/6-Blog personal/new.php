<?php 
    require 'funciones.php';

    //Arreglo errores
    $errores = [];

    //Inicializar variables
    $titulo = '';
    $mensaje = '';


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Completar variables 
        $titulo = $_POST['titulo'];
        $mensaje = $_POST['mensaje'];

        if(!$titulo){
            $errores[] = 'Debes añadir un usaurio';
        }

        if(!$mensaje){
            $errores[] = 'Debes añadir una contraseña';
        }

        //Verificar que no haya errores
        if(empty($error)){

            $user = 'admin';
            $pass = '12345';

            if($usuario === $user && $password === $pass){
                header('Location: admin.php');
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main class="container">
        <div class="titulo">
            <h1>New Article</h1>
            <a href="admin.php">Back</a>
        </div>

        <form action="" class="formulario">

            <div class="entradas">
                <input type="text" placeholder="Article Title" name="titulo">
                <input type="text" placeholder="Publishing Date" name="date">
                <textarea name="mensaje" placeholder="Content"></textarea>
            </div>

            <input type="submit" value="Publish" class="boton">
        </form>



    </main>

</body>
</html>