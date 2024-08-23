$("#formulario").validate({
    errorPlacement: function(error,element){
        let div=$("#input-field-"+element.attr('id'));
        error.insertAfter(div);
    },
    rules:{
        username:{
            required: true,
            caracteresValidosUsuario: true
        },
        password:{
            required: true,
            caracteresValidosContrasenia: true
        }
    },
    messages:{
        username:{
            required: "Debe completar este campo"
        },
        password:{
            required: "Debe completar este campo"
        }
    }
})

$.validator.addMethod("caracteresValidosContrasenia", function(value) {
    let reg=/^[a-zA-Z0-9]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe ingresar solo numeros o letras");

$.validator.addMethod("caracteresValidosUsuario", function(value) {
    let reg=/^[a-zA-Z0-9._-]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe ingresar numeros,letras, . , - o _");