(function($){
  $.fn.center = function(){
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

function buildHtml(type){
  var build = '<input class="form-control" name="' + type + '" id="' + type + '">';
  var html = $('#containerInput').append(build);
  return html;
}

$(document).ready(function(){
  console.log('ready');
  $('#login').center();
  $('#selectType').change(function(){
    buildHtml($(this).val());
  });
});
