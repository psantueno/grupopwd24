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
            $mensaje= "Hola soy $apellido, $nombre tengo $edad años, soy $genero, vivo en $direccion y tengo $estudios";
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

        public function obtenerMensajeDeportes($data){
            if(isset($data['deportes'])){
                $arregloDeportes=$data['deportes'];
                $cantidad=count($arregloDeportes);
                $mensaje="Practico ";
                for($i=0;$i<$cantidad;$i++){
                    $mensaje.=$arregloDeportes[$i];
                    if($i==$cantidad-2){
                        $mensaje.=" y ";
                    }else{
                        if($i!=$cantidad-1){
                            $mensaje.=" , ";
                        }
                    }
                }
            }else{
                $mensaje="No practico deportes";
            }
            return $mensaje;
        }
    }
?>