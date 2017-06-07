<?php include "../bd/pdo.php"; ?>
<?php include "../function/display.php"; ?>
<?php
if(isset($_FILES['languages']) && $_FILES['languages']['error'] == 0 && isset($_POST['name'])){
  $imageName = $_FILES['languages']['name'];
  $name = $_POST['name'];
  if ($_FILES['languages']['size'] <= 1000000){
    $infosfichier = pathinfo($_FILES['languages']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees)){
      move_uploaded_file($_FILES['languages']['tmp_name'], '../img/' . basename($_FILES['languages']['name']));
      $request = $db->prepare('INSERT INTO languages(name, image) VALUES(:name, :image)');
      $request->execute(array(
        'name' => $name,
        'image' => $imageName
      ));
      $message = 'Your image has been upload and write in database successfull !!!';
      message($message, 'success');
    }
  }
}else{
      $message = 'HOLY SHIT !!!';
      message($message, 'danger');
}
  // move_uploaded_file($_FILES['languages'], $path);
