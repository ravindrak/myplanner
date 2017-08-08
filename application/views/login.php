<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" />
</head>
<body>

<div id="loginContainer">
	<h1>User login</h1>

	<div id="body">
		<form method="post" action="<?php echo base_url();?>user/authenticate">
		<p>Enter your login details.</p>
		<?php
			if($this->session->userdata('error')){
				echo $this->session->userdata('error');
				$this->session->unset_userdata('error');
			}
		?>

		<input type="text" class="full-width formInput" id="username" name="username" value="" placeholder="Username">

		<input type="password" class="full-width formInput" id="password" name="password" value="" placeholder="Password">

		<p>
			<input type="submit" class="formInput btn btn-primary" value="Login">
			<input type="Reset" class="formInput btn btn-primary" value="Reset">
		</p>
	</div>
</div>

</body>
</html>