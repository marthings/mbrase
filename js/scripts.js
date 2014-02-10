$(document).ready(function() {

  
  $('.main-slider').flexslider();
  
  if ($("#map_canvas").length>0) {
		
		var myOptions = {
	      center: new google.maps.LatLng(-34.397, 150.644),
	      zoom: 8,
	      zoom: 16,
		  scrollwheel: false,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        myOptions);

		
	}
});

