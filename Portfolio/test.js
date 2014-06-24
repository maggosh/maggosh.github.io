$(window).load(function() {
    $(document).ready(function() {
        $("#frontimage").on("click",function() {
            $(this).animate({top:'-100px'}, {queue:false, duration:500});
        });
    });
});
