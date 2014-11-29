<!DOCTYPE html>
<html>
	<head>
		<title>Services | Upholstery Doctor</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/services-style.css">
	</head>
	<body>
		<?php $page = 'Services' ?>
		<div id="container">
			<div id="header-container">
				<div id="header-nav">
					<?php include('includes/header.php'); ?>
				</div>
				<div id="header-intro">
					<h1>What Do We Do?</h1>
				</div>
			</div>

			<div id="content">
				<div id="services-content">
					<div id="auto">
						<img src="images/services/auto-before.jpg" alt="before picture of automobile" >
						<span id="auto-state-before" class="auto-state-btn">
							Before
						</span>
						<span id="auto-state-after" class="auto-state-btn">
							After
						</span>
						<h1>Automotive</h1>
						<ul>
							<li><span>Leather/Vinyl/Fabric Repairs</span></li>
							<li><span>Custom Interiors</span></li>
							<li><span>Factory Seat Covers</span></li>
							<li><span>Seat Heaters</span></li>
							<li><span>Convertiable Tops</span></li>
							<li><span>ATVs</span></li>
							<li><span>RVs</span></li>
							<li><span>Boats</span></li>
						</ul>
						<span class="service-state" id="auto-state">
							Before
						</span>
						<a href="#">Get A Quote ></a>
					</div>
					<div id="furniture">
						<img src="images/services/chair-before.jpg" alt="before picture of automobile" >
						<span id="furniture-state-before" class="auto-state-btn">
							Before
						</span>
						<span id="furniture-state-after" class="auto-state-btn">
							After
						</span>
						<h1>Furniture</h1>
						<ul>
							<li><span>Leather/Vinyl/Fabric Repairs</span></li>
							<li><span>Custom Upholstery</span></li>
							<li><span>Custom Furniture</span></li>
							<li><span>Seat Cushions</span></li>
							<li><span>Furniture Repair</span></li>
							<li><span>Slip Covers</span></li>
							<li><span>Pillows</span></li>
						</ul>
						<span class="service-state" id="furniture-state">
							Before
						</span>
						<a href="#">Get A Quote ></a>
					</div>
				</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
		<!-- <div id="services-container">
			<div id="header-container">
				
				<div id="header-intro">
					<h3>WHAT DO WE DO?</h3>
				</div>
			</div>
			<div id="content">
				<div id="services-content">
					<div id="auto">
						<img src="images/services/auto-before.jpg" alt="before picture of automobile" >
						<h1>Automotive</h1>
						<ul>
							<li><span>Leather/Vinyl/Fabric Repairs</span></li>
							<li><span>Custom Interiors</span></li>
							<li><span>Factory Seat Covers</span></li>
							<li><span>Seat Heaters</span></li>
							<li><span>Convertiable Tops</span></li>
							<li><span>ATVs</span></li>
							<li><span>RVs</span></li>
							<li><span>Boats</span></li>
						</ul>
						<span class="service-state" id="auto-state">
							Before
						</span>
						<a href="#">Get A Quote ></a>
					</div>
					<div id="furniture">
						<img src="images/services/chair-before.jpg" alt="before picture of automobile" >
						<h1>Furniture</h1>
						<ul>
							<li><span>Leather/Vinyl/Fabric Repairs</span></li>
							<li><span>Custom Upholstery</span></li>
							<li><span>Custom Furniture</span></li>
							<li><span>Seat Cushions</span></li>
							<li><span>Furniture Repair</span></li>
							<li><span>Slip Covers</span></li>
							<li><span>Pillows</span></li>
						</ul>
						<span class="service-state" id="furniture-state">
							Before
						</span>
						<a href="#">Get A Quote ></a>
					</div>
				</div>
			</div>
		</div> -->
		

	</body>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	 <script src="javascript/mobile-menu.js"></script>
	 <script src="javascript/services.js"></script>
</html>