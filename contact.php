<?php
$sent_email = false;
if($_POST["message"]) {
	$sent_email = true;
    $mail_sent = mail("mneborn@gmail.com", $_POST["name"], $_POST["phone"] . $_POST["message"], $_POST["email"]);
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
				<div id="email-message">
					<h1>
					<?php
						if($sent_email) {
							echo $mail_sent ? "Your message has been sent. Thank you for contacting us." : "Mail failed";
						}
					?>
					</h1>
				</div>
				<div id="contact-content">
					 
					<div id="contact-info">
						<div id="contact-address">
							<h1>Address & Directions</h1>
							<h2>Upholstery Doctor</h2>
							<em>1478 South 270 East</em>
							<br>
							<em>St. George, Utah 84790</em>
							<h3>(435) 705-0675</h3>
							<div id="map_canvas">

							</div>
						</div>
					</div>
					<form id="contact-form" method="post" action="contact.php">
						<h1>Ask Us A Question</h1>
						Name<br>
						<input id="contact-name" class="contact-input" type="text" name="name"><br>
						Phone<br>
						<input id="contact-phone" class="contact-input" type="text" name="phone"><br>
						Email<br>
						<input id="contact-email" class="contact-input" type="text" name="email"><br>
						Message<br>
						<textarea rows="6" cols="50" id="contact-message" class="contact-input" name="message"></textarea>
						<br>
						<input id="contact-submit" type="submit" value="Send">
					</form>
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