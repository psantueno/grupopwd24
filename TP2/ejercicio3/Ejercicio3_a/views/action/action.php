<?php
    include_once '../../controllers/Login.php';
    include_once '../../../../utilities/funciones.php';

    $datos=submittedData();

    $unLogin=new Login();

    $mensaje=$unLogin->verificarLogin($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-dark">
    <div class="bg-white bg-white pt-4 pb-4 px-5 rounded-2 d-flex flex-column justify-content-center align-items-center">
        <h1 class="fs-2">Informacion Recibida</h1>
        <?php
            echo "<p class=\"mt-3 fs-5\">$mensaje</p>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>