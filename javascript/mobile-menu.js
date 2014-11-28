$(document).ready(function() {
	console.log('READY!!!!!!!!');
	$('#mobile-menu-btn').click(function() {
		console.log('mobile menu button clicked');
		$('#mobile-menu').css('visibility', 'visible');
	});

	$('#mobile-exit').click(function() {
		$('#mobile-menu').css('visibility', 'hidden');
	})
});