<?php
class procesarPelicula{
    function cargar($peli){
    $titulo=$peli['titulo'];
    $genero=$peli['genero'];
    $anio=$peli['anio'];
    $duracion=$peli['duracion'];

    // Validación y almacenamiento de la imagen
    $imagen = $_FILES['imagen'];
    $directorioDestino = 'uploads/';
    $nombreArchivo = basename($imagen['name']);
    $rutaArchivo = $directorioDestino . $nombreArchivo;
    $tipoArchivo = strtolower(pathinfo($rutaArchivo, PATHINFO_EXTENSION));
    $error = '';

    // Crear el directorio si no existe
    if (!file_exists($directorioDestino)) {
        mkdir($directorioDestino, 0777, true);
    }

    // Validar el tipo de archivo
    $tiposPermitidos = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($tipoArchivo, $tiposPermitidos)) {
        $error = "Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).";
    }

    // Verificar si hubo un error en la carga
    if ($imagen['error'] != 0) {
        $error = "Error en la carga del archivo.";
    }

    // Guardar la imagen si no hay errores
    $mensaje= $error;
    if ($error === '') {
        if (move_uploaded_file($imagen['tmp_name'], $rutaArchivo)) {
            $mensaje= "<h2>Película cargada correctamente</h2>";
            $mensaje.= "<p><strong>Título:</strong> $titulo</p>";
            $mensaje.= "<p><strong>Género:</strong> $genero</p>";
            $mensaje.= "<p><strong>Año:</strong> $anio</p>";
            $mensaje.= "<p><strong>Duración:</strong> $duracion minutos</p>";
            $mensaje.= "<p><strong>Imagen:</strong></p>";
            $mensaje.= "<img src='$rutaArchivo' alt='Imagen de la película' style='max-width:300px;'>";
        } 

    }
return $mensaje;
}
    }

?>
