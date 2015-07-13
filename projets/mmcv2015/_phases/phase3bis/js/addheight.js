  //Définie la taille des section en fonction de la page
        $(document).ready(function () {
            jQuery('document').ready(function () {
                var min_height = jQuery(window).height();
                if (jQuery('section').height() < min_height) {
                    jQuery('section').css({
                        'min-height': +min_height + 'px'
                    });
                }
            });
        });
  //Définie la taille des fenetre Modal en fonction de la page
        $(document).ready(function () {
            jQuery('document').ready(function () {
                var min_height = jQuery(window).height() ;
                if (jQuery('div.modal-body').height() < min_height) {
                    jQuery('div.modal-body').css({
                        'height': -240 +min_height + 'px'
                    });
                }
            });
        });