<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../styles.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1 class="text-center">Resultado de la Operación</h1>

    <div class="alert alert-primary" role="alert">

        <?php

        include_once '../../../utilities/funciones.php';


        $datos = submittedData();

        $numero1 = $datos['numero1'] ?? null;
        $numero2 = $datos['numero2'] ?? null;
        $operacion = $datos['operacion'] ?? null;

        if (is_numeric($numero1) && is_numeric($numero2) && $operacion !== null) {
            $error = false;

            switch ($operacion) {
                case 'suma':
                    $resultado = $numero1 + $numero2;
                    $operador = '+';
                    break;
                case 'resta':
                    $resultado = $numero1 - $numero2;
                    $operador = '-';
                    break;
                case 'multiplicacion':
                    $resultado = $numero1 * $numero2;
                    $operador = '*';
                    break;
                case 'division':
                    if ($numero2 != 0) {
                        $resultado = $numero1 / $numero2;
                        $operador = '/';
                    } else {
                        echo "<p class='text-danger'>No se puede dividir por cero.</p>";
                        $error = true;
                    }
                    break;
                default:
                    echo "<p class='text-danger'>Operación no válida.</p>";
                    $error = true;
            }

            if (!$error) {
                echo "<p><strong>Operación seleccionada:</strong> $numero1 $operador $numero2</p>";
                echo "<p><strong>Resultado:</strong> $resultado</p>";
            }
        }

        ?>

    </div>

    <a href="../index.php" class="btn btn-secondary">Volver</a>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>