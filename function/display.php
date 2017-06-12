<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  while ($datas = $request->fetch()) {
    echo '<a href="#" class="thumbnail"><img src="../img/' . $datas['image'] . '"><span class="glyphicon glyphicon-remove id="removeElementList"></span></a>'; 
  }
}

function removeId($id){
  $datas = $id->fetch();
  if(isset($_GET['elementList'])){
    var_dump($id);
  }
}
