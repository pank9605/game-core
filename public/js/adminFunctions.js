function validateDelete(form){
    var res = confirm("¿Desea Eliminar a este Fundador?");
    if (res != true){
        return false;
    }
}

function deleteImage(form){
    var res = confirm("¿Desea Eliminar esta Imagen?");
    if (res != true){
        return false;
    }
}

(function($) {

    "use strict";

    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function(){
            $('.js-fullheight').css('height', $(window).height());
        });


    };


    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('#sidebar-content').removeClass('active');
        $('.overlay').removeClass('active');
    });

    fullHeight();


    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#sidebar-content').toggleClass('active');
        $('.overlay').addClass('active');
    });

})(jQuery);





