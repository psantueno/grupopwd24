<?php

include_once "../../control/procesarPelicula.php";
include_once "../../util/funciones.php";

$datos=submittedData();
        $obj =new procesarPelicula();
       $mensaje= $obj->cargar($datos);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <h1 class="card-title">La película introducida es</h1>
                    <p class="card-text"><?php echo " " . $mensaje; ?></p>
                    <a href="../../formulario.html" class="btn btn-light">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

   
</body>
</html>
  

