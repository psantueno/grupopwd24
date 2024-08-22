<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="text-center">Calculadora Simple</h1>

    <form class="form-floating" action="action/procesar.php" method="post">

        <div class="form-floating mb-3">
            <input class="form-control" type="number" id="numero1" name="numero1" placeholder="Ingrese el primer número" aria-label="default input example" required">
            <label for="floatingInput">Número 1</label>
            <div class="invalid-feedback">
                Por favor, ingrese un número válido.
            </div>
        </div>


        <div class="form-floating mb-3">
            <input class="form-control" type="number" placeholder="Ingrese el segundo número" id="numero2" name="numero2" aria-label="default input example" required>
            <label for="floatingPassword">Número 2</label>
            <div class="invalid-feedback">
                Por favor, ingrese un número válido.
            </div>
        </div>


        <div class="form-floating mb-4">
            <select class="form-select" id="operacion" name="operacion" aria-label="Floating label select example">
                <option value="" selected disabled>- Seleccionar -</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
            <label for="floatingSelect">Tipo de operación:</label>
            <div class="invalid-feedback">
                Por favor, seleccione una operación.
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="javascript/validacionesEj7.js"></script>

</body>

</html>