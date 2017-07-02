<?php include "../bd/pdo.php" ?>


<?php
$request = $db->query("SELECT * FROM categories");
$arrayCat = [];
foreach ($request as $key => $value) {
  $arrayCat = [$value];
}
echo $arrayCat;
?>
