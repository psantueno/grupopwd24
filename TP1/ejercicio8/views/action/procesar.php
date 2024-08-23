<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Entrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/css/styles.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="text-center">Resultado de la Entrada</h1>

    <div class="alert alert-primary" role="alert">
        <?php

        include_once '../../controllers/EntradaCine.php';
        include_once '../../../utilities/funciones.php';

        $datos = submittedData();

        $edad = $datos['edad'] ?? null;
        $estudiante = $datos['estudiante'] ?? null;


        if (is_numeric($edad) && $edad >= 0 && $estudiante !== null) {
            $esEstudiante = ($estudiante == 'si');
            $entradaCine = new EntradaCine($edad, $estudiante);
            $precio = $entradaCine->calcularPrecio($edad, $esEstudiante);

            echo "<p><strong>Edad:</strong> $edad</p>";
            echo "<p><strong>Estudiante:</strong> " . ($esEstudiante ? 'Sí' : 'No') . "</p>";
            echo "<p><strong>Precio de la entrada:</strong> \$$precio</p>";
        } else {
            echo "<p class='text-danger'>Por favor, complete todos los campos con valores válidos.</p>";
        }
        ?>
    </div>

    <a href="../index.php" class="btn btn-secondary">Volver</a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>