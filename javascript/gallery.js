$(document).ready(function() {
	console.log('Hello World');
	var path;
	var i;
	var max;
	// gallery logic
	var display_gallery = function(image_path, gallery_max) {
		//toggle gallery to display
		$('#overlay').toggle();
		//fix for scrolling issue
		$('body').toggleClass("body-no-scroll");
		//empty img container and seet intitial variables
		$('#gallery-img-container').empty();
		path = image_path;
		max = gallery_max;
		i = 1;
		$('#gallery-img-container').append('<img src=' + path + i + '.jpg >');
		//empty thumbnail container and add thumbnails
		$('#gallery-thumb-container').empty();
		for(var n=1; n <=max; n++) {
			$('#gallery-thumb-container').append($('<img>', {
					src: path+n+'.jpg',
					id: 'thumb-'+n
				})
			);
		}
		//add click function to thumbnails
		$('#gallery-thumb-container img').click(function() {
			var id = $(this).attr('id');
			for(var k = 1; k <=max; k++) {
				var check_id = 'thumb-'+k;
				if(id === check_id) {
					console.log('image' + k + 'was clicked');
					$('#gallery-img-container img').attr('src', path + k + '.jpg');
					i = k;
				}
			}
		});
	}
	// start gallery buttons click functions
	$('#gallery-repair').click(function() {
		var image_path = 'images/gallery/repair/repair-';
		var gallery_max = 13;
		display_gallery (image_path, gallery_max);
		
	});

	$('#gallery-chevy').click(function() {
		var image_path = 'images/gallery/chevy/chevy-';
		var gallery_max = 5;
		display_gallery (image_path, gallery_max);
	});

	$('#gallery-recover').click(function() {
		var image_path = 'images/gallery/recover/recover-';
		var gallery_max = 9;
		display_gallery (image_path, gallery_max);
	});
	$('#gallery-boat').click(function() {
		var image_path = 'images/gallery/boat/boat-';
		var gallery_max = 14;
		display_gallery (image_path, gallery_max);
	});
	$('#gallery-furniture').click(function() {
		var image_path = 'images/gallery/furniture/furniture-';
		var gallery_max = 12;
		display_gallery (image_path, gallery_max);
	});
	$('#gallery-custom').click(function() {
		var image_path = 'images/gallery/custom/custom-';
		var gallery_max = 9;
		display_gallery (image_path, gallery_max);
	})
	// end gallery buttons click functions

	// start gallery navigation buttons
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
		$('body').toggleClass("body-no-scroll");
	});
	// end gallery navigation buttons
});