$(document).ready(function(){
  $("#btn-new-address").click(function(e){
  	e.preventDefault();
    addNewAddress();
  });  
  $(".setAddress").click(function(e){
    e.preventDefault();
    var address = $(this).parent().find('#addressName').text();
    setAddress(address);
  });
});

function addNewAddress(){
  var response = null;
  alert(addNewAddress);
  $.post({
    url: addNewAddressUrl,
    async: false,
  })
  .done( function(result) {
	alert(result);
    location.href=result;
  }); 
}
function setAddress(address){
  var response = null;
  $.post({
    url: setCurrentAddressUrl,
    async: false,
    data: {addressName:address}
  })
  .done( function(result) {
    location.href=result;
  }); 
}