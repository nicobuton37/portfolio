<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  while ($datas = $request->fetch()) {
    echo '<li class="list-group-item">' . $datas['name'] . '<img src="../img/' . $datas['image'] . '"></li>';
  }

}
