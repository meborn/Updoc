<?php
$nameErr = $emailErr = $phoneErr = $messageErr = "";
$name = $email = $phone = $message = "";
$final_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$message_sent = false;
	if(empty($_POST["name"])) {
		$nameErr = "* We need your name!";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $nameErr = "* Only letters and white space allowed"; 
		}
	}

	if(empty($_POST["email"]) && empty($_POST["phone"])) {
		$emailErr = "* We need your email or phone number to contact you!";
	} else {
		if(empty($_POST["email"])) {
			$emailErr = "";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "* Invalid email format"; 
		}
	}

		if(empty($_POST["phone"])) {
			$phoneErr = "";
		} else {
			$phone = test_input($_POST["phone"]);
			$regex = "/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i";
			if(!preg_match($regex, $phone)) {
				$phoneErr = "* Invalid Phone Number";
			}
		}
	}

	if(empty($_POST["message"])) {
		$messageErr = "";
	} else {
		$message = test_input($_POST["message"]);
	}

	if($nameErr == "" && $emailErr == "" && $phoneErr == "") {
		$final_message = "$name \r $phone \r $email \r $message" ;
		$message_sent = mail('mneborn@gmail.com', 'UPHOLSTERY DOCTOR CONTACT', $final_message);
	} else {
		$message_sent = false;
	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<!DOCTYPE html>
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
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								if($message_sent) {
									echo "Your message has been sent.";
									$name = $email = $phone = $message = "";
								}
								else {
									echo "Your message failed. Please check for errors";
								}
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
					<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<h1>Ask Us A Question</h1>
						<span class="label">Name</span>
						<span class="error"><?php echo $nameErr;?></span><br>
						<input id="contact-name" class="contact-input" type="text" name="name" value="<?php echo $name;?>"><br>

						<span class="label">Phone</span>
						<span class="error"><?php echo $phoneErr;?></span><br>
						<input id="contact-phone" class="contact-input" type="text" name="phone" value="<?php echo $phone;?>"><br>
						
						<span class="label">Email</span>
						<span class="error"><?php echo $emailErr;?></span><br>
						<input id="contact-email" class="contact-input" type="text" name="email" value="<?php echo $email;?>"><br>
						
						<span class="label">Message</span>
						<br>
						<textarea rows="6" cols="50" id="contact-message" class="contact-input" name="message" value="<?php echo $message;?>"></textarea>

						<br>
						<input id="contact-submit" type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/contact.js"></script>
	<script src="javascript/mobile-menu.js"></script>
</html>