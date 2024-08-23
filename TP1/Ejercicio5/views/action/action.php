<?php
    include_once '../../controller/Persona.php';
    include_once '../../../utilities/funciones.php';

    $datos=submittedData();

    $unaPersona=new Persona();

    $saludo=$unaPersona->obtenerSaludo($datos);

    $esMayor=$unaPersona->esMayorEdad($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/estilosTp1Ej5.css">
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