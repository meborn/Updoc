<?php
if($_POST["message"]) {
    mail("mneborn@gmail.com", "Form to email message", $_POST["message"], "From: meborn@dmail.dixie.edu");
}
?>
<!DOCTYPE>
<html>
	<head>
		<title>Contact | Upholstery Doctor</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/contact-style.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
	</head>
	<body>
		<?php $page = 'Contact' ?>
		<div id="container">
			<div id="header-container">
				<div id="header-nav">
					<?php include('includes/header.php'); ?>
				</div>
				<div id="header-intro">
					<h1>Say Hello.</h1>
				</div>
			</div>

			<div id="content">
				<div id="contact-content">
					
				</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
		<!-- <div id="contact-container">
				<div id="header-container">
					<div id="header-intro">
						<h3>Say Hello.</h3>
					</div>
				</div>
				<div id="content">
					<div id="contact-content">
						<div id="contact-address">
							<h1>Address & Directions:</h1>
							<h2>Upholstery Doctor</h2>
							<em>1478 South 270 East</em>
							<br>
							<em>St. George, Utah 84790</em>
							<h2>(435) 705-0675</h2>
							<div id="map_canvas">

							</div>
						</div>
						<div id="contact-form">
							<h1>Contact Us:</h1>
							<form method="post" action="contact.php">
								<label>Name</label>
								<input type="text" size="25" >
								<label>Email Address</label>
								<input type="text" size="25" >
								<label>Contact Number</label>
								<input type="text" size="25" >
								<label>Message</label>
								<textarea name="message"></textarea>
							</form>
						</div>
					</div>
				</div>
		</div> -->
		<!-- <form method="post" action="contact.php">
			<textarea name="message"></textarea>
			<input type="submit">
		</form> -->
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/contact.js"></script>
	<script src="javascript/mobile-menu.js"></script>
</html>