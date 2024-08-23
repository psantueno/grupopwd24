<?php
class formulario{
 
 function validarForm($horas){
    $totalHoras="incorrecto";
$horas = [
    'lunes' => isset($_GET['lunes']) ? intval($_GET['lunes']) : 0,
    'martes' => isset($_GET['martes']) ? intval($_GET['martes']) : 0,
    'miercoles' => isset($_GET['miercoles']) ? intval($_GET['miercoles']) : 0,
    'jueves' => isset($_GET['jueves']) ? intval($_GET['jueves']) : 0,
    'viernes' => isset($_GET['viernes']) ? intval($_GET['viernes']) : 0,
    'sabado' => isset($_GET['sabado']) ? intval($_GET['sabado']) : 0,
    'domingo' => isset($_GET['domingo']) ? intval($_GET['domingo']) : 0
];

$totalHoras = array_sum($horas);
 
return $totalHoras;
 }
 function porDias($horas) {
    $mensajito = ""; 

    if (!empty($horas) && is_array($horas)) {
        foreach ($horas as $dia => $hora) {
            $mensajito .= "\n| ". ucfirst($dia) . " : " . htmlspecialchars($hora) . " horas"." \n";
        }
    }
    return $mensajito;
 }
 
}


?>

