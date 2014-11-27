
function initialize() {
				var mapCanvas = document.getElementById('map_canvas');
				var myLatlng = new google.maps.LatLng(37.0828974, -113.5786809);
				var mapOptions = {
					center: myLatlng,
					zoom: 15,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(mapCanvas, mapOptions);
				var marker = new google.maps.Marker({
				    position: myLatlng,
				    map: map,
				    title:"Upholstery Doctor"
				});
				marker.setMap(map);
			}
google.maps.event.addDomListener(window, 'load', initialize);			