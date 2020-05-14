var clasification = $("#clasification");
$(function() {
    $(".calification").knob({
        'min':0,
        'max':100,
        'width':150,
        'fgColor':'#28a745',
    });
    showCalificarionFeatured();
});





clasification.change(function () {
    //alert(clasification.val());
    showCalificarionFeatured();
});

function showCalificarionFeatured() {
    if (clasification.val() == "Reseñas"){
        $(".calification-content").removeClass('d-none');
    }else{
        $(".calification-content").addClass('d-none');
    }

    if (clasification.val() == "Noticias"){
        $(".featured-content").removeClass('d-none');
    }else{
        $(".featured-content").addClass('d-none');
    }
}
