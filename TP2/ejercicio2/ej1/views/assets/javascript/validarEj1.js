$(document).ready(function () {
    $("#numeroForm").on("submit", function (e) {
        let numero = $("#numero").val().trim();
        
        // Validar que el campo no esté vacío y que contenga un número válido
        if (numero === "" || isNaN(numero)) {
            alert("Por favor, ingrese un número válido.");
            e.preventDefault(); // Evita el envío del formulario si hay errores
        }
    });
});