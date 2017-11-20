$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
       $('.body').addClass('fixed');
    }
    else {
       $('.body').removeClass('fixed');
    }
});