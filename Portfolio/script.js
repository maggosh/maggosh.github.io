$(document).ready(function() {
    $("#frontimage").click(function() {
        $("#intro").animate({top:'-100px'}, {queue:false, duration:500});
    });
});
