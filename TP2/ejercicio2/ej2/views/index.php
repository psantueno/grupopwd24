<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulario de Horas de Cursada</title>
</head>
<body>
    <h1>Horas de Cursada por Semana</h1>
    <form  method="get" action="action/action.php" id="horasForm">
        <label for="lunes">Horas de cursada el Lunes:</label>
        <input type="number" id="lunes" name="lunes" step="1">
        <br><br>
        <label for="martes">Horas de cursada el Martes:</label>
        <input type="number" id="martes" name="martes" step="1">
        <br><br>
        <label for="miercoles">Horas de cursada el Miércoles:</label>
        <input type="number" id="miercoles" name="miercoles" step="1">
        <br><br>
        <label for="jueves">Horas de cursada el Jueves:</label>
        <input type="number" id="jueves" name="jueves" step="1">
        <br><br>
        <label for="viernes">Horas de cursada el Viernes:</label>
        <input type="number" id="viernes" name="viernes" step="1">
        <br><br>
        <label for="sabado">Horas de cursada el Sábado:</label>
        <input type="number" id="sabado" name="sabado" step="1">
        <br><br>
        <label for="domingo">Horas de cursada el Domingo:</label>
        <input type="number" id="domingo" name="domingo" step="1">
        <br><br>
        <button type="submit">Enviar horas</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="assets/javascript/validarEj2.js"></script>
</body>
</html>
