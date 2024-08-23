// // JavaScript de Bootstrap para validación del formulario
// (function () {
//     'use strict'
//     var forms = document.querySelectorAll('.needs-validation')

//     Array.prototype.slice.call(forms)
//         .forEach(function (form) {
//             form.addEventListener('submit', function (event) {
//                 if (!form.checkValidity()) {
//                     event.preventDefault()
//                     event.stopPropagation()
//                 }

//                 form.classList.add('was-validated')
//             }, false)
//         })
// })()

$("#formulario").validate({
    rules:{
        titulo:{
            required: true
        },
        actores:{
            required: true
        },
        director:{
            required: true
        },
        guion:{
            required: true
        },
        produccion:{
            required: true
        },
        anio:{
            required: true,
            maxlength: 4,
            digits: true
        },
        nacionalidad:{
            required: true
        },
        genero:{
            required: true
        },
        duracion: {
            required: true,
            maxlength: 3,
            digits: true
        },
        restriccion:{
            required: true
        },
        sinopsis:{
            required: true
        }
    },
    messages:{
        titulo:{
            required: "Debe completar este campo"
        },
        actores:{
            required: "Debe completar este campo"
        },
        director:{
            required: "Debe completar este campo"
        },
        guion:{
            required: "Debe completar este campo"
        },
        produccion:{
            required: "Debe completar este campo"
        },
        anio:{
            required: "Debe completar este campo",
            maxlength: "Debe ingresar como maximo 4 numeros",
            digits: "Debe ingresar solo numeros"
        },
        nacionalidad:{
            required: "Debe completar este campo"
        },
        genero:{
            required: "Debe completar este campo"
        },
        duracion: {
            required: "Debe completar este campo",
            maxlength: "Debe ingresar como maximo 3 numeros",
            digits: "Debe ingresar solo numeros"
        },
        restriccion:{
            required: "Debe completar este campo"
        },
        sinopsis:{
            required: "Debe completar este campo"
        }
    }
});