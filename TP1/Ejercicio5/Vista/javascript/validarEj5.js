document.addEventListener("submit", e=>{
    let nombre;
    let apellido;
    let direccion;
    let nombreError;
    let apellidoError;
    let direccionError;
    let valido=true;
    nombre=document.getElementById("nombre");
    apellido=document.getElementById("apellido");
    direccion=document.getElementById("direccion");
    if(soloCaracteres(nombre.value)){
        if(nombre.classList.contains("invalido")){
            nombre.classList.remove("invalido");
        }
        nombreError=document.getElementById("nombreError");
        nombreError.style.display="none";
    }else{
        nombre.classList.add("invalido");
        nombreError=document.getElementById("nombreError");
        nombreError.style.display="block";
        valido=false; 
    }

    if(soloCaracteres(apellido.value)){
        if(apellido.classList.contains("invalido")){
            apellido.classList.remove("invalido");
        }
        apellidoError=document.getElementById("apellidoError");
        apellidoError.style.display="none";
    }else{
        apellido.classList.add("invalido");
        apellidoError=document.getElementById("apellidoError");
        apellidoError.style.display="block";
        valido=false; 
    }

    if(direccionValida(direccion.value)){
        if(direccion.classList.contains("invalido")){
            direccion.classList.remove("invalido");
        }
        direccionError=document.getElementById("direccionError");
        direccionError.style.display="none";
    }else{
        direccion.classList.add("invalido");
        direccionError=document.getElementById("direccionError");
        direccionError.style.display="block";
        valido=false; 
    }
    if(!valido){
        e.preventDefault();
    }
})

function soloCaracteres(unaCadena){
    let reg=/^(?!.*\s\s)[a-zA-Z\s]+$/;  //Expresion regular que ppermite letras y espacios, pero no pueden haber espacios consecutivos en la cadena
    let valido=reg.test(unaCadena);
    return valido;
}

function direccionValida(unaCadena){
    let reg=/^(?!.*\s\s)(?!.*\.\.)[a-zA-Z0-9.\s]+$/; //Expresion regular que permite letras,numeros y espacios, pero no pueden haber espacios o puntos consecutivos en la cadena
    let valido=reg.test(unaCadena);
    return valido;
}