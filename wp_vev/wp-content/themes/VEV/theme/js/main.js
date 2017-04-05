$( document ).ready(function() {
    console.log( "ready!" );

    $('#toggle-menu').on('click', function () {

        if ($('#mobile-menu').hasClass('mobile-active')) {
            $('#mobile-menu').removeClass('mobile-active');
        } else {
            $('#mobile-menu').addClass('mobile-active');
        }
    });

    $("#mobile-toggle").on('touchstart click', function(e) {
        $("body").toggleClass("noscroll");
        $("#header-content").fadeToggle(500);
        $(".top-menu").toggleClass("animate");
        $(".mid-menu").toggleClass("animate");
        $(".bot-menu").toggleClass("animate");
        e.preventDefault();
    });


    $(".page-scroll").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-form").offset().top
        }, 2000);
    });
});