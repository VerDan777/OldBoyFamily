var $ = require("jquery");

function Slider() {
    var images = new Array('./img/sertificate.jpg', './img/bw.jpg', './img/bg2.jpg');
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