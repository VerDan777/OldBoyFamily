import $ from 'jquery';

class Header {
    constructor() {
    this.events();
    }
    events() {
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 300) {
            //    $('.site-header').addClass('.site-header--fixed');
               alert('hello');
            }
            else {
               alert('hello');
               
            //    $('.site-header').removeClass('.site-header--fixed');
            }
        });
}
    }
export default Header;