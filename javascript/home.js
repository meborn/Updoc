$(document).ready(function() {
	var i = 2;
	var testmonial = ["Well pleased!", "Very happy with the finished product and friendliness of the staff! Thanks so much!", "Reliable, excellent quality and quick turnaround. What more can you ask for?"];
	setInterval(function() {
		$('#customer-quote').fadeOut("fast", function() {
			if (i < 2) {
				$('#customer-quote').text(testmonial[i]);
				if(i === 0) {
					$('#testimonial ul li:nth-child(3)').css('color', '#333333');
					$('#testimonial ul li:nth-child(1)').css('color', '#FE8C24');
				}
				else {
					$('#testimonial ul li:nth-child(1)').css('color', '#333333');
					$('#testimonial ul li:nth-child(2)').css('color', '#FE8C25');
				}
				i++;	
			}
			else {
				$('#customer-quote').text(testmonial[i]);
				$('#testimonial ul li:nth-child(2)').css('color', '#333333');
				$('#testimonial ul li:nth-child(3)').css('color', '#FE8C24')
				i = 0;
			}
			$('#customer-quote').fadeIn();

		});
		
	}, 1000 * 5);
})