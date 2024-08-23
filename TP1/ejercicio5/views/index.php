<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosTp1Ej5.css">
    <script src="javascript/validarEj5.js"></script>
    <title>Home</title>
</head>
<body>
    <h1>Complete el formulario</h1>
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
        <input type="submit" value="Enviar">
    </form>
</body>
</html>