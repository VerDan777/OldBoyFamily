var $ = require("jquery");

function Slider() {
    var images = new Array('http://oldboyfamily.com/wp-content/themes/OldBoyFamily/img/bw.jpg', 'http://oldboyfamily.com/wp-content/themes/OldBoyFamily/img/bg2.jpg');
    // var links = new Array('https://oldboyfamily.com/poli/','https://oldboyfamily.com/poli/loyality-card/');
    var nextImage = 0;
    // var nextLink = 0;
    SlideShow();
    Next();
    Prev();


    function SlideShow() {
        if(nextImage>= images.length && nextLink>=links.length) {
            nextImage = 0;
        }
        // document.querySelector('a').setAttribute('href') = links[nextLink++];
        $('.hero').css(
            'background-image', 'url("'+images[nextImage++]+'")').fadeIn(500, ()=> {setTimeout(SlideShow, 10000)})
    }
    function Next() {
        var nextButton = document.querySelector('.button--next');
        nextButton.addEventListener("click", function() {
            if(nextImage>= images.length) {
                nextImage=0;
            }
            $('.hero').css(
                'background-image', 'url("'+images[nextImage++]+'")');
        })
    }
    function Prev() {
        var prevButton = document.querySelector('.button--prev');
        prevButton.addEventListener("click", function() {
            if(nextImage>= images.length) {
                nextImage=0;
            }
            $('.hero').css(
                'background-image', 'url("'+images[nextImage++]+'")');
        });
    }

}
module.exports = new Slider;