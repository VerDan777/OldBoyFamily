import $ from 'jquery';

class Tabs {
    constructor() {
        this.TabsItem = $('.tabs__item');
        this.TabsContent = $('.tabs__content');
        this.TabsCurrent = $('.tabs__current');
        this.events();
    }

    events() {
        $('.tabs__item').click(function(){
            var tab_id = $(this).attr('data-tab');
            $('.tabs__item').removeClass('tabs__current');
            $('.tabs__content').removeClass('tabs__current');
    
            $(this).addClass('tabs__current')
            $("#"+tab_id).addClass('tabs__current');
            
        })
    }
}
export default Tabs;
