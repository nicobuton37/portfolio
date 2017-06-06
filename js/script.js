(function($){
  $.fn.Center = function(){
    this.css({
      'position' : 'fixed',
      'left' : '50%',
      'top' : '50%'
    });

    this.css({
      'margin-left': -this.width()/2 + 'px',
      'marging-top': -this.height()/2 + 'px'
    });
  }
})(jQuery);

$(document).ready(function(){
  $('#login').Center();
});
