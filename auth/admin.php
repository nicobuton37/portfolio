<?php
session_start();
if(isset($_POST['name']) && isset($_POST['password'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  if($name != "nicobuton370" && $password != "inferno370"){
    echo "you are not Admin !!!";
  }else{
    header('Location:menu.php');
  }
}
