function show(id) {
    var home = document.getElementById('home');
    var projects = document.getElementById('projects');
    var articles = document.getElementById('articles');
    var services = document.getElementById('services');
    var contact = document.getElementById('contact');
    var navapp = document.getElementById('navapp');
    var navverti = document.getElementById('navvertical');
    var navhoriz = document.getElementById('navhorizontal');
    var id = document.getElementById(id);

    home.className = "off";
    projects.className = "off";
    articles.className = "off";
    services.className = "off";
    contact.className = "off";
    navapp.className = "off";
    navverti.className = "off";
    navhoriz.className = "off";
    id.className = id.classList.remove("off");
    id.className = "on";
    if (id == articles) {
        navverti.className = navverti.classList.remove("off");
        navverti.className = "on";
        navverti.className = "navbtn";
        
    } else if (id == navapp) {
        navhoriz.className = navhoriz.classList.remove("off");
        navhoriz.className = "on";
        navhoriz.className = "navbtn";
    }
}


jQuery(function ($) {
    // Mettez vos fonctions avec des $ ici   
    $('nav li a').on("click", function () {
        $(".menuprojects").css("height", "0px");
    });
   
    $('nav li a.displaylistprojects').on("click", function () {
        $(".menuprojects").css("transition", "all 0.5s ease");
        $(".menuprojects").css("height", "140px");
        $("div.menuprojects a").removeClass('active2');
    });


//Affichage langue
    
      $('i.fa-flag').on("click", function () {
        $(".menulangue").toggleClass( "cache" );
    });
     $('i.fa-share-alt').on("click", function () {
        $(".menureseau").toggleClass( "cache" );
    });
    
});