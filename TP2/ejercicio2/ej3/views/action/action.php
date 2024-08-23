<?php
include_once "../../controller/procesar.php";
include_once "../../../utilities/funciones.php";

$datos=submittedData();
$obj =new Procesar();
$mensaje= $obj->validarDatos($datos);
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>

<h1><?php echo " $mensaje"; ?> </h1>
<br><a href="../../index.html">Volver al formulario</a>
</body>
</html>