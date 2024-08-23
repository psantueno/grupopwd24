<?php

define('MAX_FILE_SIZE', 2 * 1024 * 1024); // 2MB


$allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['uploadedFile'])) {
        $file = $_FILES['uploadedFile'];


        if ($file['error'] !== UPLOAD_ERR_OK) {
            echo "<p class='text-danger'>Error en la carga del archivo.</p>";
            exit();
        }


        if ($file['size'] > MAX_FILE_SIZE) {
            echo "<p class='text-danger'>El archivo excede el tamaño máximo permitido de 2MB.</p>";
            exit();
        }

        if (!in_array($file['type'], $allowedTypes)) {
            echo "<p class='text-danger'>Tipo de archivo no permitido. Solo se permiten archivos .doc y .pdf.</p>";
            exit();
        }


        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($file['name']);


        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }


        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "<p class='text-success'>Archivo subido exitosamente. <a href='$uploadFile' target='_blank'>Ver archivo</a></p>";
        } else {
            echo "<p class='text-danger'>Error al mover el archivo al directorio de destino.</p>";
        }
    } else {
        echo "<p class='text-danger'>No se ha seleccionado ningún archivo.</p>";
    }
} else {
    echo "<p class='text-danger'>Método de solicitud no permitido.</p>";
}
