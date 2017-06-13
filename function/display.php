<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  while ($datas = $request->fetch()) {
    echo '<div class="target"><input type="hidden" value="'
    . $datas['id'] . '" name="languageId"><a href="#" class="thumbnail"><img src="../img/'
    . $datas['image'] . '"></a>'
    . '<div class="caption"><p><a href="manager.php?id=' . $datas['id'] . '" class="btn btn-primary" role="submit">Remove</a></div></div>';
  }
}

function projectsList($request){
  while ($datas = $request->fetch()) {
    echo 'prout';
  }
}
