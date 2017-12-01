var $ = require("jquery");

function MobileMenu() {
var $mainMenu = $(".main-menu");
var $menuIcon = $(".menu-icon");
var $menuLinks = $(".main-menu__link");
var $ArrowIcon = $(".main-menu__icon");

if($('.sub-menu').children().hasClass('.main-menu__icon')) {
    $(this).addClass('hide');
} 

$menuIcon.on("click", toggleMenu);
$menuLinks.on("click", toggleMenu);
$menuLinks.on("tap", toggleMenu);
$ArrowIcon.on("click", Accardeon);

function toggleMenu() {
$mainMenu.toggleClass("main-menu--shown");
$menuIcon.toggleClass("menu-icon--close-x");
}





function Accardeon(e) {
    var $this = $(this);
    e.preventDefault();
           
       // Pug
    if($this.next().hasClass('sub-menu--shown')) {

        $this.toggleClass('main-menu__icon--rotate')
        $this.parent().next().slideToggle(200);
        $this.next().removeClass('sub-menu--shown');
        $this.next().toggleClass('sub-menu--shown');
        
    } else {
        $this.toggleClass('main-menu__icon--rotate');
        $this.parent().next().toggleClass('sub-menu--shown');
        // $this.next().find('li').removeClass('shown');
        // $this.parent().next().slideUp(250);
        // $this.parent().next().slideToggle(250);
    
    }
    return false;
}
}

module.exports = new MobileMenu;