<?php
class formulario{
 
 function validarForm($horas){
    $totalHoras="incorrecto";
$horas = [
    'lunes' => isset($horas['lunes']) ? intval($horas['lunes']) : 0,
    'martes' => isset($horas['martes']) ? intval($horas['martes']) : 0,
    'miercoles' => isset($horas['miercoles']) ? intval($horas['miercoles']) : 0,
    'jueves' => isset($horas['jueves']) ? intval($horas['jueves']) : 0,
    'viernes' => isset($horas['viernes']) ? intval($horas['viernes']) : 0,
    'sabado' => isset($horas['sabado']) ? intval($horas['sabado']) : 0,
    'domingo' => isset($horas['domingo']) ? intval($horas['domingo']) : 0
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

