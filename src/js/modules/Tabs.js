var $ = require("jquery");

function Tabs() {
    $("#tab").addClass("tabs__active-bg");
    $('.tabs__item').on("click",TabsChanged);

function TabsChanged() {
    var tab_id = $(this).attr('data-tab');
    $('.tabs__item').removeClass('tabs__current tabs__active-bg');
    $('.tabs__content').removeClass('tabs__current');
    $(this).addClass('tabs__current tabs__active-bg');
    $("#"+tab_id).addClass('tabs__current');
}
}
module.exports = new Tabs;