<?php
    class Persona{
        //Constructor
        public function __construct(){

        }

        //Propios
        public function obtenerSaludo($data){
            $nombre=$data['nombre'];
            $apellido=$data['apellido'];
            $edad=$data['edad'];
            $direccion=$data['direccion'];
            $mensaje= "Hola soy $apellido, $nombre tengo $edad años y vivo en $direccion";
            return $mensaje;
        }
        
        public function esMayorEdad($data){
            $edad=$data['edad'];
            $esMayor=false;
            if($edad>=18){
                $esMayor=true;
            }
            return $esMayor;
        }
    }
?>