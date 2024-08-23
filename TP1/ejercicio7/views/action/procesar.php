<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Operación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="text-center">Resultado de la Operación</h1>

    <div class="alert alert-primary" role="alert">

        <?php

        include_once '../../controllers/Calculadora.php';
        include_once '../../../utilities/funciones.php';

        $datos = submittedData();

        $numero1 = $datos['numero1'] ?? null;
        $numero2 = $datos['numero2'] ?? null;
        $operacion = $datos['operacion'] ?? null;

        $unCalculo = new Calculadora();

        $resultado = $unCalculo->calcular($numero1, $numero2, $operacion);

        if (isset($resultado['error'])) {
            echo "<p class='text-danger'>{$resultado['error']}</p>";
        } else {
            $operador = $resultado['operador'];
            $valorResultado = $resultado['resultado'];
            echo "<p><strong>Operación seleccionada:</strong> $numero1 $operador $numero2</p>";
            echo "<p><strong>Resultado:</strong> $valorResultado</p>";
        }

        ?>

    </div>

    <a href="../index.php" class="btn btn-secondary">Volver</a>
</body>

</html>