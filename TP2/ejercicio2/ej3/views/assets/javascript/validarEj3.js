$(document).ready(function () {
    $("#formulario").validate({
        rules:{
            nombre:{
                required: true,
                soloLetras: true
            },
            apellido:{
                required: true,
                soloLetras:true
            },
            edad:{
                required: true,
                digits: true,
                min: 1
            },
            direccion: {
                    required: true,
                    letrasYNumeros: true
            }
        },
        messages:{
            nombre:{
                required: "Debe completar este campo"
            },
            apellido:{
                required: "Debe completar este campo"
            },
            edad:{
                required: "Debe completar este campo",
                digits: "Debe ingresar solo numeros",
                min: "Debe ingresar numeros mayores a 0"
            },
            direccion:{
                required: "Debe completar este campo"
            }
        }
    })
    
    $.validator.addMethod("soloLetras", function(value) {
        let reg=/^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/;
        let valido=reg.test(value);
        return valido;
    }, "Debe ingresar solo letras");
    
    $.validator.addMethod("letrasYNumeros", function(value) {
        let reg=/^(?!.*\.\.)(?!.*\s\s)[a-zA-Z0-9. ]*$/;
        let valido=reg.test(value);
        return valido;
    }, "Debe ingresar letras o numeros");
});