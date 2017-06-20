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
      + type + '" value=""><input type="text" name="name" value="" placeholder="Language name ? ...">'
      + '<button type="submit" class="btn btn-success">Submit</button></div>';
    break;
    case "projects":
      build = '<div id="fieldAdmin">'
      + '<div class="form-group">'
      + '<input class="form-control type="text" name="name" value="" placeholder="name">'
      + '</div>'
      + '<div class="form-group">'
      + '<input type="text" class="form-control" name="github_link" value="" placeholder="github link...">'
      + '</div>'
      + '<div class="form-group">'
      + '<textarea rows="30" cols="50" class="form-control" id="description" name="description" placeholder="description"></textarea>'
      + '</div>'
      + '<div class="form-group">'
      + '<input type="file" name="image" value="">'
      + '</div>'
      + '<div class="form-group">'
      + '<button type="submit" class="btn btn-success">Submit</button>'
      + '</div>'
      + '</div>';
    break;
    case "papers":
      build = '<div id="fieldAdmin">'
      + '<div class="form-group">'
      + '<input type="text" name="title" class="form-control" placeholder="title">'
      + '</div>'
      + '<div class="form-group">'
      + '<textarea name="body" id="body" rows="50" cols="30" placeholder="body" class="form-control"></textarea>'
      + '</div>'
      + '<div class="form-group">'
      + '<input type="file" name="image">'
      + '</div>'
      + '<div class="form-group">'
      + '<select id="categories" class="btn btn-success">'
      + '</select>'
      + '</div>'
      + '<div class="form-group">'
      + '<button type="submit" class="btn btn-success">Submit</button>'
      + '</div>'
      + '</div>';
    break;
    case "categories" :
      build = '<div id="fieldAdmin">'
      + '<div class="form-group">'
      + '<input type="text" name="categorie" class="form-control" placeholder="name">'
      + '</div>'
      + '<div class="form-group">'
      + '<button type="submit" class="btn btn-success">Submit</button>'
      + '</div>'
      + '</div>';
    break;

  }
  html = $('#containerInput').append(build);
}

function ajaxLoad(){
  setTimeout( function(){
    $.ajax({
      url: "../control/categories.php",
      type: "GET",
      success: function(datas){
        console.log('prout');
      },
      error : function(){
        console.log('merde');
      }
    });
  }, 5000);

}

$(document).ready(function(){
  console.log('ready');
  $('#message').remove();

  $('#login').center();
  $('#selectType').change(function(){
    $('#fieldAdmin').remove();
    buildHtml($(this).val());
  });

  $('#selectType').change(function() {
    if($(this).val() == "papers"){
      ajaxLoad();
    }
  });
});
