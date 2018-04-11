$(document).ready(function(){
	$( "#btn-continue" ).click(function(e){
    var courier = $("input[name='shipping_option']:checked").val();
  	$.post({
  		url: setCurriertUrl,
      data: {option: courier},
  		async: false
  	})
  	.done( function(result) {
      location.href = result;
  	}); 
  });
});
