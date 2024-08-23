$(document).ready(function () {
    $("form").on("submit", function (e) {
        let nombre = $("#nombre");
        let apellido = $("#apellido");
        let direccion = $("#direccion");
        let valido = true;

        if (soloCaracteres(nombre.val())) {
            nombre.removeClass("invalido");
            $("#nombreError").hide();
        } else {
            nombre.addClass("invalido");
            $("#nombreError").show();
            valido = false;
        }

        if (soloCaracteres(apellido.val())) {
            apellido.removeClass("invalido");
            $("#apellidoError").hide();
        } else {
            apellido.addClass("invalido");
            $("#apellidoError").show();
            valido = false;
        }

        if (direccionValida(direccion.val())) {
            direccion.removeClass("invalido");
            $("#direccionError").hide();
        } else {
            direccion.addClass("invalido");
            $("#direccionError").show();
            valido = false;
        }

        if (!valido) {
            e.preventDefault();
        }
    });

    function soloCaracteres(unaCadena) {
        let reg = /^(?!.*\s\s)[a-zA-Z\s]+$/;  // Permite letras y espacios, pero no espacios consecutivos
        return reg.test(unaCadena);
    }

    function direccionValida(unaCadena) {
        let reg = /^(?!.*\s\s)(?!.*\.\.)[a-zA-Z0-9.\s]+$/; // Permite letras, números, espacios y puntos, pero no consecutivos
        return reg.test(unaCadena);
    }
});
