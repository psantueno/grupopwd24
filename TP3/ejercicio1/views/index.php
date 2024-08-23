<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h1 class="text-center">Subir Archivo</h1>

    <form id="uploadForm" action="./action/action.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <input class="form-control" type="file" id="fileInput" name="archivo" accept=".pdf, .doc" required>
            <div class="form-text helper" id="basic-addon4"><span class="asterisco-rojo">*</span> Tipo de archivos
                admitidos: .doc o .pdf. Peso máximo: 2MB</div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Subir Archivo</button>
        </div>
        <div class="invalid-feedback mt-3" id="fileError"></div>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- <script src="assets/javascript/validacionesEj1.js"></script> -->
</body>

</html>