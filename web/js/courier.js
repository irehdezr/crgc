$(document).ready(function(){
	$( "#btn-continue" ).click(function(e){
    var courier = $("input[name='shipping_option']:checked").val();
  	var url = "/user/shoppingCart/setCourier";
  	$.post({
  		url: url,
      data: {option: courier},
  		async: false
  	})
  	.done( function(result) {
      location.href = result;
  	}); 
  });
});
