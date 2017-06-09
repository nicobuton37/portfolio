<?php include "../inc/headerAdmin.php"; ?>
<?php include "../bd/pdo.php"; ?>
<?php include "../control/languages.php"; ?>

<div class="container-fluid" id="bodyMenu">
  <h1>You are the one !!!</h1>
  <div class="form-group row">
    <div class="col-sm-8">
      <select id="selectType" class="btn btn-success">
        <option value="projects">Projects</option>
        <option value="languages">Languages</option>
        <option value="papers">Papers</option>
      </select>
    </div>
    <div class="col-sm-4">
      <a href="index.php" class="btn btn-info">log out</a>
    </div>
  </div>
<div class="row">
  <div class="col-sm-8">
    <form class="typeForm" action="menu.php" method="post" enctype="multipart/form-data">
      <div class="form-group" id="containerInput">

      </div>
    </form>
  </div>
  <div class="col-sm-4" id="languageList">
    <form class="" action="menu.php" method="get">
      <ul class="list-group" id="list">
        <?php
        $request = $db->query('SELECT * FROM languages');
        languagesList($request);
        $name = $db->query('SELECT name FROM languages');
        removeId($name);
        ?>
      </ul>
    </form>

  </div>
</div>
</div>


<?php include "../inc/footerAdmin.php"; ?>
