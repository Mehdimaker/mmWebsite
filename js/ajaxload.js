// LOAD PROJECTS



jQuery(function ($) {
    // Mettez vos fonctions avec des $ ici


    $('body').on('click', '.loadctg', function toto() {
        $("#list").css("margin-left", 0 + "px");
        var keyword = $(this).attr("name");
        $('.list').html("<div class='ajaxload'><i class='fa  fa-4x fa-refresh fa-spin'></i></div>");
        

        jQuery.post(
            ajaxurl, {
                'action': 'loadctg',
                'keyword': keyword
            },
            function (response) {
                
                $('.list').html(response);

            }
        );

    });

});