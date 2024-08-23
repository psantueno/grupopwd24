$(document).ready(function () {
    $("#horasForm").on("submit", function (e) {
        let valido = true;

        $('input[type="number"]').each(function () {
            const valor = $(this).val().trim();
            
            if (valor === '' || parseFloat(valor) < 0) {
                alert("Por favor, ingrese un número válido (positivo) en todos los campos.");
                $(this).addClass("invalido");
                valido = false;
                return false; // Termina el bucle each si hay un campo no válido
            } else {
                $(this).removeClass("invalido");
            }
        });

        if (!valido) {
            e.preventDefault(); // Evita el envío del formulario si hay errores
        }
    });
});