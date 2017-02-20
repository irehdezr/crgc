/*global $*/
$(window).ready(function(){
  $.ajax({
     url:'./database/home.php',
     type: 'post',
     async: false,
     success: function(response){
        loadPage(JSON.parse(response).home);
     },
  });
});

function loadPage(page){
    $("#page_title").html(page.name);
    $("#page_description").html(page.description);
    $("#page_img_1").attr("src",page.picture_1);
    $("#page_img_2").attr("src",page.picture_2);
    $("#page_img_3").attr("src",page.picture_3);
}