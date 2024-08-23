<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulario de Número</title>
</head>
<body>
    <h1>Ingrese un número</h1>
    <form id="formulario" name="numero"  method="get" action="action/action.php">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero">
        <br><br>
        <input  type="submit" name="submit" value="Enviar">
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="assets/javascript/validarEj1.js"></script>
</body>
</html>
