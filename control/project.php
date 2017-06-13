<?php include "../bd/pdo.php"; ?>
<?php
if(isset($_FILES['image']) && $_FILES['image']['error'] == 0 && isset($_POST['name'])
&& isset($_POST['description']) && isset($_POST['github_link'])){
  echo 'prout';
  $name = $_POST['name'];
  $github_link = $_POST['github_link'];
  $description = $_POST['description'];
  if ($_FILES['image']['size'] <= 1000000){
    $infosfichier = pathinfo($_FILES['image']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees)){
      $imageNews = $_FILES['image']['name'];
      $extension = explode('.', $_FILES['image']['name']);
      $extension = strtolower($extension[1]);

      $image_size = getimagesize($_FILES['image']['tmp_name']);

      if($extension == 'png'){
        $image_copy = imagecreatefrompng($_FILES['image']['tmp_name']);
      }else if($extension == 'jpeg' || $extension == 'jpg'){
        $image_copy = imagecreatefromjpeg($_FILES['image']['tmp_name']);
      }else if($extension == 'gif'){
        $image_copy = imagecreatefromgif($_FILES['image']['tmp_name']);
      }

      $new_width = 50;
      $reduce = (($new_width * 100)/ $image_size[0]);
      $new_heigth = (($image_size[1] * $reduce) / 100);

      $image_resize = imagecreatetruecolor($new_width , $new_heigth) or die ("Erreur");
      imagecopyresampled($image_resize , $image_copy, 0, 0, 0, 0, $new_width, $new_heigth, $image_size[0],$image_size[1]);
      imagedestroy($image_copy);

      $image_resize_name = explode('.', $_FILES['image']['name']);
      $image_resize_name = time();
      imagejpeg($image_resize , '../img/'.$image_resize_name.'.'.$extension, 100);
      move_uploaded_file($_FILES['image']['tmp_name'], '../img/' . basename($_FILES['image']['name']));
      $image_name = $image_resize_name . '.' . $extension;

      $request = $db->prepare("INSERT INTO projects(name, github_link, description, image) VALUES(:name, :github_link, :description, :image)");
      $request->execute(array(
        'name' => $name,
        'github_link' => $github_link,
        'description' => $description,
        'image' => $image_name
      ));
    }
    }
  }
