$(document).ready(function() {
	var i = 0;
	var testmonial = [ "Very happy with the finished product and friendliness of the staff! Thanks so much!",
					"Reliable, excellent quality and quick turnaround. What more can you ask for?",
					"Having been in the car business for 30 years it's refreshing to have good quality upholstery repair facility in St. George. Brandon and his staff have done an outstanding job with replaceing and repairing my vehicles in a timely matter and a fair price. Their work is top quality."];
	setInterval(function() {
		$('#customer-quote').fadeOut("slow", function() {
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