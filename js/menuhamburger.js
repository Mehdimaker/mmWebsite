  jQuery(function ($) {


 $(document).ready(function() {
      $('.fade').hide();
    $('#navicon').click(function() {
    
    if($('#navicon').hasClass('closed')) {
      $('#container').css({  "-moz-transform": "translate3D(-250px, 0, 0)",
  "-ms-transform": "translate3D(-250px, 0, 0)",
  "-webkit-transform": "translate3D(-250px, 0, 0)",
  "transform": "translate3D(-250px, 0, 0)"});
      $('#main-nav').css({  "-moz-transform": "translate3D(-250px, 0, 0)",
  "-ms-transform": "translate3D(-250px, 0, 0)",
  "-webkit-transform": "translate3D(-250px, 0, 0)",
  "transform": "translate3D(-250px, 0, 0)"});

      $(this).removeClass('closed').addClass('open').html("<i class='fa fa-times'></i>");
      $('.fade').fadeIn();
    }
    else if($('#navicon').hasClass('open')) {
      $('#container').css({  "-moz-transform": "translate3D(0px, 0, 0)",
  "-ms-transform": "translate3D(0px, 0, 0)",
  "-webkit-transform": "translate3D(0px, 0, 0)",
  "transform": "translate3D(0px, 0, 0)"});
      $('#main-nav').css({  "-moz-transform": "translate3D(0px, 0, 0)",
  "-ms-transform": "translate3D(0px, 0, 0)",
  "-webkit-transform": "translate3D(0px, 0, 0)",
  "transform": "translate3D(0px, 0, 0)"});


      $(this).removeClass('open').addClass('closed').html('<i class="fa fa-bars"></i>');
      $('.fade').fadeOut();
    }
    });


//Close nave click a
$('#main-nav a').click(function() {
        $('#container').css({  "-moz-transform": "translate3D(0px, 0, 0)",
  "-ms-transform": "translate3D(0px, 0, 0)",
  "-webkit-transform": "translate3D(0px, 0, 0)",
  "transform": "translate3D(0px, 0, 0)"});
      $('#main-nav').css({  "-moz-transform": "translate3D(0px, 0, 0)",
  "-ms-transform": "translate3D(0px, 0, 0)",
  "-webkit-transform": "translate3D(0px, 0, 0)",
  "transform": "translate3D(0px, 0, 0)"});

      $('#navicon').removeClass('open').addClass('closed').html('<i class="fa fa-bars"></i>');
      $('.fade').fadeOut();
  });


  });

   });