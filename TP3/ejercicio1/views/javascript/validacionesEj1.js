document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("uploadForm");
    const fileInput = document.getElementById("fileInput");

    form.addEventListener("submit", function (event) {
        let isValid = true;
        const file = fileInput.files[0];

        // Limpiar las clases de validación
        fileInput.classList.remove("is-invalid", "is-valid");

        if (file) {
            const fileSize = file.size;
            const fileType = file.type;
            const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            const maxSize = 2 * 1024 * 1024; // 2MB

            if (fileSize > maxSize) {
                fileInput.classList.add("is-invalid");
                isValid = false;
            } else if (!allowedTypes.includes(fileType)) {
                fileInput.classList.add("is-invalid");
                isValid = false;
            } else {
                fileInput.classList.add("is-valid");
            }
        } else {
            fileInput.classList.add("is-invalid");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });

    // Limpiar validaciones al reiniciar el formulario
    form.addEventListener("reset", function () {
        fileInput.classList.remove("is-invalid", "is-valid");
    });
});
