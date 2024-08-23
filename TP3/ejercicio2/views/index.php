<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/estilosTp3Ej2.css">
    <title>Index</title>
</head>
<body class="indigo lighten-4">
    <div class="container grey darken-2">
        <div class="row titulo">
            <h1>Ingrese un archivo(.txt)</h1>
        </div>
        <form action="action/action.php" method="post" enctype="multipart/form-data">
            <div class="file-field input-field row titulo">
                <div class="btn-small blue col m2 offset-m1">
                    <span>Archivo</span>
                    <input name="archivo" id="archivo" type="file" required>
                </div>
                <div class="file-path-wrapper col m8">
                    <input class="file-path" type="text">
                </div>
            </div>
            <div class="row">
                <button class="btn green waves-effect waves-light col m10 offset-m1" type="submit" name="enviar">Enviar
                </button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>