<?php

class EntradaCine {
    private $edad;
    private $esEstudiante;

    // Constructor
    public function __construct($edad, $esEstudiante) {
        $this->edad = $edad;
        $this->esEstudiante = $esEstudiante;
    }

    // Método para calcular el precio de la entrada.
    public function calcularPrecio() {
        if ($this->edad < 12 || $this->esEstudiante == 'si') {
            return ($this->edad < 12) ? 160 : 180;
        } else {
            return 300;
        }
    }

    // Getters
    public function getEdad() {
        return $this->edad;
    }

    public function esEstudiante() {
        return $this->esEstudiante;
    }
}
?>
