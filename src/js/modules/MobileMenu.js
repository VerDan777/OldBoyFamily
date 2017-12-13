var $ = require("jquery");

function MobileMenu() {
var $mainMenu = $(".main-menu");
var $menuIcon = $(".menu-icon");
var $menuLinks = $(".main-menu__link");
var $ArrowIcon = $(".main-menu__icon");
DeleteArrow();
Checking();
ActiveMenu();

$menuIcon.on("click", toggleMenu);
$menuLinks.on("click", toggleMenu);
$menuLinks.on("tap", toggleMenu);
$ArrowIcon.on("click", Accardeon);

function toggleMenu() {
    $mainMenu.toggleClass("main-menu--shown");
    $menuIcon.toggleClass("menu-icon--close-x");
}

function Checking() {
    var width = $(window).width();
   if($(".sub-menu").hasClass("sub-menu--check") && width>=1200) {
       console.log('найден!');
        $(".breadcrumb").addClass("breadcrumb--mrtop");
   }else {
       console.log("не найден!");
   }
}

function ActiveMenu() {
    $('.main-menu__item').has('ul.sub-menu.sub-menu--check').addClass('main-menu__arrow');
}

function DeleteArrow() {
   $('.main-menu__link').children('.main-menu__icon').first().addClass('hide');
   $('.main-menu__icon').filter(function(index) {}).addClass('hide');
   
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
        $('.main-menu__sublink').children('.main-menu__icon').addClass('hide');

        if($this.parent().hasClass('hide')) {
            alert('works');
            // $($this).removeClass('hide');
        }

        // $this.parent().next().slideToggle(250);
        // $this.parent().next().removeClass('hide');
        $this.parent().next().toggleClass('sub-menu--shown');
        $this.toggleClass('main-menu__icon--rotate');
        // $this.next().find('li').removeClass('shown');
        // $this.parent().next().slideUp(250);
    
    }
    return false;
}
}

module.exports = new MobileMenu;