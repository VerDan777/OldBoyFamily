var $ = require("jquery");
var Validator = require("jquery-validation");

function Validate() {
    var $this = this;

    $("#subscribe-form").validate({
        errorPlacement: function(error, element) {
            error.appendTo(element.parent(".form__input-group"));
        },
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            email: "Пожалуйста введите адрес электронной почты"
        },
        submitHandler: function(form) {
            this.ParseForm();
        }
    });

function ParseForm() {
    var customer = {
        email: this.$("#subscribe-form").find("input[name=\"email\"]").val()
    };
    
    var $fullOrder = $(`
    <h1>${customer.email}</h1>
    `)

    var dataToSend = {
        "subject": "Subscrube",
        "content": $fullOrder.html()
    };
    $.ajax({
        type: "POST",
        url: 'http://localhost/OldBoyFamily/mail.php',
        data: dataToSend,
        success: onSuccess,
        error: onError
    })

    function onSuccess() {
        alert("Письмо отправлено");
    }

    function onError() {
        alert("Письмо не отправлено");
    }
}
}
module.exports = new Validate;