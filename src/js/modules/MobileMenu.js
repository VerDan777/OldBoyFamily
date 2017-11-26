var $ = require("jquery");

function MobileMenu() {
var $mainMenu = $(".main-menu");
var $menuIcon = $(".menu-icon");
var $menuLinks = $(".main-menu__link");
var $ArrowIcon = $(".main-menu__icon");

$menuIcon.on("click", toggleMenu);
$menuLinks.on("click", toggleMenu);
$menuLinks.on("tap", toggleMenu);
$ArrowIcon.on("click", Accardeon);
// $ArrowIcon.on("tap", Accardeon);

function toggleMenu() {
$mainMenu.toggleClass("main-menu--shown");
$menuIcon.toggleClass("menu-icon--close-x");
}

function Accardeon() {
    var $this = $(this);

    if($this.next().hasClass('main-menu__dropdown--shown')) {
        $this.next().removeClass('main-menu__dropdown--shown');
        $this.next().slideUp(350);
        $this.toggleClass('main-menu__icon--rotate')
    } else {
        $this.parent().parent().find('li .main-menu__dropdown').removeClass('shown');
        $this.parent().find('.main-menu__dropdown').slideUp(250);
        $this.next().slideToggle(250);
        $this.next().toggleClass('main-menu__dropdown--shown');
        $this.toggleClass('main-menu__icon--rotate');
    }
}
}

module.exports = new MobileMenu;