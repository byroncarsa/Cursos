<?php 

    include 'functions.php';

    // Arreglo con mensajes de errores
    $errores = [];
    $simboloInicio ='';
    $simboloFinal ='';
    $resultado = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tem = htmlspecialchars($_POST['tem'], ENT_QUOTES, 'UTF-8');
        $unit1 = $_POST['unit1'];
        $unit2 = $_POST['unit2'];
       

        if(!$tem){
            $errores[] = 'Debe ingresar una temperatura';
        }   

        if(!$unit1){
           $errores[] = 'Debe ingresar una unidad a convertir';
        }  

        if(!$unit2){
            $errores[] = 'Debe ingresar una unidad para convertir';
        }  

        if($unit1 === $unit2){
            $errores[] = 'Debe ingresar unidades distintas';
        } 

        if(empty($errores)) {


            if($unit1 === '1'){
                $simboloInicio = 'ºC';
                switch($unit2){
                    case '2':
                        $resultado = celsiusToFahrenheit($tem);
                        $simboloFinal = 'ºF';
                        break; 
                    case '3':
                        $resultado = celsiusToKelvin($tem);
                        $simboloFinal = 'ºK';
                        break; 
                }
            }

            if($unit1 === '2'){
                $simboloInicio = 'ºF';
                switch($unit2){
                    case '1':
                        $resultado = fahrenheitToCelsius($tem);
                        $simboloFinal = 'ºC';
                        break; 
                    case '3':
                        $resultado = fahrenheitToKelvin($tem);
                        $simboloFinal = 'ºK';
                        break; 
                }
            }

            if($unit1 === '3'){
                $simboloInicio = 'ºK';
                switch($unit2){
                    case '1':
                        $resultado = kelvinToCelsius($tem);
                        $simboloFinal = 'ºC';
                        break; 
                    case '2':
                        $resultado = kelvinToFahrenheit($tem);
                        $simboloFinal = 'ºF';
                        break; 
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unit Converter</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="container">
            <header>
                <h1>Unit Converter</h1>

                <nav>
                    <a href="index.php">Length</a>
                    <a href="weight.php">Weight</a>
                    <a href="temperature.php" class="active">Temperature</a>
                </nav>
            </header>

            <div class="errores">
                <?php foreach($errores as $error): ?>
                    <div class="alerta error">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if(!$resultado): ?>
            <main>
                <form action="index.php" method="POST">
                    <div>
                        <label for="">Enter the length to convert</label>
                        <input type="text" name="tem">
                    </div>
                    <div>
                        <label for="unit1">Unit to convert from</label>
                        <select name="unit1" id="">
                            <option value="">Select</option>
                            <option value="1">Celsius</option>
                            <option value="2">Fahrenheit</option>
                            <option value="3">Kelvin</option>
                        </select>
                    </div>
                    <div>
                        <label for="unit2">Unit to convert to</label>
                        <select name="unit2" id="">
                            <option value="">Select</option>
                            <option value="1">Celsius</option>
                            <option value="2">Fahrenheit</option>
                            <option value="3">Kelvin</option>
                        </select>
                    </div>

                    <input type="submit" value="Convert" class="btn">
                </form>
            </main>
            <?php endif; ?>

            <?php if($resultado): ?>
                <div class="resultado">
                    <p>Result of your calculation</p>
                    <h2><?php echo $tem; echo $simboloInicio;?> = <?php echo $resultado; echo $simboloFinal;?></h2>
                    <a href="index.php" class='btn reset'>Reset</a>
                </div>
            <?php endif; ?>

        </div>
        
    </body>
</html>