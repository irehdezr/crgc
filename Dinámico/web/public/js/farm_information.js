$("#farm_map").ready(function(){var myCenter = new google.maps.LatLng(lat,lon);
	var mapCanvas = document.getElementById("farm_map");
	var mapOptions = {center: myCenter, zoom: 8};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);
});

$.ajaxSetup({

  error: function( jqXHR, textStatus, errorThrown ) {

          if (jqXHR.status === 0) {

            alert('Not connect: Verify Network.');

          } else if (jqXHR.status == 404) {

            alert('Requested page not found [404]');

          } else if (jqXHR.status == 500) {

            alert('Internal Server Error [500].');

          } else if (textStatus === 'parsererror') {

            alert('Requested JSON parse failed.');

          } else if (textStatus === 'timeout') {

            alert('Time out error.');

          } else if (textStatus === 'abort') {

            alert('Ajax request aborted.');

          } else {

            alert('Uncaught Error: ' + jqXHR.responseText);

          }

        }
});
$(document).ready(function(){
	$(".orderPresentation").click(function(e){
		e.preventDefault();
		var data = $(this).data("presentation-id");
		var url = "/product/addToCart/" + data;
		$.post({
			url: url,
			data: {id: data}
			})
			.done( function(result) {
            	location.href = result;
			});	
	});
});