$('.main-menu__icon').click(function() {
  var $this = $(this);

  if ($this.next().hasClass('main-menu__dropdown--shown')) {
      $this.next().removeClass('main-menu__dropdown--shown');
      $this.next().slideUp(350);
  } else {
      $this.parent().parent().find('li .main-menu__dropdown').removeClass('shown');
      $this.parent().find('.main-menu__dropdown').slideUp(250);
      $this.next().slideToggle(250);
      $this.next().toggleClass('main-menu__dropdown--shown');
  }
});