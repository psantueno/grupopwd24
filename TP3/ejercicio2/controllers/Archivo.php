<?php

class Archivo{
    //Atributos
    private $dir;

    //Constructor
    public function __construct(){
        $this->dir="../../Controlador/dir/";
    }

    //Observadores
    public function getDir(){
        return $this->dir;
    }

    //Propios
    public function validar($datos){
        $unArchivo=$datos['archivo'];
        $mensaje="";
        if($unArchivo['error']<=0){
            $type=$unArchivo['type'];
            $size=$unArchivo['size'];
            if($type=="text/plain" && $size/(1024*1024)<=2){
                $tmpName=$unArchivo['tmp_name'];
                $name=$unArchivo['name'];
                $directorio=$this->getDir();
                if(copy($tmpName,$directorio.$name)){
                    $ruta=$directorio.$name;
                    $contenido=file_get_contents($ruta);
                    $mensaje=$contenido;
                }
            }
        }
        return $mensaje;
    }
}