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
		<div class="tableContainer" style="float:left;width:100%;border:1px solid #cc;">
			<div class="row" style="float:left;width:100%;border:0px solid #cc;">
				<div class="tblHeaderRow" style="float:left">
					<div class="tableCell" style="float:left;">#</div>
					<div class="tableCell" style="float:left;">Name</div>
					<div class="tableCell" style="float:left;">Location</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('user/footer'); ?>
</div>

</body>
</html>