document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll("input[type='number']");
    const select = form.querySelector("select");

    form.addEventListener("submit", function (event) {
        let isValid = true;

        inputs.forEach(function (input) {
            if (input.value.trim() === "" || isNaN(input.value)) {
                input.classList.add("is-invalid");
                input.classList.remove("is-valid");
                isValid = false;
            } else {
                input.classList.remove("is-invalid");
                input.classList.add("is-valid");
            }
        });

        if (select.value.trim() === "") {
            select.classList.add("is-invalid");
            select.classList.remove("is-valid");
            isValid = false;
        } else {
            select.classList.remove("is-invalid");
            select.classList.add("is-valid");
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
