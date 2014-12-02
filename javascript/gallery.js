$(document).ready(function() {
	console.log('Hello World');
	var path;
	var i;
	var max;
	
	$('#gallery-repair').click(function() {
		$('#overlay').toggle();
		$('#gallery-img-container').empty();
		path = 'images/gallery/repair/repair-';
		max = 5;
		i = 1;
		$('#gallery-img-container').append('<img src=' + path + i + '.jpg >');
		$('#gallery-thumb-container').empty();
		for(var n=1; n <=max; n++) {
			$('#gallery-thumb-container').append($('<img>', {
					src: path+n+'.jpg',
					id: 'thumb-'+n
				})
			);
		}

		$('#gallery-thumb-container img').click(function() {
			var id = $(this).attr('id');
			for(var k = 1; k <=max; k++) {
				var check_id = 'thumb-'+k;
				if(id === check_id) {
					console.log('image' + k + 'was clicked');
					$('#gallery-img-container').empty();
					$('#gallery-img-container').append('<img src=' + path + k + '.jpg >');
					i = k;
				}
			}
		});
		
	});

	$('#gallery-chevy').click(function() {
		$('#overlay').toggle();
		$('#gallery-img-container').empty();
		path = 'images/gallery/chevy/chevy-';
		max = 1;
		i = 1;
		$('#gallery-img-container').append('<img src=' + path + i + '.jpg>');
		$('#gallery-thumb-container').empty();
		for(var n=1; n <=max; n++) {
			$('#gallery-thumb-container').append($('<img>', {
					src: path+n+'.jpg',
					id: 'thumb-'+n
				})
			);
		}

		$('#gallery-thumb-container img').click(function() {
			var id = $(this).attr('id');
			for(var k = 1; k <=max; k++) {
				var check_id = 'thumb-'+k;
				if(id === check_id) {
					console.log('image' + k + 'was clicked');
					$('#gallery-img-container').empty();
					$('#gallery-img-container').append('<img src=' + path + k + '.jpg >');
					i = k;
				}
			}
		});
	});
	$('#gallery-recover').click(function() {
		$('#overlay').toggle();
		$('#gallery-img-container').empty();
		path = 'images/gallery/recover/recover-';
		max = 2;
		i = 1;
		$('#gallery-img-container').append('<img src=' + path + i + '.jpg>');
		$('#gallery-thumb-container').empty();
		for(var n=1; n <=max; n++) {
			$('#gallery-thumb-container').append($('<img>', {
					src: path+n+'.jpg',
					id: 'thumb-'+n
				})
			);
		}

		$('#gallery-thumb-container img').click(function() {
			var id = $(this).attr('id');
			for(var k = 1; k <=max; k++) {
				var check_id = 'thumb-'+k;
				if(id === check_id) {
					console.log('image' + k + 'was clicked');
					$('#gallery-img-container').empty();
					$('#gallery-img-container').append('<img src=' + path + k + '.jpg >');
					i = k;
				}
			}
		});
	});

	$('#gallery-prev').click(function() {
		console.log('prev button clicked');
		if(i == 1) {
			i = max;
			$('#gallery-img-container img').attr('src', path + i + '.jpg');
		}
		else {
			i --;
			$('#gallery-img-container img').attr('src', path + i + '.jpg');
		}

	});
	$('#gallery-next').click(function() {
		if(i == max) {
			i = 1;
			$('#gallery-img-container img').attr('src', path + i + '.jpg');
		}
		else {
			i ++;
			$('#gallery-img-container img').attr('src', path + i + '.jpg');
		}
	});
	$('#gallery-exit').click(function() {
		$('#overlay').toggle();
	});
});