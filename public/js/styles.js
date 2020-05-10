$(window).scroll(function() {
    if ($("#menu").offset().top > 90) {
        $("#menu").css('background','rgba(0, 0, 0, 0.9)');

        $("#menu").animate({
            paddingTop: "5px",
            paddingBottom: "5px",

        },{
            queue: false,
        });

    } else {
        $("#menu").css('background','rgba(0, 0, 0, 0.7)');

        $("#menu").animate({
            paddingTop: "12px",
            paddingBottom: "12px",
        },{
            queue: false,
        });

    }
});



window.onload = function ()  {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

};

$(function() {
    $(".dial").knob({
        'min':0,
        'max':100,
        'width':40,
        'height':40
    });
});








