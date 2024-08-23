<?php
    include_once '../../util/funciones.php';
    include_once '../../Controlador/Archivo.php';

    $datos=submittedData();
    $unArchivo=new Archivo();
    $contenido=$unArchivo->validar($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/estilosTp3Ej2.css">
    <title>Accion</title>
</head>
<body class="indigo lighten-4">
    <div class="container grey darken-2">
        <?php
            if($contenido==""){
                echo "<div class=\"row titulo\">";
                echo "<h1>No se pudo cargar el archivo</h1>";
                echo "</div>";
                echo "<div class=\"row\">";
                echo "<a class=\"waves-effect waves-light btn-small col m2 offset-m5\" href=\"../index.php\">Volver</a>";
                echo "</div>";
            }else{
                echo "<div class=\"row titulo\">";
                echo "<h1>Archivo cargado</h1>";
                echo "<h2>Contenido</h2>";
                echo "</div>";
                echo "<div class=\"input-field row\">";
                echo "<textarea id=\"textarea\" class=\"materialize-textarea text-white col m10 offset-m1\" readonly>$contenido</textarea>";
                echo "</div>";
            }
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>