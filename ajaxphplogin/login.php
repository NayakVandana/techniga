<?php
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajax Signup</title>
    
</head>
<body>
<?php
include "header.php";

?>
  <div class="container">
  <div class="row">
  <div class="col-md-5 mx-auto mt-5">
  <?php if(isset($_SESSION['created'])): ?>
    <div class="alert alert-success">
    <?php echo $_SESSION['created']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['created']); ?>
  <div class="card">
  <div class="card-header">
  <h3>Login User</h3>
  </div>
  <div class="card-body">
  <form>
  <div class="form-group">
  <div class="form-group">
  <input type="email" id="email" class="form-control email" placeholder="Email">
  <div class="invalid-feedback emailError" style="font-size:16px;">Email is required</div>
  </div>
  <br>
  <!-- Close form-group -->
  <div class="form-group">
  <input type="password" id="password" class="form-control password" placeholder="Password">
  <div class="invalid-feedback passwordError" style="font-size:16px;">Password is required</div>
  </div>
  <br>
  <!-- Close form-group -->
  <div class="form-group">
   <button type="button" id="login" class="btn btn-info">Login &rarr;</button>
   <a href="index.php" style="float:right;margin-top:10px;">Create new account</a>
  </div>
  <!-- Close form-group -->
  </form>
  </div>
  <!-- Close card-body -->
  </div>
  <!-- Close card -->
  </div>
  <!-- Close col-md-5 -->
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->

  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>
</body>
</html>