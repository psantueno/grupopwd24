// Usando JQUERY

$(document).ready(function () {
    $('#entradaForm').on('submit', function (e) {

        let isValid = true;

        const edad = $('#edad').val();
        if (edad === '' || isNaN(edad) || parseInt(edad) <= 0) {
            isValid = false;
            $('#edad').addClass('is-invalid');
        } else {
            $('#edad').removeClass('is-invalid');
        }

    
        const estudiante = $('#estudiante').val();
        if (estudiante === null) {
            isValid = false;
            $('#estudiante').addClass('is-invalid');
        } else {
            $('#estudiante').removeClass('is-invalid');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    $('button[type="reset"]').on('click', function () {
        $('#entradaForm').find('.is-valid, .is-invalid').removeClass('is-valid is-invalid');
    });
});
