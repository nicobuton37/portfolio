<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', '');
} catch (Exception $e) {
  echo "connexion failed Erreur => " . $e->getMessage();
  die();
}
