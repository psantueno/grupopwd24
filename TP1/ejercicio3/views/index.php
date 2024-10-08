<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulario de Información</title>

    <script>
        function validarFormulario() {
            const nombre = document.getElementById("nombre").value.trim();
            const apellido = document.getElementById("apellido").value.trim();
            const edad = document.getElementById("edad").value.trim();
            const direccion = document.getElementById("direccion").value.trim();

            if (!nombre || !apellido || !edad || !direccion) {
                alert("Todos los campos deben ser llenados.");
                return false;
            }

            if (isNaN(edad) || edad <= 0) {
                alert("La edad debe ser un número positivo.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h1>Formulario de Información</h1>
        <form action="action/action.php" method="post" onsubmit="return validarFormulario()">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required min="1">

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
        </br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
