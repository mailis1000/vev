$( document ).ready(function() {
    ( function( $ ) {

        $(".icon").on('touchstart click', function (e) {
            $(".mobilenav").fadeToggle(500);
            $(".top-menu").toggleClass("top-animate");
            $("body").toggleClass("noscroll");
            $(".mid-menu").toggleClass("mid-animate");
            $(".bottom-menu").toggleClass("bottom-animate");
            e.preventDefault();
        });
    })( jQuery );

    $(".page-scroll").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact-form").offset().top
        }, 2000);
    });
});