$(document).ready(function(){
  $("#farm_map").ready(function(){var myCenter = new google.maps.LatLng(lat,lon);
  	var mapCanvas = document.getElementById("farm_map");
  	var mapOptions = {center: myCenter, zoom: 8};
  	var map = new google.maps.Map(mapCanvas, mapOptions);
  	var marker = new google.maps.Marker({position:myCenter});
  	marker.setMap(map);
  });
});

$(document).ready(function(){
  $(".orderPresentation").click(function(e){
    e.preventDefault();
    var presentation = $(this).data("presentation-id");
    addToCart(presentation);
  });
});