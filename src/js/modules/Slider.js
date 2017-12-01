var $ = require("jquery");

function Slider() {
    var images = new Array('http://localhost/OldBoyFamily/wp-content/themes/OldBoyFamily/img/sertificate.jpg', 'http://localhost/OldBoyFamily/wp-content/themes/OldBoyFamily/img/bw.jpg', 'http://localhost/OldBoyFamily/wp-content/themes/OldBoyFamily/img/bg2.jpg');
    var nextImage = 0;
    SlideShow();


    function SlideShow() {
        if(nextImage>= images.length) {
            nextImage=0;
        }   
        $('.hero').css(
            'background-image', 'url("'+images[nextImage++]+'")').fadeIn(500, ()=> {setTimeout(SlideShow, 10000)})
    }
}
module.exports = new Slider;