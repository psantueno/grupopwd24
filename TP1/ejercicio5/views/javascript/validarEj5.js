document.addEventListener("submit", e=>{
    let nombre;
    let apellido;
    let direccion;
    let valido=true;
    nombre=document.getElementById("nombre");
    apellido=document.getElementById("apellido");
    direccion=document.getElementById("direccion");
    if(soloCaracteres(nombre.value)){
        if(nombre.classList.contains("invalido")){
            nombre.classList.remove("invalido");
        }
    }else{
        nombre.classList.add("invalido");
        valido=false; 
    }

    if(soloCaracteres(apellido.value)){
        if(apellido.classList.contains("invalido")){
            apellido.classList.remove("invalido");
        }
    }else{
        apellido.classList.add("invalido");
        valido=false; 
    }

    if(direccionValida(direccion.value)){
        if(direccion.classList.contains("invalido")){
            direccion.classList.remove("invalido");
        }
    }else{
        direccion.classList.add("invalido");
        valido=false; 
    }
    if(!valido){
        e.preventDefault();
    }
})

function soloCaracteres(unaCadena){
    let valido=true;
    let i=0;
    let cadenaAux=unaCadena.toLowerCase();
    let longitud=cadenaAux.length;
    let caracterActual;
    while(i<longitud && valido){
        caracterActual=cadenaAux.charCodeAt(i);
        if(((caracterActual<97 || caracterActual>122) && caracterActual!=32) || (caracterActual==32 && i<longitud-1 && cadenaAux.charCodeAt(i+1)==32)){ //Verificacion para que solo se acepten letras y no se ingresen varios espacios consecutivos
            valido=false;
        }
        i++;
    }
    return valido;
}

function direccionValida(unaCadena){
    let valido=true;
    let i=0;
    let cadenaAux=unaCadena.toLowerCase();
    let longitud=cadenaAux.length;
    let caracterActual;
    while(i<longitud && valido){
        caracterActual=cadenaAux.charCodeAt(i);
        if(((caracterActual<48 || caracterActual<97 && caracterActual>57 || caracterActual>122) && caracterActual!=32) || (caracterActual==32 && i<longitud-1 && cadenaAux.charCodeAt(i+1)==32)){ //Verificacion para que se acepten letras, numeros y no se ingresen varios espacios consecutivos
            valido=false;
        }
        i++;
    }
    return valido;
}
