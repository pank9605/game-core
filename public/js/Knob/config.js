$(function() {
    $(".dial").knob({
        'min':0,
        'max':100,
        'width':45,
        'height':45,
        'readOnly':true
    });

    var showCalification = $(".show-calification").val();
    var color ="";
    if (showCalification < 50 ){
        color="#ed4757";
    }else if (showCalification < 80){
        color="#fdc51b";
    }else{
        color="#87ceeb";
    }

    $(".show-calification").knob({
        'width':150,
        'height':150,
        'readOnly':true,
        'fgColor':color
    });
});
