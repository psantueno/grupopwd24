<?php
    include_once '../../controller/Persona.php';
    include_once '../../../utilities/funciones.php';

    //Obtengo los datos enviados en el formulario, sea por el metodo get o por el metodo post
    $datos=submittedData();

    $unaPersona=new Persona();

    //Obtengo el mensaje de saludo
    $saludo=$unaPersona->obtenerSaludo($datos);

    //Verifico si es mayor de edad o no
    $esMayor=$unaPersona->esMayorEdad($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilosTp1Ej4.css">
    <title>Mostrar</title>
</head>
<body>
    <div class="contenido">
        <h1>Informacion recibida</h1>
        <?php
            echo "<p>$saludo</p>";
            if($esMayor){
                echo "<p>Soy mayor de edad</p>";
            }else{
                echo "<p>Soy menor de edad</p>";
            }
        ?>
    </div>
</body>
</html>