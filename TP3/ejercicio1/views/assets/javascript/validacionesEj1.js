document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("uploadForm");
    const fileInput = document.getElementById("fileInput");
    const fileError = document.getElementById("fileError");

    form.addEventListener("submit", function (event) {
        let isValid = true;
        const file = fileInput.files[0];

        // Limpiar las clases de validación y el mensaje de error
        fileInput.classList.remove("is-invalid", "is-valid");
        fileError.textContent = '';

        if (file) {
            const fileSize = file.size;
            const fileType = file.type;
            const allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            const maxSize = 2 * 1024 * 1024; // 2MB

            if (fileSize > maxSize) {
                const fileSizeMB = (fileSize / (1024 * 1024)).toFixed(2); // Tamaño en MB con dos decimales
                fileInput.classList.add("is-invalid");
                fileError.textContent = `El archivo excede el tamaño máximo permitido de 2MB. Tamaño del archivo: ${fileSizeMB}MB.`;
                isValid = false;
            } else if (!allowedTypes.includes(fileType)) {
                fileInput.classList.add("is-invalid");
                fileError.textContent = 'Tipo de archivo no permitido. Solo se permiten archivos .doc y .pdf.';
                isValid = false;
            } else {
                fileInput.classList.add("is-valid");
            }
        } else {
            fileInput.classList.add("is-invalid");
            fileError.textContent = 'No se ha seleccionado ningún archivo.';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); 
        }
    });

    // Limpiar validaciones al reiniciar el formulario
    form.addEventListener("reset", function () {
        fileInput.classList.remove("is-invalid", "is-valid");
        fileError.textContent = '';
    });
});
