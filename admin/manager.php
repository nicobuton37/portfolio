<?php include "../bd/pdo.php"; ?>
<?php include "../inc/headerAdmin.php"; ?>
<?php include "../function/display.php"; ?>

<div class="container-fluid">
  <h1>Welcome to the Manager !!!</h1>
  <div class="adminNavigation">
    <a href="index.php" class="btn btn-info">Log out</a>
    <a href="menu.php" class="btn btn-info">Add</a>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <h2>Languages</h2>
      <div class="languagesList">
        <div class="row">
          <div class="col-xs-6 col-md-3" id="languageList">
            <form action="menu.php" method="post">

                <?php
                // request for add language
                $request = $db->query('SELECT * FROM languages');
                // call function for traitment request for add
                languagesList($request);
                // delete row in database
                if(isset($_GET['id'])){
                    $delete = $db->query('DELETE FROM languages WHERE id="' . $_GET['id'] . '"');
                    header('Location:manager.php');
                }
                ?>

            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <h2>Projects</h2>
      <form action="menu.php" method="post">
        <?php
        $request = $db->query('SELECT * FROM projects');
        projectsList($request);
        if(isset($_GET['id'])){
            $delete = $db->query('DELETE FROM projects WHERE id="' . $_GET['id'] . '"');
            header('Location:manager.php');
        }
         ?>
      </form>
    </div>
    <div class="col-sm-3">
      <h2>Papers</h2>
      <form action="menu.php" method="post">
          
      </form>
    </div>
    <div class="col-sm-3">
      <h2>Categories</h2>
      <form action="menu.php" method="post">

      </form>
    </div>

  </div>
</div>

<?php include "../inc/footerAdmin.php"; ?>
