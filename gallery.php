<!DOCTYPE>
<html>
	<head>
		<title>Gallery | Upholstery Doctor</title>
		<link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/gallery-style.css">
	</head>
	<body>
		<div id="gallery-container">
			<div id="header-container">
				<?php include('includes/header.php'); ?>
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
		</div>
	</body>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="javascript/mobile-menu.js"></script>
	<script src="javascript/galleria/galleria-1.4.2.min.js"></script>
	<script>
		Galleria.loadTheme('javascript/galleria/themes/classic/galleria.classic.min.js');
		Galleria.run('.galleria');
	</script>
</html>