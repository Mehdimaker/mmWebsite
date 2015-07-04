// LOAD PROJECTS



jQuery(function ($) {
    // Mettez vos fonctions avec des $ ici


    $('body').on('click', '.loadctg', function toto() {

        var keyword = $(this).attr("name");
        $('.list').html("<div class='ajaxload'><i class='fa  fa-5x fa-cog fa-spin'></i></div>");
        

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