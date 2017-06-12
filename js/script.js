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
  $('.target').remove();
  $('#fieldAdmin').remove();
  var html = '';
  var build = '';
  switch(type){
    case "languages":
      build = '<div id="fieldAdmin"><input type="file" name="'
      + type + '" value="image"><input type="text" name="name" value="" placeholder="Language name ? ...">'
      + '<button type="submit" class="btn btn-success">Submit</button></div>';
    break;
    case "projects":
      build = '<div id="fieldAdmin"><input class="form-control type="text" name="'
      + type + '" value="" id="fieldAdmin" placeholder="github link..."></div>';
    break;
    case "papers":
      build = '<div id="fieldAdmin"><textarea rows="30" cols="50" class="form-control"'
      + 'id="fieldAdmin" placeholder="your paper text"></textarea></div>';
    break;
  }
  html = $('#containerInput').append(build);
}

$(document).ready(function(){
  console.log('ready');
  $('#message').remove();

  $('#login').center();
  $('#selectType').change(function(){
    $('#fieldAdmin').remove();
    buildHtml($(this).val());
  });
});
