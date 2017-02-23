/*global $*/

$(window).ready(function() {
    $.ajax({
        data: {
            farm: 2
        },
        url: './database/farm_information.php',
        type: 'GET',
        async: false,
        success: function(response) {
            loadPage(JSON.parse(response).farm);
        },
    });
});

function loadPage(farm) {
    $("#farm_name").html(farm.name);
    $("#farm_description").html(farm.description);
    $("#farm_picture_1").attr("src", farm.picture_1);
    $("#farm_elevation").html(farm.elevation);
    $("#farm_harvest").html(farm.harvest);
    $("#farm_species").html(farm.species);
    $("#farm_cultivar").html(farm.cultivar);
    $("#farm_certifications").html(farm.certification);
}
