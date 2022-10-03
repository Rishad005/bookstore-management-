<?php
$nameErr="";
$emailErr="";
if(isset($_POST['submit'])){
	if(empty($_POST['name']))
	{
		$nameErr= " *Name should not be empty";
	}
	if(empty($_POST['email']))
	{
		$emailErr= " *Email should not be empty";
	}
}
?>
<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row" >
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form actions="" method="POST" class="form-horizontal">
			  	<fieldset>
				    <legend>Contact Us</legend>
				    <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
					<form method="post">
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name<font color=red>*</font></label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" name="name" id="inputName" placeholder="Name"><font color="red"><?php echo $nameErr; ?></font>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email <font color=red>*</font></label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email"><font color="red"><?php echo $emailErr; ?></font>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Textarea <font color=red>*</font></label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				      	</div>
				    </div>
                    </form>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
	
<?php
  require_once "./template/footer.php";
?>
<style>
	body{
		background-image:url(contactus.jpg);
		background-size:100%;
	}
    </style>


