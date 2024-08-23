<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosEj4.css">
    <script src="javascript/validarEj4.js"></script>
    <title>Home</title>
</head>
<body>
    <form action="action/mostrar.php" method="get">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div class="campo">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
        </div>
        <div class="campo">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" min="1" required>
        </div>
        <div class="campo">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>