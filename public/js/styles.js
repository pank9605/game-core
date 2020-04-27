$(window).scroll(function() {
    if ($("#menu").offset().top > 56) {
        $("#menu").css('background','black');
        //$("#menu").height(50);

        $("#menu").css('boxShadow','0px 0px 1px rgba(0, 0, 0, 0.3), 0px 3px 7px rgba(0, 0, 0, 0.3), 0px 0px 1px #ffffff inset, 0px -3px 2px rgba(0, 0, 0, 0.25) inset');
        $("#logo").height(30);
    } else {
        $("#menu").css('background','rgba(0, 0, 0, 0.4)');

        //$("#menu").height(70);
        $("#menu").css('boxShadow','');
        $("#logo").height(40);
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



