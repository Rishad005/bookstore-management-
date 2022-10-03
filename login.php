
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

<style>
	body{
		background-image:url(login.jpg);
		background-size:100%;

	}
   </style>

  <body>
  <?php
$title = "Login ";
?>
<div>
    <p><b><center>USER LOGIN</center></b></p>
<form class="form-horizontal" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="control-label col-md-4">username <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="text" name="name" required class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4">Password <font color=red>*</font></label>
			<div class="col-md-4">
				<input type="password" name="pass" required class="form-control">
			</div>
		</div><p><center> Don't have an account..!&nbsp &nbsp<a href="register.php">Register here</a></center></p>
		<div>
			<center>
		    <input type="submit" name="submit" value="Login" class="btn btn-primary">
			<input type="reset" name="cancel" value="cancel"  class="btn btn-default">
            </center>
        </div>
	</form>
</div>
<?php
require_once "./template/footer.php";
?>
