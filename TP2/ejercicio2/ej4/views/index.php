<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosTp1Ej4.css">
    <title>Home</title>
</head>
<body>
    <form action="action/action.php" method="post" id="formulario">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="nombre" id="nombreError" class="labelError">Debe ingresar solo letras. No puede haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
            <label for="nombre" id="apellidoError" class="labelError">Debe ingresar solo letras. No puede haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>
        <div class="campo">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion">
            <label for="nombre" id="direccionError" class="labelError">Debe ingresar solo letras o numeros. No puede haber espacios o puntos consecutivos</label>
        </div>
        <input type="submit" value="Enviar">
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="./assets/javascript/validarEj4.js"></script>
</body>
</html>