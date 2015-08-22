  jQuery(function ($) {
      // Mettez vos fonctions avec des $ ici


      //ARTICLE NAVLIST
      var nbarticles = $('#listarticles a').length;
      var decalagearticle = ($('#listarticles a').height()) + 9;
      var margintop = 0;
      var positionarticles = 0;

      function addopacityarticles() {
          if (positionarticles == 0 && nbarticles <= 6) {
              $(".btntop").addClass("cache");
              $(".btnbottom").addClass("cache");
          } else if (positionarticles == 0 && nbarticles > 6) {
              $(".btntop").addClass("cache");
              $(".btnbottom").removeClass("cache");
          } else if (positionarticles > 0) {
              $(".btntop").removeClass("cache");
              $(".btnbottom").removeClass("cache");
              if (positionarticles >= (nbarticles - 6)) {
                  $(".btnbottom").addClass("cache");
              }
          }
      }

      addopacityarticles();

      $('nav li a.articles').on("click", function () {
        $("#listarticles").css("margin-top", 0 + "px");
        positionarticles = 0;
        margintop = 0;
        addopacityarticles();
      });

      $('.btnbottom').on("click", function () {
          if (nbarticles > 6 && positionarticles < (nbarticles - 6)) {
              margintop -= decalagearticle;
              positionarticles++;
              $("#listarticles").css("margin-top", margintop + "px");
          } else {}
          addopacityarticles();
      });
      $('.btntop').on("click", function () {
          if (positionarticles > 0) {
              margintop += decalagearticle;
              positionarticles--;
              $("#listarticles").css("margin-top", margintop + "px");
          } else {}
          addopacityarticles();
      });



      //PROJECT NAVLIST
      $position = 1;
      $marginleftlist = 0;

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

      $('.btnright').on("click", function () {
          if ($position < $positionprojmax) {
              $marginleftlist -= $decalage;
              $position++;
              $("#list").css("margin-left", $marginleftlist + "px");
          } else {}
          addopacity();
      });
      $('.btnleft').on("click", function () {
          if ($position > 1) {
              $marginleftlist += $decalage;
              $position--;
              $("#list").css("margin-left", $marginleftlist + "px");
          } else {}
          addopacity();
      });
      
      
      //PRO SINgLE NAvLIsT
     
      var margintopetapes = 0;
      var positionsection = 0;
      var positionmax = ($('#etapes > section').length)-1;

      var margintopul = 0;
      var positionul = 0;

        function addopacitysingle() {
              var positionulmax = ((($("ul.commentlist").height() / $("#mainpro").height())*2 ) -2);
            if (positionsection == positionmax && positionul > positionulmax) {
              $(".btnbottompro").addClass("cache");
              $(".btntoppro").removeClass("cache");
            }else if (positionsection == 0) {
              $(".btntoppro").addClass("cache");
              $(".btnbottompro").removeClass("cache");
            }else if (positionsection > 0) {
              $(".btntoppro").removeClass("cache");
              $(".btnbottompro").removeClass("cache");
            } 
      };
      
          $('.btnbottompro').on("click", function () {
            if (positionsection < positionmax ) {
              margintopetapes -= $decalagesingle;
              positionsection++;
              $("#etapes").css("margin-top", margintopetapes + "px");
            }else {       
              var positionulmax = ((($("ul.commentlist").height() / $("#mainpro").height())*2 ) -2);
              if ($("ul.commentlist").height() > $("#mainpro").height() && positionul < positionulmax){
                margintopul -= ($decalagesingle / 2);
                positionul++;
                $("ul.commentlist").css("margin-top", margintopul + "px");
              }else{}
            }
            addopacitysingle();
          });
      
               

          $('.btntoppro').on("click", function () {
            if (positionsection > 0 && margintopul == 0) {
              margintopetapes += $decalagesingle ;
              positionsection--;
              $("#etapes").css("margin-top", margintopetapes + "px");
            }else {
              var positionulmax = ((($("ul.commentlist").height() / $("#mainpro").height())*2 ) -2);
              if (positionul != 0){
                margintopul += ($decalagesingle / 2);
                positionul--;
                $("ul.commentlist").css("margin-top", margintopul + "px");
              }else{}
            }
          addopacitysingle();
          });
      
    
$('span.comment').on("click", function () {      
             

            if (positionsection < positionmax || positionul != 0) {
            positionul = 0;
             margintopul = 0;
              margintopetapes = -($decalagesingle *(positionmax));
             positionsection = 1*positionmax;
              $("#etapes").css("margin-top", margintopetapes + "px");
              $("ul.commentlist").css("margin-top", margintopul+ "px");
            }else {}
          addopacitysingle();
          });
      
      

  });