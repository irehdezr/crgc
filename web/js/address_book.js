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
  var url = "/user/address/new";
  var response = null;
  $.post({
    url: url,
    async: false,
  })
  .done( function(result) {
    location.href=result;
  }); 
}
function setAddress(address){
  var url = "/user/address/setCurrent";
  var response = null;
  $.post({
    url: url,
    async: false,
    data: {addressName:address}
  })
  .done( function(result) {
    location.href=result;
  }); 
}