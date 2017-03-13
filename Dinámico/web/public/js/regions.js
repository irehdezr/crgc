function myMap() {
  var CostaRicaCenter = new google.maps.LatLng(9.893649, -84.079177);
  var CentralValley_Center = new google.maps.LatLng(10.006868, -84.165747);
  var CentralValley_SanJose = new google.maps.LatLng(9.750752, -84.308928);
  var CentralValley_Heredia = new google.maps.LatLng(10.048179, -83.971422);
  var CentralValley_Alajuela = new google.maps.LatLng(10.041938, -84.272807);
  var OccidentalValley_Center = new google.maps.LatLng(10.032653, -84.379900);
  var OccidentalValley_SanRamon = new google.maps.LatLng(10.111480, -84.477540);
  var OccidentalValley_Palmares = new google.maps.LatLng(9.966627, -84.461831);
  var DotaTarrazu_Este = new google.maps.LatLng( 9.602898, -83.662361);
  var DotaTarrazu_Sur = new google.maps.LatLng(9.672534, -84.133775);
  var DotaTarrazu_Center = new google.maps.LatLng(9.774115, -83.967180);
 

  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: CostaRicaCenter , zoom: 8};
  var map = new google.maps.Map(mapCanvas,mapOptions);

  var CentralValley = new google.maps.Polygon({
    path: [CentralValley_SanJose, CentralValley_Heredia, CentralValley_Alajuela],
    strokeColor: "#0000FF",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#0000FF",
    fillOpacity: 0.4
  });
  var OccidentalValley = new google.maps.Polygon({
    path: [OccidentalValley_SanRamon, OccidentalValley_Palmares, CentralValley_Alajuela],
    strokeColor: "#00FF00",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#00FF00",
    fillOpacity: 0.4
  });
  var DotaTarrazu = new google.maps.Polygon({
    path: [DotaTarrazu_Este, DotaTarrazu_Sur, CentralValley_Heredia],
    strokeColor: "#FFFF00",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#FFFF00",
    fillOpacity: 0.4
  });
  DotaTarrazu.setMap(map);
  CentralValley.setMap(map);
  OccidentalValley.setMap(map);

var DotaTarrazu_marker = new google.maps.Marker({
  position:DotaTarrazu_Center,
    title: 'Dota / Trrazú' });
  DotaTarrazu_marker.setMap(map);

  google.maps.event.addListener(DotaTarrazu_marker,'click',function() {
  window.location.href = "#"; 
  });
  
  var CentralValley_marker = new google.maps.Marker({
    position:CentralValley_Center,
    title: 'Central Valley'
  });
  CentralValley_marker.setMap(map);

  google.maps.event.addListener(CentralValley_marker,'click',function() {
  window.location.href = "?content=centralValley"; 
  });
  
  var OcidentalValley_marker = new google.maps.Marker({
    position:OccidentalValley_Center,
    title: 'Occidental Valley' });
  OcidentalValley_marker.setMap(map);

  google.maps.event.addListener(OcidentalValley_marker,'click',function() {
  window.location.href = "#"; 
  });
}
