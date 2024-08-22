<?php

function submittedData(){
    $datos=array();
    foreach($_GET as $clave=>$valor){
        $datos[$clave]=$valor;
    }
    foreach($_POST as $clave=>$valor){
        $datos[$clave]=$valor;
    }
    return $datos;
}