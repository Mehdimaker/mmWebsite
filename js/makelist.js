  jQuery(function ($) {
      // Mettez vos fonctions avec des $ ici
        $position = 1; 
        $decalage = $('#list a').width()+9;
        $marginleftlist = 0;
        $positionprojmax = ($('#list a').length )- 3;
       


   
      
      function addopacity() {
          if ($position == 1 && $positionprojmax <=$position) {
              $(".btnleft").addClass('cache');
              $(".btnright").addClass('cache');
          }else if($position > 1 && $position < $positionprojmax){
              $(".btnleft").removeClass('cache');
              $(".btnright").removeClass('cache');
          }else if ($position == 1) {
              $(".btnleft").addClass('cache');
              $(".btnright").removeClass('cache');
          } else if ($position == $positionprojmax) {
              $(".btnright").addClass('cache');
              $(".btnleft").removeClass('cache');
          }
      }
      addopacity();

  });