<?php

class Calculadora
{

    // Métodos
    public function calcular($numero1, $numero2, $operacion)
    {
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
}
