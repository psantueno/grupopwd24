<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">Calculadora Simple</h1>

    <form action="action/action.php" method="post" class="form-floating">
        <div class="form-floating mb-3">
            <input class="form-control" type="number" id="numero1" name="numero1" placeholder="Ingrese el primer número">
            <label for="numero1">Número 1</label>
            <div class="invalid-feedback">Por favor, ingrese un número válido.</div>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" type="number" id="numero2" name="numero2" placeholder="Ingrese el segundo número">
            <label for="numero2">Número 2</label>
            <div class="invalid-feedback">Por favor, ingrese un número válido.</div>
        </div>

        <div class="form-floating mb-4">
            <select class="form-select" id="operacion" name="operacion">
                <option value="" selected disabled>- Seleccionar -</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            <label for="operacion">Tipo de operación:</label>
            <div class="invalid-feedback">Por favor, seleccione una operación.</div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="assets/javascript/validarEj7.js" defer></script>
</body>
</html>
