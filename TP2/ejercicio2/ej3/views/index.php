<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulario de Información</title>
</head>

<body>
    <div class="form-container">
        <h1>Formulario de Información</h1>
        <form action="action/action.php" method="post" id="formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad">

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion">
            </br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="assets/javascript/validarEj3.js"></script>
</body>

</html>