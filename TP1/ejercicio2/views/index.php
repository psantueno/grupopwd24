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
        <input type="number" id="lunes" name="lunes" required>
        <br><br>
        <label for="martes">Horas de cursada el Martes:</label>
        <input type="number" id="martes" name="martes" required>
        <br><br>
        <label for="miercoles">Horas de cursada el Miércoles:</label>
        <input type="number" id="miercoles" name="miercoles" required>
        <br><br>
        <label for="jueves">Horas de cursada el Jueves:</label>
        <input type="number" id="jueves" name="jueves" required>
        <br><br>
        <label for="viernes">Horas de cursada el Viernes:</label>
        <input type="number" id="viernes" name="viernes" required>
        <br><br>
        <label for="sabado">Horas de cursada el Sábado:</label>
        <input type="number" id="sabado" name="sabado">
        <br><br>
        <label for="domingo">Horas de cursada el Domingo:</label>
        <input type="number" id="domingo" name="domingo">
        <br><br>
        <button type="submit">Enviar horas</button>
    </form>
</body>
</html>
