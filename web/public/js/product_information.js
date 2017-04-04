$(document).ready(function(){
  $(".btn-default").click(function(e){
  	e.preventDefault();
  	if(!$(this).hasClass( "active" )){
  		$(this).addClass( "active" );
  		$(this).parent('.btn-group').siblings().children('.btn-default').removeClass("active");
  	}
	});
});


$(document).ready(function(){
  $(".orderPresentation").click(function(e){
    e.preventDefault();
    var product = $(this).data("product-id");
    var roast = $("#roastSection").find(".active").text();
    var weight = $("#weightSection").find(".active").text();
    var grind = $("#grindSection").find(".active").text();
    var presentation = findPresentation(product,roast,weight,grind);
    if(presentation){
      addToCart(presentation)
    }
  });
});


function findPresentation(product,roast,weight,grind){
  var url = "/product/searchPresentation";
  var response = null;
  $.post({
    url: url,
    async: false,
    data: {product: product, roast:roast, weight: weight, grind:grind}
  })
  .done( function(result) {
    response = result;
  }); 
  return response;
}