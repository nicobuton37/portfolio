<?php include "../bd/pdo.php"; ?>
<?php include "../function/display.php"; ?>
<?php
if(isset($_FILES['languages']) && $_FILES['languages']['error'] == 0 && isset($_POST['name'])){
  $name = $_POST['name'];
  if ($_FILES['languages']['size'] <= 1000000){
    $infosfichier = pathinfo($_FILES['languages']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees)){
      $imageNews = $_FILES['languages']['name'];
      $extension = explode('.', $_FILES['languages']['name']);
      $extension = strtolower($extension[1]);

      $image_size = getimagesize($_FILES['languages']['tmp_name']);

      if($extension == 'png'){
        $image_copy = imagecreatefrompng($_FILES['languages']['tmp_name']);
      }else if($extension == 'jpeg' || $extension == 'jpg'){
        $image_copy = imagecreatefromjpeg($_FILES['languages']['tmp_name']);
      }else if($extension == 'gif'){
        $image_copy = imagecreatefromgif($_FILES['languages']['tmp_name']);
      }

      $new_width = 50;
      $reduce = (($new_width * 100)/ $image_size[0]);
      $new_heigth = (($image_size[1] * $reduce) / 100);

      $image_resize = imagecreatetruecolor($new_width , $new_heigth) or die ("Erreur");
      imagecopyresampled($image_resize , $image_copy, 0, 0, 0, 0, $new_width, $new_heigth, $image_size[0],$image_size[1]);
      imagedestroy($image_copy);

      $image_resize_name = explode('.', $_FILES['languages']['name']);
      $image_resize_name = time();
      imagejpeg($image_resize , '../img/'.$image_resize_name.'.'.$extension, 100);
      move_uploaded_file($_FILES['languages']['tmp_name'], '../img/' . basename($_FILES['languages']['name']));
      $image_name = $image_resize_name . '.' . $extension;
      $request = $db->prepare('INSERT INTO languages(name, image) VALUES(:name, :image)');
      $request->execute(array(
        'name' => $name,
        'image' => $image_name
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
