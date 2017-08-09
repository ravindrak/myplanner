<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" />
</head>
<body>

<div id="loginContainer">
	<h1>IR Registration</h1>

	<div id="body">
		<form method="post" action="<?php echo base_url();?>user/registerNewIR">
		<p>Enter your registration details.</p>
		<?php
			if($this->session->userdata('error')){
				echo $this->session->userdata('error');
				$this->session->unset_userdata('error');
			}
		?>

		<input type="text" class="full-width formInput" id="irid" name="irid" value="" placeholder="Your IR ID Ex. IN789435">

		<input type="text" class="full-width formInput" id="username" name="username" value="" placeholder="Choose a Username">

		<input type="password" class="full-width formInput" id="password" name="password" value="" placeholder="Choose a password">
		<input type="password" class="full-width formInput" id="confirmPassword" name="confirmPassword" value="" placeholder="Retype your password">

		<input type="text" class="full-width formInput" id="email" name="email" value="" placeholder="Valid Email address">
		<input type="text" class="full-width formInput" id="mobile" name="mobile" value="" placeholder="Mobile number">

		<p>
			<input type="submit" class="formInput btn btn-primary" value="Register" id="btnRegister">
			<input type="Reset" class="formInput btn btn-primary" value="Reset">

			<a href="<?php echo base_url();?>user/login"> Already Registered? </a>
		</p>
	</div>
</div>

</body>
</html>