var $ = require("jquery");

function Subscribe() {
    var $form = $("#subscribe-form");
    $form.submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "https://oldboyfamily.com/mail.php",
        data: form_data,
        complete: function() {
            console.log(form_data);
        },
        success: function() {
            console.log('Успешно!');
        },
        error: function(error) {
            console.log(error);
        }
    })
})
}

module.exports = new Subscribe;