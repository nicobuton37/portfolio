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
  var html = '';
  var build = '';
  switch(type){
    case "languages":
      build = '<input type="file" name="' + type + '" value="image" id="fieldAdmin"><button type="submit" class="btn btn-success">Submit</button>';
    break;
    case "projects":
      build = '<input class="form-control type="text" name="' + type + '" value="" id="fieldAdmin" placeholder="github link...">';
    break;
    case "papers":
      build = '<textarea rows="30" cols="50" class="form-control" id="fieldAdmin" placeholder="your paper text"></textarea>';
    break;
  }
  html = $('#containerInput').append(build);
}

$(document).ready(function(){
  console.log('ready');
  $('#login').center();
  $('#selectType').change(function(){
    $('#fieldAdmin').remove();
    buildHtml($(this).val());
  });
});
