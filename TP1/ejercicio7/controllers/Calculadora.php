<?php

class Calculadora
{

    // Métodos
    public function calcular($datos)
    {
        $numero1=$datos['numero1'];
        $numero2=$datos['numero2'];
        $operacion=$datos['operacion'];
        $resultado = null;
        $operador = '';

        switch ($operacion) {
            case 'suma':
                $resultado = $numero1 + $numero2;
                $operador = '+';
                break;
            case 'resta':
                $resultado = $numero1 - $numero2;
                $operador = '-';
                break;
            case 'multiplicacion':
                $resultado = $numero1 * $numero2;
                $operador = '*';
                break;
            case 'division':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    $operador = '/';
                } else {
                    return ['error' => 'No se puede dividir por cero.'];
                }
                break;
            default:
                return ['error' => 'Operación no válida.'];
        }

        return ['resultado' => $resultado, 'operador' => $operador];
    }

    public function mensajeOperacion($datos){
        $numero1=$datos['numero1'];
        $numero2=$datos['numero2'];
        $operacion=$datos['operacion'];
        $operador = '';
        switch ($operacion) {
            case 'suma':
                $operador = '+';
                break;
            case 'resta':
                $operador = '-';
                break;
            case 'multiplicacion':
                $operador = '*';
                break;
            case 'division':
                $operador = '/';
                break;
        }
        $mensaje= $numero1." ".$operador." ".$numero2;
        return $mensaje;
    }
}
