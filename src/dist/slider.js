// "use strict";

  var slideCount = document.querySelectorAll('.hero__slider .hero__slider-item').length;
  var slideWidth = document.querySelectorAll('.slider-outer')[0].offsetWidth; 
  var slideHeight = document.querySelectorAll(".hero-outer")[0].offsetHeight;

  var sliderUlWidth = slideCount * slideWidth;
  document.querySelectorAll('.hero__slider')[0].style.cssText = "width:" + sliderUlWidth + "px";

  for (var i = 0; i < slideCount; i++) {
    document.querySelectorAll('.hero__slider-item')[i].style.cssText = "width:" + slideWidth + "px;height:" + slideHeight + "px";
  }

  setInterval(function() {
    moveRight();
  }, 6000);
  var counter = 1;

  function moveRight() {
    var slideNum = counter++
      if (slideNum < slideCount) {
        var transformSize = slideWidth * slideNum;
        document.querySelectorAll('.hero__slider')[0].style.cssText = 
          "width:" + sliderUlWidth + "px; -webkit-transition:all 800ms ease; -webkit-transform:translate3d(-" + transformSize + "px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(-" + transformSize + "px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(-" + transformSize + "px, 0px, 0px);transition:all 800ms ease; transform:translate3d(-" + transformSize + "px, 0px, 0px)";

      } else {
        counter = 1;
        document.querySelectorAll('.hero__slider')[0].style.cssText = "width:" + sliderUlWidth + "px;-webkit-transition:all 800ms ease; -webkit-transform:translate3d(0px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(0px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(0px, 0px, 0px);transition:all 800ms ease; transform:translate3d(0px, 0px, 0px)";
      }

  }



