<?php include "../bd/pdo.php"; ?>
<?php include "../function/alert.php"; ?>
<?php
if(isset($_FILES['languages']) && $_FILES['languages']['error'] == 0){
  if ($_FILES['languages']['size'] <= 1000000){
    $infosfichier = pathinfo($_FILES['languages']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees)){
      move_uploaded_file($_FILES['languages']['tmp_name'], '../img/' . basename($_FILES['languages']['name']));
      $message = 'Your image has been upload successfull !!!';
      message($message);
    }
  }
}
  // move_uploaded_file($_FILES['languages'], $path);
