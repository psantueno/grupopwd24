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
            caracteresValidosContrasenia: true,
            tieneLetras: true,
            tieneNumeros: true,
            distintoDeUsuario: true,
            minlength: 8
        }
    },
    messages:{
        username:{
            required: "Debe completar este campo"
        },
        password:{
            required: "Debe completar este campo",
            minlength: "Debe tener como minimo 8 caracteres"
        }
    }
})

$.validator.addMethod("tieneLetras", function(value) {
    let reg=/^(?=.*[a-zA-Z])[a-zA-Z\d]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe tener al menos una letra");

$.validator.addMethod("tieneNumeros", function(value) {
    let reg=/^(?=.*\d)[a-zA-Z\d]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe tener al menos un numero");

$.validator.addMethod("caracteresValidosContrasenia", function(value) {
    let reg=/^[a-zA-Z0-9]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe ingresar numeros y letras");

$.validator.addMethod("caracteresValidosUsuario", function(value) {
    let reg=/^[a-zA-Z0-9._-]+$/;
    let valido=reg.test(value);
    return valido;
}, "Debe ingresar numeros,letras, . , - o _");

$.validator.addMethod("distintoDeUsuario",function(value){
    let usuario=document.getElementById('username').value;
    let valido=value!=usuario;
    return valido;
}, "Debe ser distinto del nombre de usuario");