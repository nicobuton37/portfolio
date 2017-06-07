<?php include "../inc/headerAdmin.php"; ?>
<?php include "../bd/pdo.php"; ?>
<?php include "../control/languages.php"; ?>
<div class="container-fluid">
  <h1>You are the one !!!</h1>
  <div class="form-group">
    <select id="selectType" class="btn btn-success">
      <option value="projects">Projects</option>
      <option value="languages">Languages</option>
      <option value="papers">Papers</option>
    </select>
  </div>
<form class="typeForm" action="menu.php" method="post" enctype="multipart/form-data">
  <div class="form-group" id="containerInput">

  </div>
</form>

</div>

<?php include "../inc/footerAdmin.php"; ?>
