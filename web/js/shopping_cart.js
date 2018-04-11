$(document).ready(function(){
  $(".check-out").click(function(e){
    e.preventDefault();
  	$.post({
  		url: checkSessionmUrl
  	})
  	.done( function(result) {
      	location.href = result;
  	});	
  });
});

$(document).ready(function(){
  $(".continue-shopping").click(function(e){
    e.preventDefault();
    location.href = homeUrl;
  });
});

$(document).ready(function(){
  $('#shoppingCart tbody tr').each( function(){
    if($(this).find(".unit-price").text() !== ""){
      var quantity = $(this).find(".presentation-quantity").val();
      var price =  $(this).find(".price").text();
      var total = price*quantity;
      $(this).find(".presentation-total").text(total);
    }
  });
});

function totalPrice(){
  var total= parseInt(0);
  $('#shoppingCart tbody tr').each( function(){
    if($(this).find(".presentation-total").text() !== ""){
      total += parseInt($(this).find(".presentation-total").text());
    }
  });
  $("#shoppingCart").find("#cart-total").html(total);
}

$("#shoppingCart").ready(function(){
  totalPrice();
});

$(document).ready(function(){
  $(".presentation-quantity").change(function(e){
    e.preventDefault();
    var quantity = $(this).val();
    var price = $(this).parent().parent().find(".price").text();
    var total = quantity * price
    $(this).parent().siblings().find(".presentation-total").text(total);
    totalPrice();
  });
});


$(document).ready(function(){
  $(".remove-item").click(function(e){
    e.preventDefault();
    var item = $(this).parent().parent().data("item-id");
    removeItem(item);
  });
});

function removeItem(item){
  $.post({
    url: removeItemUrl,
    data: {id: item}
  })
  .done( function(result) {
    location.href = result;
  }); 
}