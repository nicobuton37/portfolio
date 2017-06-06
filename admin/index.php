<?php include "../inc/headerAdmin.php"; ?>
<?php include "../auth/admin.php"; ?>

<div class="container-fluid">
  <h1>Prouved me, are you Admin ?</h1>

        <form action="index.php" method="post">
          <div class="form-group" id="login">
            <label for="name">Login</label>
            <input class="form-control" type="text" name="name" value="">
            <label for="password">Password</label>
            <input type="password" name="password" value="" class="form-control">
            <div class="form-group">
              <button type="submit" class="btn btn-success">Go</button>
            </div>
          </div>



        </form>

</div>


<?php include "../inc/footerAdmin.php"; ?>
