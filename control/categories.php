<?php include "../bd/pdo.php"; ?>
<?php
if(isset($_POST['categorie'])){
  $name = $_POST['categorie'];
  var_dump($name);
   $request = $db->prepare("INSERT INTO categories(name) VALUES(:name)");
   $request->execute(array(
     'name' => $name
   ));
}
