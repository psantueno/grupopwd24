<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosTp1Ej4.css">
    <script src="./assets/javascript/validarEj4.js"></script>
    <title>Home</title>
</head>
<body>
    <form action="action/mostrar.php" method="post">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="nombre" id="nombreError" class="labelError">Debe ingresar solo letras. No puede haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="nombre" id="apellidoError" class="labelError">Debe ingresar solo letras. No puede haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" min="1" required>
        </div>
        <div class="campo">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" required>
            <label for="nombre" id="direccionError" class="labelError">Debe ingresar solo letras o numeros. No puede haber espacios o puntos consecutivos</label>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>