$(document).ready(function(){
	$(".btn-default").click(function(e){
		e.preventDefault();
		setActiveBotton($(this));
		setPrice();
	});
});


function setActiveBotton(bottonclicked){
  if(! bottonclicked.hasClass( "active" )){
      bottonclicked.addClass( "active" );
      bottonclicked.parent('.btn-group').siblings().children('.btn-default').removeClass("active");
    }
}

function findSelected(){
  var product = $("#product").data("product-id");
  var roast = $("#roastSection").find(".active").text();
  var weight = $("#weightSection").find(".active").text();
  var grind = $("#grindSection").find(".active").text();
  return findPresentation(product,roast,weight,grind);
}

function setPrice(){
  var presentation = findSelected();
  var price = getPrice(presentation);
  $("#presentation-price").text("$"+price);
}

function findPresentation(product,roast,weight,grind){
	var response = null;
	$.post({
		url: findPresentationUrl,
		async: false,
		data: {product: product, roast:roast, weight: weight, grind:grind}
	})
	.done( function(result) {
		response = result;
	}); 
	return response;
}

function getPrice(presentation){
	var response = null;
	$.post({
		url: getPriceUrl,
		type: 'POST',
		async: false,
		data: { id: presentation }
	})
	.done( function(result) {
		response = result;
	}); 
	return response;
}