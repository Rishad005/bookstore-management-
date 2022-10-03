<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>

	<body>

<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6">
				<h3><b><center>USER REGISTRATION</center></b></h3>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>
					</div>

					<p><center>  Already have an account..! &nbsp&nbsp<a href="login.php">Login here</a></center></p>
		<br/>
        <div>
            <center>
		        <input type="submit" name="submit" value="Register" class="btn btn-primary">
                <button type="reset" class="btn btn-default">Cancel</button>
            </center>
        </div>
				</form>
			</div>

   <style>
	body {
		background-image:url(login.jpg);
		background-size:100%;
	}

		.login-box{
			max-width: 1200px;
			float: none;
			margin-left: 500px;
		}
</style>
  </body>