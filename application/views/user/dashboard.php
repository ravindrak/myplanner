<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?php echo base_url()?>public/css/style.css" />
</head>
<body>

<div id="container">
	<h1>Dashboard</h1>

	<div id="body">
		<p>Contacts: <?php echo $contactsCount;?></p>
		<p>Plans: <?php echo $plansCount;?></p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

	</div>

	<?php $this->load->view('user/footer'); ?>
</div>

</body>
</html>