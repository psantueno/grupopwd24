<?php
include_once '../../../utilities/funciones.php';
include_once '../../controllers/Archivo.php';

$datos = submittedData();
$unArchivo = new Archivo();

if (isset($datos['archivo'])) {
    $contenido = $unArchivo->validar($datos['archivo']);
} else {
    $contenido = "<p class='text-danger'>No se ha seleccionado ningún archivo.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Carga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <div class="container mt-5">
        <h1 class="text-center">Resultado de la Carga</h1>
        <div class="mt-4">
            <?php echo $contenido; ?>
        </div>
        <div class="mt-4">
            <a class="btn btn-secondary" href="../index.php">Volver</a>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
