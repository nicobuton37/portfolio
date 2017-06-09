<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  while ($datas = $request->fetch()) {
    echo '<li class="list-group-item">' . $datas['name'] . '<img id="logo" src="../img/' . $datas['image'] . '"><a href="#" id="removeElementList"><span class="glyphicon glyphicon-remove-circle"></span></a></li>';
  }
}

function removeId($name){
  $datas = $name->fetch();
  if(isset($_GET['elementList'])){
    var_dump($datas);
  }
}
