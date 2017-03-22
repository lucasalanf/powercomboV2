// JavaScript source code
$(document).ready(function () {
    $('.flexslider').flexslider({
        animation: "slide"
    });

    var modal, asseine;
    modal = $('[data-remodal-id="ligamosParaVoce"]').remodal();
    assine = $('[data-remodal-id="modal"]').remodal();

});

$(document).on('mousedown', '.assineagora', function () {
    assine.open();
});



$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $(".btnTelefoneLigamos").fadeIn(400);
    } else {
        $(".btnTelefoneLigamos").fadeOut(400);
    }

});

$(document).on("mousedown", ".btnTelefoneLigamos", function () {
    if ($(this).css("right") == "-173px") {

        $(this).animate({
            right: 0
        }, 400, function () {

        });
    } else {
        $(this).animate({
            right: -173
        }, 400, function () {

        });
    }

});