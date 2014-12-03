<!DOCTYPE>
<html>
	<head>
		<title>Gallery | Upholstery Doctor</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/gallery-style.css">
	</head>
	<body>
		<?php $page = 'Gallery' ?>
		<div id="container">
			<div id="header-container">
				<div id="header-nav">
					<?php include('includes/header.php'); ?>
				</div>
				<div id="header-intro">
					<h1>Our Work.</h1>
				</div>
			</div>

			<div id="content">
				<div id="gallery-content">
					<div class="gallery-btn" id="gallery-repair">
						<img src="images/gallery/repair/repair-xs.jpg" >
						<h2>Repairs</h2>
					</div>
					<div class="gallery-btn" id="gallery-chevy">
						<img src="images/gallery/chevy/chevy-xs.jpg" >
						<h2>36 Chevy</h2>
					</div>
					<div class="gallery-btn" id="gallery-recover">
						<img src="images/gallery/recover/recover-xs.jpg" >
						<h2>Recover</h2>
					</div>
					<div class="gallery-btn" id="gallery-boat">
						<img src="images/gallery/boat/boat-xs.jpg" >
						<h2>Boats</h2>
					</div>
					<div class="gallery-btn" id="gallery-furniture">
						<img src="images/gallery/furniture/furniture-xs.jpg" >
						<h2>Furniture</h2>
					</div>
					<div class="gallery-btn" id="gallery-custom">
						<img src="images/gallery/custom/custom-xs.jpg" >
						<h2>Custom</h2>
					</div>
					<!-- <div id="gallery">
						<div class="gallery-nav-btn" id="gallery-prev">
							<
						</div>
						<div id="gallery-img-container">
							<img src="images/gallery/gallery-1.jpg">
						</div>
						<div class="gallery-nav-btn" id="gallery-next">
							>
						</div>
						<div id="gallery-thumb">

						</div>
					</div> -->
				</div>
			</div>
		</div>
		<div id="overlay">
			<div id="overlay-container">
				<div id="gallery">
						<div id="gallery-left">
							<div id="gallery-img-container">
							<!-- <img src="images/gallery/repair/repair-1.jpg"> -->
							</div>
							<div id="gallery-nav">
								<div class="gallery-nav-btn" id="gallery-prev">
									Back
								</div>
								<div class="gallery-nav-btn" id="gallery-next">
									Next
								</div>
							</div>
							
						</div>
						<div id="gallery-right">
							<div id="gallery-exit">
								x
							</div>
							<div id="gallery-thumb-container">

							</div>
						</div>
						
					</div>
			</div>
		</div>
		<?php include('includes/mobile-menu.php'); ?>
		<!-- <div id="gallery-container">
			<div id="header-container">
				<div id="header-intro">
					<h3>Our Work.</h3>
				</div>
			</div>
			<div id="content">
				<div class="galleria">
					<img src="images/services/chair-before.jpg" data-title="Before Chair" data-description="Before Upholstery">
					<img src="images/services/chair-after.jpg" data-title="After Chair" data-description="After Upholstery">
				
				</div>
			</div>
		</div> -->
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/mobile-menu.js"></script>
	<script src="javascript/gallery.js"></script>
</html>