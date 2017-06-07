<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  $datas = $request->fetch();
  foreach ($datas as $key => $value) {
    $build = '<li class="list-group-item">' . $datas['name'] . '<img src="../img/' . $datas['image'] . '"></li>';
  }
  echo $build;
}
