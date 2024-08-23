document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const edadInput = document.getElementById("edad");
    const estudianteInput = document.getElementById("estudiante");
    const resetButton = form.querySelector('button[type="reset"]');

    form.addEventListener("submit", function (event) {
        let isValid = true;

        if (edadInput.value.trim() === "" || isNaN(edadInput.value) || edadInput.value <= 0) {
            edadInput.classList.add("is-invalid");
            edadInput.classList.remove("is-valid");
            isValid = false;
        } else {
            edadInput.classList.remove("is-invalid");
            edadInput.classList.add("is-valid");
        }

        if (estudianteInput.value === "") {
            estudianteInput.classList.add("is-invalid");
            estudianteInput.classList.remove("is-valid");
            isValid = false;
        } else {
            estudianteInput.classList.remove("is-invalid");
            estudianteInput.classList.add("is-valid");
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    if (resetButton) {
        resetButton.addEventListener("click", function () {
            // Limpiar las clases de validación en todos los inputs
            edadInput.classList.remove("is-invalid", "is-valid");
            estudianteInput.classList.remove("is-invalid", "is-valid");
        });
    }
});
