$(document).ready(function() {
	console.log("READY!!!!!!!!!!!");
	$('#auto img').mouseover(function() {
		$('#auto img').attr('src', 'images/services/auto-after.jpg');
		$('#auto-state').text('After');
	});
	$('#auto img').mouseout(function() {
		$('#auto img').attr('src', 'images/services/auto-before.jpg');
		$('#auto-state').text('Before');
	})
	$('#furniture img').mouseover(function() {
		$('#furniture img').attr('src', 'images/services/chair-after.jpg');
		$('#furniture-state').text('After');
	});
	$('#furniture img').mouseout(function() {
		$('#furniture img').attr('src', 'images/services/chair-before.jpg');
		$('#furniture-state').text('Before');
	});
});