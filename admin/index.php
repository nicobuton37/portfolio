<?php include "../inc/headerAdmin.php"; ?>

<div class="container-fluid">
  <h1>Prouved me, are you Admin ?</h1>
    <div class="form-group" id="login">
        <form action="admin/index.php" method="post">
          <label for="name">Login</label>
          <input class="form-control" type="text" name="name" value="">
          <label for="password">Password</label>
          <input type="password" name="password" value="" class="form-control">
        </form>
    </div>
</div>


<?php include "../inc/footerAdmin.php"; ?>
