$(document).ready(function () {
    $('#myCarousel2').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });


    $(".menu_tintuc li").click(function () {
        var id = $(this).find("a").attr("href");
        if (id == "#") {
            return false;
        }
        $(".tt_container .row").hide();
        $(id).show();
        $(".menu_tintuc li").removeClass("active");
        $(this).addClass("active");
        return false;
    });
});
