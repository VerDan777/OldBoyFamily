var $ = require("jquery");

function Subscribe() {
    var $form = $("#subscribe-form");
    $form.submit(function(e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "http://localhost/OldBoyFamily/send",
        data: form_data,
        complete: function() {
            console.log("Отправлено!");
        },
        success: function() {
            alert('Успешно!');
        },
        error: function() {
            console.log(error);
        }
    })
})
}

module.exports =  new Subscribe;