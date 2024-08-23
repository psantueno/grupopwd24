$(document).ready(function () {
    $("#formulario").validate({
        rules:{
            numero: {
                required: true,
                number: true
            }
        },
        messages:{
            numero:{
                required: "Debe completar este campo",
                number: "Debe ingresar un numero"
            },           
        }
    });
});