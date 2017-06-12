<?php
function message($message, $mode){
    echo '<div id="message" class="alert alert-' . $mode . '" role="alert">' . $message . '</div>';
}

function languagesList($request){
  while ($datas = $request->fetch()) {
    echo '<div class="target"><input type="hidden" value="'
    . $datas['id'] . '" name="languageId"><a href="#" class="thumbnail"><img src="../img/'
    . $datas['image'] . '"></a>'
    . '<div class="caption"><p><a href="manager.php" class="btn btn-primary" role="submit">Remove</a></div></div>';
  }
}

function removeId($id){
  $datas = $id->fetch();
  if(isset($_GET['elementList'])){
    var_dump($id);
  }
}
