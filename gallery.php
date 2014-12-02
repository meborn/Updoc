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
					<div id="gallery">

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
	<script src="javascript/galleria/galleria-1.4.2.min.js"></script>
	<script>
		Galleria.loadTheme('javascript/galleria/themes/classic/galleria.classic.js');
	 	Galleria.run('.galleria');
	</script>
</html>