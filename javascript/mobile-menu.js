$(document).ready(function() {
	console.log('READY!!!!!!!!');
	var show = false;
	$('#mobile-menu-icon').click(function() {
		console.log('mobile menu button clicked');
		// $('#mobile-menu').css('visibility', 'visible');
		$('#mobile-menu').toggle('slow');
		$('#mobile-menu-icon').toggleClass('orange');
	});

	$('#mobile-exit').click(function() {
		$('#mobile-menu').css('visibility', 'hidden');
	})
});