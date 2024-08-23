<?php
include_once "../../control/vernumero.php";
include_once "./grupopwd24/TP1/utilities/funciones.php";

/*$numero = $_GET['numero'];
$datos=[ "numero" => $numero];*/
$datos=submittedData();
        $obj =new vernumero();
       $mensaje= $obj->devolverSigno($datos);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
    <h1>Número Ingresado</h1>
    <p><?php echo "el numero ingresado es: ". $mensaje; ?></p>
    <a href="../../ejercicio1.html">Volver</a>
   
</body>
</html>