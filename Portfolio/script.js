$(document).ready(function() {
    $("#frontimage").click(function() {
        if($("#intro").css("top") == "-100px"){
            $("#intro").animate({top:'0px'}, 500);
        }
        else {
            $("#intro").animate({top:'-100px'}, 500);
        }
    });
});