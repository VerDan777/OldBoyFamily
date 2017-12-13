var $ = require("jquery");

function Subscribe() {

    var $form = $("#subscribe-form");
    $form.submit(function(e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "send.php",
        data: form_data,
        complete: function() {
            console.log(form_data);
        },
        success: function() {
            alert('Успешно!');
        },
        error: function(error) {
            console.log(error);
        }
    })
})
}

module.exports = new Subscribe;