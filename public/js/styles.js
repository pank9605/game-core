
$(function () {
    menuResize();
});

$(window).resize(function () {
   menuResize();
});

function menuResize(){
    var width = $(window).width();
    console.log(width);
    if (width >= 1200) {
        //scrollXl();
        $("#carousel1").css('margin-top','0px');
        $("#carousel1").css('float','none');

    } else if(width < 1200){
        $("#carousel1").css('margin-top','10px');
        $("#carousel1").css('float','left');
        //scrollSm();
    }
}

$(window).scroll(function() {
    var width = $(window).width();
    if (width >= 1200){
        if ($("#menu").offset().top > 70) {
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
    }else{
        if ($("#menu").offset().top > 70) {
            $("#menu").css('background','rgba(0, 0, 0, 0.9)');

            $("#menu").animate({
                paddingTop: "5px",
                paddingBottom: "5px",

            },{
                queue: false,
            });

            $("#carousel1").css('margin-top','60px');
        } else {
            $("#menu").css('background','rgba(0, 0, 0, 0.7)');

            $("#menu").animate({
                paddingTop: "12px",
                paddingBottom: "12px",
            },{
                queue: false,
            });

            $("#carousel1").animate({
                marginTop: "74px",

            },{
                queue: false,
            });
        }
    }

});

$(function() {
    $(".dial").knob({
        'min':0,
        'max':100,
        'width':40,
        'height':40
    });
});



/*window.onload = function ()  {
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

};*/




