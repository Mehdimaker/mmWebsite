  jQuery(function ($) {
      // Mettez vos fonctions avec des $ ici
     $position = 1;
         $widthnavapp = $('#navapp').width();
         $widthbloc = ($widthnavapp - ($marginrightbloc * 3)) / 4;
         $nbbloc = $('#list a').length;     
         $decalage = 4 * ($widthbloc + $marginrightbloc);

          $("#list a").css("width", $widthbloc + "px");
          $("#list a").css("margin-right", $marginrightbloc + "px");
          $("#list").css("margin-left", 0 + "px");

          if ($nbbloc <= 4) {
              $pages = 1
          } else if (4 < $nbbloc <= 8) {
              $pages = 2;
          } else if (8 < $nbbloc <= 12) {
              $pages = 3;
          } else {
              $pages = 0;
          }

      
      
      function addopacity() {
          if ($position == 1 && $position == $pages) {
              $(".btnleft").addClass('cache');
              $(".btnright").addClass('cache');
          } else if ($position == 1) {
              $(".btnleft").addClass('cache');
              $(".btnright").removeClass('cache');
          } else if ($position == $pages) {
              $(".btnright").addClass('cache');
              $(".btnleft").removeClass('cache');
          }
      }

      addopacity();
  });