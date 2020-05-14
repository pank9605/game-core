
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
        $("#carousel1").css('padding-top','0px');

    } else if(width < 1200){
        $("#carousel1").css('padding-top','74px');
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

            $("#carousel1").css('padding-top','60px');
        } else {
            $("#menu").css('background','rgba(0, 0, 0, 0.7)');

            $("#menu").animate({
                paddingTop: "12px",
                paddingBottom: "12px",
            },{
                queue: false,
            });

            $("#carousel1").animate({
                paddingTop: "74px",

            },{
                queue: false,
            });
        }
    }

});

/*function scrollXl(){
    alert("scrollXl");
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
}


function scrollSm(){
    alert("scrollSm");
    $(window).scroll(function() {
        if ($("#menu").offset().top > 90) {
            $("#menu").css('background','rgba(0, 0, 0, 0.9)');

            $("#menu").animate({
                paddingTop: "5px",
                paddingBottom: "5px",

            },{
                queue: false,
            });

            $("#carousel1").css('padding-top','60px');
        } else {
            $("#menu").css('background','rgba(0, 0, 0, 0.7)');

            $("#menu").animate({
                paddingTop: "12px",
                paddingBottom: "12px",
            },{
                queue: false,
            });

            $("#carousel1").animate({
                paddingTop: "74px",

            },{
                queue: false,
            });
        }
    });
}*/



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




