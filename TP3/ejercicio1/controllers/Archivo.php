<?php

class Archivo {
    // Atributos
    private $dir;

    // Constructor
    public function __construct() {
        $this->dir = "../../uploads/";
    }

    // Getters
    public function getDir() {
        return $this->dir;
    }

    // Métodos
    public function validar($archivo) {
        define('MAX_FILE_SIZE', 2 * 1024 * 1024); // 2MB
        $allowedTypes = [
            'application/pdf', 
            'application/msword', 
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];

        $mensaje = "";

        if ($archivo['error'] !== UPLOAD_ERR_OK) {
            $mensaje = "<p class='text-danger'>Error en la carga del archivo.</p>";
        } elseif ($archivo['size'] > MAX_FILE_SIZE) {
            $mensaje = "<p class='text-danger'>El archivo excede el tamaño máximo permitido de 2MB.</p>";
        } elseif (!in_array($archivo['type'], $allowedTypes)) {
            $mensaje = "<p class='text-danger'>Tipo de archivo no permitido. Solo se permiten archivos .doc y .pdf.</p>";
        } else {
            $tmpName = $archivo['tmp_name'];
            $name = $archivo['name'];
            $directorio = $this->getDir();

            if (!is_dir($directorio)) {
                mkdir($directorio, 0755, true);
            }

            if (move_uploaded_file($tmpName, $directorio . $name)) {
                $mensaje = "<p class='text-success'>Archivo subido exitosamente. <a href='{$directorio}{$name}' target='_blank'>Ver archivo</a></p>";
            } else {
                $mensaje = "<p class='text-danger'>Error al mover el archivo al directorio de destino.</p>";
            }
        }

        return $mensaje;
    }
}
