<?php
    class Persona{
        //Constructor
        public function __construct(){

        }

        //Propios
        public function obtenerSaludo($data){
            $nombre=trim($data['nombre']);
            $apellido=trim($data['apellido']);
            $edad=$data['edad'];
            $direccion=trim($data['direccion']);
            $estudios=$data['estudios'];
            $genero=$data['genero'];
            $mensaje= "Hola soy $apellido $nombre, tengo $edad años, soy $genero, vivo en $direccion y tengo $estudios";
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