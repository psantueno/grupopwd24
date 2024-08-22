<?php

class Login{
    //Atributos
    private $colUsuarios;

    //Constructor
    public function __construct(){
        $this->colUsuarios=[["usuario"=>"alexis","clave"=>"alexis123"]];
    }

    //Observadores
    public function getColeccionUsuarios(){
        return $this->colUsuarios;
    }

    //Modificadores
    public function setColeccionUsuarios($unaColeccion){
        $this->colUsuarios=$unaColeccion;
    }

    //Propios
    public function verificarLogin($datos){
        $usuario=trim($datos['username']);
        $contrasenia=trim($datos['password']);
        $mensaje="Usuario o contraseña incorrecto";
        $valido=false;
        $i=0;
        $coleccionUsuarios=$this->getColeccionUsuarios();
        while($i<count($coleccionUsuarios) && !$valido){
            $usuarioActual=$coleccionUsuarios[$i];
            if($usuarioActual['usuario']==$usuario && $usuarioActual['clave']==$contrasenia){
                $valido=true;
            }
            $i++;
        }
        if($valido){
            $mensaje="Bienvenido, $usuario";
        }
        return $mensaje;
    }
}