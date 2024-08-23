$(document).ready(function () {
    $("#horasForm").validate({
        rules: {
            lunes: {
                required: true,
                number: true,
                min: 0
            },
            martes: {
                required: true,
                number: true,
                min: 0
            },
            miercoles: {
                required: true,
                number: true,
                min: 0
            },
            jueves: {
                required: true,
                number: true,
                min: 0
            },
            viernes: {
                required: true,
                number: true,
                min: 0
            },
            sabado: {
                number: true,
                min: 0
            },
            domingo: {
                number: true,
                min: 0
            }
        },
        messages: {
            lunes: {
                required: "Por favor, ingrese las horas para el Lunes.",
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            martes: {
                required: "Por favor, ingrese las horas para el Martes.",
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            miercoles: {
                required: "Por favor, ingrese las horas para el Miércoles.",
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            jueves: {
                required: "Por favor, ingrese las horas para el Jueves.",
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            viernes: {
                required: "Por favor, ingrese las horas para el Viernes.",
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            sabado: {
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            },
            domingo: {
                number: "Ingrese un número válido.",
                min: "El número debe ser positivo."
            }
        },
        errorClass: "invalido", // Clase que se añadirá a los campos con errores
        highlight: function (element) {
            $(element).addClass("invalido");
        },
        unhighlight: function (element) {
            $(element).removeClass("invalido");
        }
    });
});