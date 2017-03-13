/* global $ */
/* global localStorage $ */
var farm="";

$( document ).ready(function() {
    reloadItems();
});

function popUpElement(id){
    $("#popUp"+id).lightbox_me({
        centered: true,
        onClose: function(){
                    window.history.pushState("object or string", "More  Info", farm);

        } 
        });
        farm=window.location.href;
        window.history.pushState("object or string", "More  Info", window.location.href +"/MoreInfo");

}
function orderProduct(id){
    var items=localStorage.getItem("cartItems");
    items++;
    localStorage.setItem("cartItems",items);
    reloadItems();
}
function reloadItems(){
    $("#cartItems").text(localStorage.getItem("cartItems"));
}
function closePopUp(id){
    $("#"+id).trigger('close');
}