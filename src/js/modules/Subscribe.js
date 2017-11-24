var $ = require("jquery");

function Subscribe() {

    var $form = $("#subscribe-form");
    var $form_message = $("#form-message");

    $form.submit(Submit);

    function Submit(e) {
        e.preventDefault();
        var $formData = $($form).serialize();
        $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: $formData
        })
    }
}
module.exports = Subscribe;