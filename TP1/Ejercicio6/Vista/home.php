<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosEj6.css">
    <script src="javascript/validarEj6.js"></script>
    <title>Home</title>
</head>
<body>
    <h1>Complete el formulario</h1>
    <form action="action/mostrar.php" method="get">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div class="campo">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
        </div>
        <div class="campo">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" min="1" required>
        </div>
        <div class="campo">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" required>
        </div>
        <div class="campo">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero" required>
        </div>
        <div class="campo">
            <label for="estudios">Seleccione sus estudios:</label>
            <div class="opciones">
                <div class="opcion">
                    <input type="radio" name="estudios" id="incompleto" value="estudios incompletos" checked>Sin estudios
                </div>
                <div class="opcion">
                    <input type="radio" name="estudios" id="primario" value="estudios primarios">Estudios Primarios
                </div>
                <div class="opcion">
                    <input type="radio" name="estudios" id="secundario" value="estudios secundarios">Estudios Secundarios
                </div>
            </div>
        </div>
        <div class="campo">
            <label for="deportes">¿Que deportes practica?</label>
            <div class="opciones">
                <div class="opcion">
                    <input type="checkbox" name="deportes[]" id="futbol" value="Futbol">Futbol
                </div>
                <div class="opcion">
                    <input type="checkbox" name="deportes[]" id="basquet" value="Basquet">Basquet
                </div>
                <div class="opcion">
                    <input type="checkbox" name="deportes[]" id="voley" value="Voley">Voley
                </div>
                <div class="opcion">
                    <input type="checkbox" name="deportes[]" id="tenis" value="Tenis">Tenis
                </div>
            </div>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>