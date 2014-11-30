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
			<!-- <img src="images/home/home-page-photo.jpg"> -->
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
						<div id="res-circle" class="my-circles">
							<span>Residential</span>
						</div>
						<div id="bus-circle" class="my-circles">
							<span>Commercial</span>
						</div>
						<div id="auto-circle" class="my-circles">
							<span>Automotive</span>
						</div>
					</div>
				</div>
			</div>

			<div id="content">
				<div id="home-content">
					
					<div id="scissors">
						<h4>(435) 705-0675</h4>
						<p><span>Upholstery Doctor</span> has been providing quailty upholstery services for St. George, Utah and the surrounding areas since 2005. However, we have more than <span>20 years experience</span> in the industry. We garuntee honesty and quailty. Contact us today with all of your upholstery needs.</p> 
						<div id="scissors-contact-btn">
							<!-- <a href="services.php">Our Work ></a> -->
							<a href="contact.php">Contact Us ></a>
						</div>
					</div>
					<div id="testimonial">
						<h3>What Do Our Patients Say?</h3>
						<div class="quote">
							<p>Very happy with the finished product and friendliness of the staff! Thanks so much!</p>
							<!-- <img src="images/home/stars.png" alt="five stars for quality" > -->
						</div>
						<div class="quote" id="border-quote">
							<p>Having been in the car business for 30 years it's refreshing to have good quality upholstery repair facility in St. George. Brandon and his staff have done an outstanding job with replaceing and repairing my vehicles in a timely matter and a fair price. Their work is top quality.</p>
						</div>
						<div class="quote">
							<p>Reliable, excellent quality and quick turnaround. What more can you ask for?</p>
						</div>
						<!-- <p id="customer-quote">Very happy with the finished product and friendliness of the staff! Thanks so much!</p>
						<ul><li></li><li></li><li></li></ul> -->
						<!-- <div id="quality" class="test">
							<p>Quality</p>
							<img src="images/home/stars.png" alt="five stars for quality" >
						</div>
						<div id="service" class="test">
							<p>Service</p>
							<img src="images/home/stars.png" alt="five stars for quality" >
						</div>
						<div id="time" class="test">
							<p>Timeliness</p>
							<img src="images/home/stars.png" alt="five stars for quality" >
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/mobile-menu.js"></script>
	<script src="javascript/home.js"></script>
</html>