$(document).ready(function(){
	$( "input[name='signup']" ).click(function(e){
  		$.post({
    		url: signUpUrl,
    		async: false
  		})
  		.done( function(result) {
    		location.href = result;
  		}); 
  	});
});