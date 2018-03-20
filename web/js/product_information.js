	$(document).ready(function(){
  setPrice();
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
});


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