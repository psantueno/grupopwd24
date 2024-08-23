$(document).ready(function () {
    $("#infoForm").on("submit", function (e) {
        let valido = true;

        const nombre = $("#nombre").val().trim();
        const apellido = $("#apellido").val().trim();
        const edad = $("#edad").val().trim();
        const direccion = $("#direccion").val().trim();

        // Validación de campos vacíos
        if (!nombre || !apellido || !edad || !direccion) {
            alert("Todos los campos deben ser llenados.");
            valido = false;
        }

        // Validación de la edad
        if (isNaN(edad) || edad <= 0) {
            alert("La edad debe ser un número positivo.");
            valido = false;
        }

        if (!valido) {
            e.preventDefault();  // Evita el envío del formulario si hay errores
        }
    });
});