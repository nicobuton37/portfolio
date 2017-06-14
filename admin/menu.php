<?php include "../inc/headerAdmin.php"; ?>
<?php include "../bd/pdo.php"; ?>
<?php include "../control/languages.php"; ?>
<?php include "../control/project.php"; ?>

<div class="container-fluid" id="bodyMenu">
  <h1>You are the one !!!</h1>
  <div class="form-group row">
    <div class="col-sm-8">
      <select id="selectType" class="btn btn-success">
        <option value="default" selected>Types</option>
        <option value="projects">Projects</option>
        <option value="languages">Languages</option>
        <option value="papers">Papers</option>
        <option value="categories">Categories</option>
      </select>
    </div>
    <div class="col-sm-4">
      <a href="index.php" class="btn btn-info">Log out</a>
      <a href="manager.php" class="btn btn-info">Manager</a>
    </div>
  </div>
<div class="row">
  <div class="col-sm-12">
    <form class="typeForm" action="menu.php" method="post" enctype="multipart/form-data">
      <div class="form-group" id="containerInput">

      </div>
    </form>
  </div>
</div>

</div>


<?php include "../inc/footerAdmin.php"; ?>
