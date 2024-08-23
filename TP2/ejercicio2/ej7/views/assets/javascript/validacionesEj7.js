$(document).ready(function () {
    const form = $("form");
    const inputs = form.find("input[type='number']");
    const select = form.find("select");

    form.on("submit", function (event) {
        let isValid = true;

        inputs.each(function () {
            const input = $(this);
            if (input.val().trim() === "" || isNaN(input.val())) {
                input.addClass("is-invalid").removeClass("is-valid");
                isValid = false;
            } else {
                input.removeClass("is-invalid").addClass("is-valid");
            }
        });

        if (select.val().trim() === "") {
            select.addClass("is-invalid").removeClass("is-valid");
            isValid = false;
        } else {
            select.removeClass("is-invalid").addClass("is-valid");
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
