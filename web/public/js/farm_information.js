$(document).ready(function(){
  $("#farm_map").ready(function(){
    var myCenter = new google.maps.LatLng(9.931525, -84.013366);
    var farm = new google.maps.LatLng(lat,lon);
  	var mapCanvas = document.getElementById("farm_map");
  	var mapOptions = {center: myCenter, zoom: 7};
  	var map = new google.maps.Map(mapCanvas, mapOptions);
  	var marker = new google.maps.Marker({position:farm});
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