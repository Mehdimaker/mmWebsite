<!DOCTYPE html>
<html lang="fr">

<head>
    <title>MMCV</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
</head>

<body data-spy="scroll" data-target=".navbar">

    <nav class="navbar navbar-fixed-top navbar-default">
        <div class="container ">

            <div class="navbar-header">
                <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle ">
                    <span class="icon-bar" style="height:3px;margin-bottom:-1px;"></span>
                    <span class="icon-bar" style="height:3px;margin-bottom:-1px;"></span>
                    <span class="icon-bar" style="height:3px;margin-bottom:-1px;"></span>
                </button>
                <!--<button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
               <!--<a class="navbartitle" href="#menu1">
                    <img src="img/testlogonav.png" style="height:44px;border-top:6px solid #19191a;border-bottom:6px solid #19191a;">
                </a>-->
            </div>
            <div class="side-collapse in">
               <img class="cornet "src="img/cornet.png" >
                <div class="navbar-collapse" id="nav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" onClick="goto('#menu1', this); return false"> <span class="glyphicon glyphicon-home"></span>ACCUEIL</a>
                        </li>
                        <li>
                            <a href="#" onClick="goto('#menu2', this); return false"> <span class="glyphicon glyphicon-education"></span>EXPERIENCE</a>
                        </li>
                        <li>
                            <a href="#" onClick="goto('#menu3', this); return false"> <span class="glyphicon glyphicon-stats"></span>COMPETENCES</a>
                        </li>
                        <li>
                            <a href="#" onClick="goto('#menu4', this); return false"> <span class="glyphicon glyphicon-picture"></span>REALISATIONS</a>
                        </li>
                        <li>
                            <a href="#" onClick="goto('#menu5', this); return false"> <span class="glyphicon glyphicon-comment"></span>CONTACT</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
		
		<div id="content">
    <div class=" side-collapse-container contentbox-wrapper">
        <section id="menu1" class="contentbox">

            <div class="container">

                <div id="haut" class="container-fluid">
                    <div class="row">
                        <div id="title" class="col-sm-offset-1 col-md-offset-2 col-lg-offset-2 col-xs-8 col-sm-7 col-md-6 col-lg-6">

                            <p class="mm">MEHDI MAIZATE<span class="cv">CV</span>
                            </p>
                            <p class="designer">DESIGNER</p><br>
                            <div class="sepa"><div class="sepaleft"></div><p class="and"> &amp; </p> <div class="separight"></div></div>
                            <p class="developer">DEVELOPER</p>
                          
                        </div>
                        <div id="logo" class="col-xs-4 col-sm-3 col-md-2 col-lg-2">

                        </div>

                    </div>

                </div>

                <div id="bas" class="container-fluid">
                    <div class="row">
                        <div id="photo" class="col-xs-4 col-sm-offset-1 col-md-offset-2 col-lg-offset-2 col-sm-3 col-md-2 col-lg-2">
                        </div>
                        <div id="quotation" class=" col-xs-8 col-sm-7 col-md-6 col-lg-6">
                            <img class="left" src="img/quotationleft.png">
                            <img class="right" src="img/quotationright.png">
                            <p>
                                Salamaleykom Warahmatula Wabarakatu !
                                <br>Je suis M. Mehdi , Developpeur et Designer Web !
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="menu2" class="contentbox">

            <div id="titresection">
                <p><span class="glyphicon glyphicon-education"></span>Mon expèrience</p>
            </div>
            <div class="container">
                <div class="row">

                    <div id="monaccordeon" class="panel-group col-md-offset-3 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="#item1" data-parent="#monaccordeon" data-toggle="collapse">
                                    <div class="date">
                                        <p>2014</p>
                                    </div>
                                    <div class="panel-title ">
                                        <p>Deust Webmaster Bac +2</p>
                                    </div>
                                    <div class="cursor moins">
                                        <p></p>
                                    </div>
                                </a>
                            </div>
                            <div id="item1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Etude à distance e-learning Webmaster et métiers de l'internet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis, officia, vel similique recusandae neque corporis omnis.</p>
                                </div>
                            </div>
                            <div class="panel-sstitle">
                                <p>Université de Limoges</p>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" href="#item2" data-parent="#monaccordeon" data-toggle="collapse">
                                    <div class="date">
                                        <p>2013</p>
                                    </div>
                                    <div class="panel-title">
                                        <p>Deust Webmaster Bac+1</p>
                                    </div>
                                    <div class="cursor plus">
                                        <p></p>
                                    </div>
                                </a>
                            </div>
                            <div id="item2" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <p>Etude à distance e-learning Webmaster et métiers de l'internet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis, officia, vel similique recusandae neque corporis omnis.</p>
                                </div>
                            </div>
                            <div class="panel-sstitle">
                                <p>Université de Limoges</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" href="#item3" data-parent="#monaccordeon" data-toggle="collapse">
                                    <div class="date">
                                        <p>2012</p>
                                    </div>
                                    <div class="panel-title">
                                        <p>License Economie et gestion</p>
                                    </div>
                                    <div class="cursor plus">
                                        <p></p>
                                    </div>
                                </a>
                            </div>
                            <div id="item3" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <p>Etude à distance e-learning Webmaster et métiers de l'internet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis, officia, vel similique recusandae neque corporis omnis.</p>
                                </div>
                            </div>
                            <div class="panel-sstitle">
                                <p>Université Paris 13</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" href="#item4" data-parent="#monaccordeon" data-toggle="collapse">
                                    <div class="date">
                                        <p>2011</p>
                                    </div>
                                    <div class="panel-title">
                                        <p>DUT SRC</p>
                                    </div>
                                    <div class="cursor plus">
                                        <p></p>
                                    </div>
                                </a>
                            </div>
                            <div id="item4" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <p>Etude à distance e-learning Webmaster et métiers de l'internet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis, officia, vel similique recusandae neque corporis omnis.</p>
                                </div>
                            </div>
                            <div class="panel-sstitle">
                                <p>IUT Paris 13</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" href="#item5" data-parent="#monaccordeon" data-toggle="collapse">
                                    <div class="date">
                                        <p>2010</p>
                                    </div>
                                    <div class="panel-title">
                                        <p>Bac STI génie éléctronique</p>
                                    </div>
                                    <div class="cursor plus">
                                        <p></p>
                                    </div>
                                </a>
                            </div>
                            <div id="item5" class="panel-collapse collapse ">
                                <div class="panel-body">
                                    <p>Etude à distance e-learning Webmaster et métiers de l'internet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore veritatis, officia, vel similique recusandae neque corporis omnis.</p>
                                </div>
                            </div>
                            <div class="panel-sstitle">
                                <p>Lycée La Tourelle</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section id="menu3" class="contentbox">
            <div id="titresection">
                <span class="glyphicon glyphicon-stats"></span>Mes compétences
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div id="ctg-title">
                            <img src="img/webdesign.png">
                            <h4>Web Design</h4>
                        </div>
                        <div id="ctg">
                            <div id="infos">
                                <p>Dessein</p>
                                <ul>
                                    <li>Wireframe<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Prototypage<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                                <p>Charte graphique</p>
                                <ul>
                                    <li>Typographie<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Logo<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Identité visuel<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                                <p>Maquette graphique</p>
                                <ul>
                                    <li>Responsive Design<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Ergonomique<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                            </div>
                            <div id="sstitle">
                                <h4>Qualités</h4>
                            </div>
                            <div id="qualites">

                                <p>Créativité <span>  
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/star.png"></span>
                                </p>
                                <p>Perfectionnisme<span>
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                </span>
                                </p>
                            </div>
                            <div id="sstitle">
                                <h4>Outils</h4>
                            </div>
                            <div id="outils">

                                <p>Photoshop<span>
                                <img src="img/icon/ps.png">
                                </span>
                                </p>
                                <p>Illustrator<span>
                                <img src="img/icon/ai.png">
                                </span>
                                </p>
                                <p>Papier et crayon<span>
                                <img src="img/icon/draw.jpg">
                                </span>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div id="ctg-title">
                            <img src="img/webdev.png">
                            <h4>Web Developement</h4>
                        </div>
                        <div id="ctg">
                            <div id="infos">
                                <p>Intégration</p>
                                <ul>
                                    <li>Responsive Design<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Animation<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                                <p>Développement</p>
                                <ul>
                                    <li>Formulaire de contact<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Espace membre<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                                <p>Bonnes pratiques</p>
                                <ul>
                                    <li>Validation W3C<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Accessibilité<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                            </div>
                            <div id="sstitle">
                                <h4>Qualités</h4>
                            </div>
                            <div id="qualites">
                                <p>Organisation<span>  
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starhalf.png"></span>
                                </p>
                                <p>Logique<span>
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starhalf.png">
                                </span>
                                </p>
                            </div>
                            <div id="sstitle">
                                <h4>Outils</h4>
                            </div>
                            <div id="outils">
                                <p>IDE Brackets<span>
                                <img src="img/icon/brackets.png">
                                </span>
                                </p>
                                <p>Framework Bootstrap<span>
                                <img src="img/icon/bootstrap.png">
                                </span>
                                </p>
                                <p>Framework Jquery<span>
                                <img src="img/icon/jquery.png">
                                </span>
                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div id="ctg-title">
                            <img src="img/webmark.png">
                            <h4>Web Marketting</h4>
                        </div>
                        <div id="ctg">
                            <div id="infos">
                                <p>Référencement</p>
                                <ul>
                                    <li>Naturel SEO<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Choix des mots clefs<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Code source efficace<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                </ul>
                                <p>Community mannagement</p>
                                <ul>
                                    <li>Réseau sociaux/Blog<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Emailling<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>

                                </ul>
                                <p>Audit</p>
                                <ul>
                                    <li>Analyse du trafic<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>
                                    <li>Analyse de l'audience<span>
                                <img src="img/puce.jpg">
                                </span>
                                    </li>

                                </ul>
                            </div>
                            <div id="sstitle">
                                <h4>Qualités</h4>
                            </div>
                            <div id="qualites">

                                <p>Analyse<span>  
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/star.png"></span>
                                </p>
                                <p>Esprit de synthèse<span>
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/starfull.png">
                                <img src="img/star.png">
                                </span>
                                </p>
                            </div>
                            <div id="sstitle">
                                <h4>Outils</h4>
                            </div>
                            <div id="outils">
                                <p>Google Analytic<span>
                                <img src="img/icon/ga.png">
                                </span>
                                </p>
                                <p>Mailchimp<span>
                                <img src="img/icon/mailchimp.png">
                                </span>
                                </p>
                                <p>Réseau sociaux<span>
                                <img src="img/icon/fb.png">
                                <img src="img/icon/twitter.png" >
                                </span>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <section id="menu4" class="contentbox">
            <div id="titresection">
                <span class="glyphicon glyphicon-picture"></span>Mes réalisations
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div id="carousel" class="carousel slide" data-interval="0" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active ">
                                    <div class="ad1">

                                    </div>

                                    <div class="carousel-caption">
                                        <!-- Button trigger modal -->
                                           <a href="img/rea/responsive.jpg" data-lightbox="roadtrip" data-title="My caption">
                                            <span class="glyphicon glyphicon glyphicon-search"></span>
                                        </a>
                                        <h3>Website MMCV Responsive </h3>
                                        <p>Réalisé via l'IDE Brackets et le Framework Bootstrap</p>

                                    </div>
                                </div>
                                <div class="item ">
                                    <div class="ad2">

                                    </div>
                                    <div class="carousel-caption">
                                        <!-- Button trigger modal -->
                                        <a href="img/rea/imagemaquette.jpg" data-lightbox="roadtrip" data-title="My caption">
                                            <span class="glyphicon glyphicon glyphicon-search"></span>
                                        </a>
                                        <h3>Maquette Graphique MMCV</h3>
                                        <p>Réalisé sous photoshop</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="arrowleft" href="#carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="arrowright" href="#carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>

        <section id="menu5" class="contentbox">

            <div class="container">

                <div class="row">
                    <div class=" col-md-5 ">
                        <div id="titresection">
                            <span class="glyphicon glyphicon-comment"></span>Contactez moi !
                        </div>
                        <div id="litlequotation">
                            <img src="img/quotationleft.png" class="left">
                            <img src="img/quotationright.png" class="right">
                            <p>N’hésitez pas à me contacter ! <br>Je vous répondrais au plus vite !</p>
                        </div>
                        <div id="arrowquotation">
                            <span class="glyphicon glyphicon-triangle-bottom"></span>
                        </div>





                        <form method="post" action="other/sendemail.php">
                            <div id="input" class="left-inner-addon ">
                                <i class="glyphicon glyphicon-user "></i>
                                <input type="text" placeholder="Name" name="name" id="name" />
                            </div>
                            <div id="input" class="left-inner-addon ">
                                <i class="glyphicon glyphicon-envelope "></i>
                                <input type="text" placeholder="eMail" name="email" id="email">
                            </div>
                            <div id="input" class="left-inner-addon ">
                                <i class="glyphicon glyphicon-file "></i>
                                <input type="text" placeholder="Sujet" name="sujet" id="sujet">
                            </div>
                            <div id="textarea" class="left-inner-addon ">
                                <i class="glyphicon glyphicon-align-justify "></i>
                                <textarea placeholder="Message" id="message" name="message" id="message"></textarea>
                            </div>
                            <input type="submit" value="Envoyer">

                        </form>






                    </div>
                    <div class="col-md-offset-2 col-md-5">
                        <div id="titresection">
                            <span class="glyphicon glyphicon-link"></span>Rencontrez moi !
                        </div>
                        <div id="litlequotation">
                            <img src="img/quotationleft.png" class="left">
                            <img src="img/quotationright.png" class="right">
                            <p>Disponible sur Paris !
                                <br/>Appelez moi au 06.12.34.56.78
                            </p>
                        </div>
                        <div id="arrowquotation">
                            <span class="glyphicon glyphicon-triangle-bottom"></span>
                        </div>
                        <div id="mapcanvas">
                        </div>


                    </div>

                </div>

                
            </div>

        </section>
            </div></div></div>

    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/googlemapcustom.js"></script>
    <script src="js/jquery-1.11.2.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

     <script src="js/lightbox.min.js"></script>

   <script type="text/javascript">
       function goto(id, t){	
	//animate to the div id.
	$(".contentbox-wrapper").animate({"left": -($(id).position().left)}, 600);
	
	// remove "active" class from all links inside #nav
    $('#nav a').removeClass('active');
	
	// add active class to the current link
    $(t).addClass('active');	
}
       
       </script>
   
   
   
   
    <script type="text/javascript">
        $(document).ready(function () {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function (event) {
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            // Lorsque je soumets le formulaire
            $('form').on('submit', function (e) {
                e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

                var $this = $(this); // L'objet jQuery du formulaire

                // Je récupère les valeurs
                var name = $('#name').val();
                var email = $('#email').val();
                var message = $('#message').val();

                // Verification
                if (name === '' || email === '' || message === '') {
                    alert('Tous les champs doivent êtres remplis');
                } else {
                    // Envoi de la requête HTTP en mode asynchrone
                    $.ajax({
                        url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                        type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                        data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                        success: function (html) { // Je récupère la réponse du fichier PHP
                            alert(html) // J'affiche cette réponse
                        }
                    });
                }
            });
        });
    </script>


</body>

</html>