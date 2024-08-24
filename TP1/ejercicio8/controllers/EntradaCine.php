<?php

class EntradaCine {
    private $edad;
    private $esEstudiante;

    // Constructor
    public function __construct($datos) {
        $this->edad = $datos['edad'] ?? null;
        $this->esEstudiante = $datos['estudiante'] ?? null;
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
