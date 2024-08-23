<?php
class formulario{
    function validarPelicula($pelicula){
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = htmlspecialchars($_POST['titulo']);
    $actores = htmlspecialchars($_POST['actores']);
    $director = htmlspecialchars($_POST['director']);
    $guion = htmlspecialchars($_POST['guion']);
    $produccion = htmlspecialchars($_POST['produccion']);
    $anio = htmlspecialchars($_POST['anio']);
    $nacionalidad = htmlspecialchars($_POST['nacionalidad']);
    $genero = htmlspecialchars($_POST['genero']);
    $duracion = htmlspecialchars($_POST['duracion']);
    $restriccion = htmlspecialchars($_POST['restriccion']);
    $sinopsis = htmlspecialchars($_POST['sinopsis']);

    $cargada=" <h3>película:</h3>";
    $cargada.= " <p><strong>Título:</strong> $titulo</p>";
     $cargada.= " <p><strong>Actores:</strong> $actores</p>";
     $cargada.= " <p><strong>Director:</strong> $director</p>";
     $cargada.= " <p><strong>Guión:</strong> $guion</p>";
     $cargada.= " <p><strong>Producción:</strong> $produccion</p>";
     $cargada.= " <p><strong>Año:</strong> $anio</p>";
     $cargada.= " <p><strong>Nacionalidad:</strong> $nacionalidad</p>";
     $cargada.= " <p><strong>Género:</strong> $genero</p>";
     $cargada.= " <p><strong>Duración:</strong> $duracion minutos</p>";
     $cargada.= " <p><strong>Restricciones de edad:</strong> $restriccion</p>";
     $cargada.= " <p><strong>Sinopsis:</strong> $sinopsis</p>";
}
return $cargada;
    }
}
?>
