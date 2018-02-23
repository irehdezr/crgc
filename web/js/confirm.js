 $(document).ready(function(){
 	var total = 0;
	$('#confirmCart tbody tr td:nth-child(6)').each( function(){
		total += parseInt( $(this).find(".item-total").text() );   
	});
	var shipping = parseInt( $(".shipping").text() );
	total += shipping;
	$("#cart-total").text(total);
});	