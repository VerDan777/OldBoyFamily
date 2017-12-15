var $ = require("jquery");

function Scroll() {
    var scroll = $('.info__scroll');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $(scroll).fadeIn();
        } else {
            $(scroll).fadeOut();
        }
    });
    $(scroll).click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
}
module.exports = new Scroll;
