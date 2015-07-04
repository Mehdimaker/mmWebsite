jQuery(function ($) {
    // Mettez vos fonctions avec des $ ici


    $('nav li a').click(function (e) {
        e.preventDefault();
        $('a').removeClass('active');
        $(this).addClass('active');
    });
    $('div.menuprojects a').click(function (e) {
        e.preventDefault();
        $('a').removeClass('active2');
        $(this).addClass('active2');
    });


    // add class active 2 sous menu en passant par #projects
    $("#projects a.apps").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.apps").toggleClass("active2")
    });
    $("#projects a.websites").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.websites").toggleClass("active2")
    });
    $("#projects a.graphics").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.graphics").toggleClass("active2")
    });
    $("#projects a.objects").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.objects").toggleClass("active2")
    });
    $("#projects a.videos").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.videos").toggleClass("active2")
    });
    $("#projects a.others").on("click", function () {
        $("div.menuprojects a").removeClass('active2');
        $("div.menuprojects a.others").toggleClass("active2")
    });

});