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
$ArrowIcon.on("tap", Accardeon);

function toggleMenu() {
$mainMenu.toggleClass("main-menu--shown");
$menuIcon.toggleClass("menu-icon--close-x");
}

function Accardeon() {
    var $this = $(this);
    
    var current_id = $(this).data('id');
    
        // We get the element and store it, so we don't get it twice later.
        var element = $('#' + current_id);
    
       element.prev().hide();
       element.next().hide();
       
    if($this.next().hasClass('main-menu__dropdown--shown')) {
        $this.toggleClass('main-menu__icon--rotate')
        $this.next().slideToggle(200);
        $this.next().removeClass('main-menu__dropdown--shown');
        $this.next().toggleClass('main-menu__dropdown--shown');
        
    } else {
        $this.parent().parent().find('li .main-menu__dropdown').removeClass('shown');
        $this.parent().find('.main-menu__dropdown').slideUp(250);
        $this.next().slideToggle(250);
        $this.toggleClass('main-menu__icon--rotate');
        $this.next().toggleClass('main-menu__dropdown--shown');
    
    }
  
}
}

module.exports = new MobileMenu;