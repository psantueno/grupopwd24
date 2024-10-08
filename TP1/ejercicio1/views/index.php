<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulario de Número</title>
    <script>
        function validarFormulario() {
            var numero = document.getElementById("numero").value;
            if (isNaN(numero) || numero === "") {
                alert("Por favor, ingrese un número válido.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Ingrese un número</h1>
    <form id="numero" name="numero"  method="get" action="action/action.php">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" required>
        <br><br>
        <input  type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
