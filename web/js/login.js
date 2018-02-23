$(document).ready(function(){
	$( "input[name='signup']" ).click(function(e){
  		var url = "/signup";
  		$.post({
    		url: url,
    		async: false
  		})
  		.done( function(result) {
    		location.href = result;
  		}); 
  	});
});
// $( "#signin" ).submit(function( event ) {
//   event.preventDefault();
//   var email =$("input[name='user']").val();
//   var password = $("input[name='pass']" ).val();
//   var url = "user/signin";
//   $.post({
//     url: url,
//     async: false,
//     data: {email: email, password: password}
//   })
//   .done( function(result) {
//     location.href =result;
//   }); 
// });
