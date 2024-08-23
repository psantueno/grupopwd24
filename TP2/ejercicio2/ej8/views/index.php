<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Entradas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="text-center">CINEM@S</h1>
    <h2 class="text-left">Calcular entrada</h2>

    <form class="form-floating" action="action/procesar.php" method="post" id="entradaForm">
        <div class="form-floating mb-3">
            <input class="form-control" min="1" type="number" id="edad" name="edad" placeholder="Ingrese su edad" aria-label="default input example">
            <label for="edad">Edad</label>
            <div class="invalid-feedback">
                Por favor, ingrese una edad válida.
            </div>
        </div>

        <div class="form-floating mb-4">
            <select class="form-select" id="estudiante" name="estudiante" aria-label="Seleccionar si es estudiante">
                <option value="" selected disabled>- Seleccionar -</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select>
            <label for="estudiante">¿Es estudiante?</label>
            <div class="invalid-feedback">
                Por favor, seleccione una opción.
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Calcular</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/javascript/validacionesEj8.js"></script>
</body>

</html>