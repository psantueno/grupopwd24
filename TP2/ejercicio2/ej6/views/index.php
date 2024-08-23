<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilosTp1Ej6.css">
    <title>Home</title>
</head>
<body>
    <h1>Complete el formulario</h1>
    <form action="action/action.php" method="post" id="formulario">
        <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
            <label for="nombre" id="nombreError" class="labelError">Debe ingresar solo letras. No debe haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
            <label for="nombre" id="apellidoError" class="labelError">Debe ingresar solo letras. No debe haber espacios consecutivos</label>
        </div>
        <div class="campo">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>
        <div class="campo">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion">
            <label for="nombre" id="direccionError" class="labelError">>Debe ingresar solo letras o numeros. No puede haber espacios o puntos consecutivos</label>
        </div>
        <div class="campo">
            <label for="genero">Genero</label>
            <input type="text" name="genero" id="genero">
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="./assets/javascript/validarEj6.js"></script>
</body>
</html>