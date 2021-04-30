<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/signin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
	<title>Signup</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark">
			<a href="" class="navbar-brand ml-5">
				<div>
					<img src="<?php echo base_url();?>assets/images/brand.svg" width="150px">
				</div>
			</a>
		  	<div class="collapse navbar-collapse" id="myNav">
	  				<h6 class="ml-auto mr-5" style="font-weight: normal;">Have an account? <a href="<?php echo base_url();?>index.php/signin/" style="text-decoration: none;">Login your account</a></h6>
		  	</div>
	</nav>
	<section class="" style="">
		<div class="container">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-lg-4 mt-4" >
					<div id="alert" class="alert alert-danger alert-dismissible d-none" id="alert">
						<strong>Alert!</strong> This email already exist <a href="<?php echo base_url();?>index.php/signin/" class="alert-link">Log in</a>.
					</div>
					<div class="bg-light p-3" style="border-radius: 8px;">
					<form action="" id="myForm" method="post">
						<h4 class="text-center pt-3">Welcome</h4>
						<div class="form-group">
							<label>Enter your name</label>
							<input type="text" name="txt_name" id="name" class="form-control" placeholder="Enter your name" required="">
							
						</div>
						<div class="form-group">
							<label>Enter your email</label>
							<input type="email" name="txt_email" id="email" class="form-control" placeholder="Enter your email" required="">
							
						</div>
						<div class="form-group">
							<label>Enter your password</label>
							<input type="password" name="txt_pass" id="pass" class="form-control" placeholder="Enter your password" required="">
							
						</div>
						<div class="form-group">
							<input type="submit" name="btn_submit" value="Sign up to access free books" class="btn btn-block" id="btn_login" style="">
						</div>
						<div class="form-group text-center">
							<a href="<?php echo base_url();?>" style="text-decoration: none;" class="">Return to Home Page</a>
						</div>
					</form>
					</div>
					
				</div>
			</div>
		</div>
	</section>	

<input type="hidden" id="hidden_text" name="txt_hidden" value="<?php echo base_url();?>index.php/insert">
<script src="<?php echo base_url();?>assets/js/signup.js"></script>

</script>
</body>
</html>