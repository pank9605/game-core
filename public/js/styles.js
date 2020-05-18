

$(function () {
    menuResize();
});

$(window).resize(function () {
   menuResize();
});

function menuResize(){
    var width = $(window).width();
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





