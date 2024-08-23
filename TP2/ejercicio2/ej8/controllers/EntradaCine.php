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
        $precio = 300;
        if ($this->getEdad() < 12 || $this->getEsEstudiante() == 'si') {
            $precio = ($this->getEdad() < 12) ? 160 : 180;
        } 
        
        return $precio;
        
    }

    // Getters
    public function getEdad() {
        return $this->edad;
    }

    public function getEsEstudiante() {
        return $this->esEstudiante;
    }
}
?>
