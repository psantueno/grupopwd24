<?php
class Procesar{function validarDatos($info) {
    if (isset($info['nombre'], $info['apellido'], $info['edad'], $info['direccion']) &&
        !empty($info['nombre']) && !empty($info['apellido']) && !empty($info['edad']) && !empty($info['direccion'])) {
        
        
        $nombre = htmlspecialchars($info['nombre']);
        $apellido = htmlspecialchars($info['apellido']);
        $edad = htmlspecialchars($info['edad']);
        $direccion = htmlspecialchars($info['direccion']);
        
        $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
    } else {
        $mensaje = "No se recibió información válida.";
    }

    return $mensaje;
}
}
?>
