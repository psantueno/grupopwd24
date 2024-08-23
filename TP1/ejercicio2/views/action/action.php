<?php
include_once "../../controllers/formulario.php";
include_once "../../../utilities/funciones.php";

$datos=submittedData();
$obj =new formulario();
$mensaje= $obj->validarForm($datos);

$mensajito=$obj->porDias($datos);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<h1>Total de Horas de Cursada por Semana</h1>
<p>Horas cursadas por día:</p>
</br>
        <?php echo $mensajito; ?>
        
<h2><?php echo "Total de horas es de : .$mensaje"; ?> </h2>
<a href="../../ejercicio2.html">Volver al formulario</a>
</body>
</html>
