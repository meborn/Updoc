<!DOCTYPE html>
<html>
	<head>
		<title>Upholstery Doctor</title>
		<link rel="stylesheet" href="style/index.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="style/style.css" type="text/css" media="all"/>
	</head>
	<body>
		<?php $page = 'Home' ?>
		<div id="container">
			<div id="home-header-container">
				<div id="header-nav">
					<?php include('includes/header.php'); ?>
				</div>
				<div id="home-intro">
					<div id="home-intro-big">
						<h1>THE DOCTOR WILL</h1>
						<h1>SEE YOU NOW</h1>
					</div>
					<div id="home-intro-circles">
						<h2>Upholstery & Repair</h2>
						<a href="services.php">
							<div id="res-circle" class="my-circles">
								<span>Residential</span>
							</div>
						</a>
						<a href="services.php">
							<div id="bus-circle" class="my-circles">
								<span>Commercial</span>
							</div>
						</a>
						<a href="services.php">
							<div id="auto-circle" class="my-circles">
								<span>Automotive</span>
							</div>
						</a>
					</div>
					<div id="home-to-contact-btn">
						<a href="contact.php">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/mobile-menu.js"></script>
</html>