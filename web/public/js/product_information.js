$(document).ready(function(){
  $(".btn-default").click(function(e){
  	e.preventDefault();
    setActiveBotton($(this));
    setPrice();
	});
  $(".orderPresentation").click(function(e){
    e.preventDefault();
    addToCart(findSelected());
  });
  $('#myCarousel').on('slid.bs.carousel', function () {
    setPrice();
    $('#myCarousel2').blind();
  });
  setPrice();
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

function setActiveBotton(bottonclicked){
  if(! bottonclicked.hasClass( "active" )){
      bottonclicked.addClass( "active" );
      bottonclicked.parent('.btn-group').siblings().children('.btn-default').removeClass("active");
    }
}

function findSelected(){
  var product = $("#myCarousel").find(".active").data("product-id");
  var roast = $("#roastSection").find(".active").text();
  var weight = $("#weightSection").find(".active").text();
  var grind = $("#grindSection").find(".active").text();
  return findPresentation(product,roast,weight,grind);
}

function setPrice(){
  var presentation = findSelected();
  var price = getPrice(presentation);
  $(".presentation-price").text(price);
}

function getPrice(presentation){
  var url = "/product/presentation/getPrice";
  var response = null;
  $.post({
    url: url,
    async: false,
    data: {id: presentation}
  })
  .done( function(result) {
    response = result;
  }); 
  return response;
}