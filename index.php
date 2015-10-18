<?php get_header();?>

<body>
     <header class="cf">
        <div class="logo"></div>
        <a href="www.mehdimaker.com"class="mmname"></a>
        <a href="#" id="navicon" class="closed btn">
            <svg id="ht" viewBox="0 0 15 15">
                <rect x="3" y="5" width="9" height="1"></rect>
            </svg>
            <svg id="hm" viewBox="0 0 15 15">
                <rect x="3" y="7" width="9" height="1"></rect>
            </svg>
            <svg id="hb" viewBox="0 0 15 15">
                <rect x="3" y="9" width="9" height="1"></rect>
            </svg>
        </a>
    </header>
    <nav id="main-nav">
        <a  name="home" onclick="show('home')" class="home active "><i class="fa  fa-lg fa-home"></i><span><br>Home</span></a>
        <a name="projects" onclick="show('projects')" class="projects displaylistprojects"><i class="fa fa-lg fa-folder-open"></i><span><br>Projets</span></a>
        <a name="articles" onclick="show('articles')" class="articles"><i class="fa fa-lg fa-file-text"></i><span><br>Articles</span></a>
        <a name="about" onclick="show('about')" class="about"><i class="fa fa-lg fa-mortar-board"></i><span><br>Mon CV</span></a>
       <!-- <a name="services" onclick="show('services')" class="services"><i class="fa fa-lg fa-briefcase"></i><span><br>Services</span></a>-->
        <a name="contact" onclick="show('contact')" class="contact"><i class="fa fa-lg fa-envelope"></i><span><br>Contact</span></a>
    </nav>
    <div class="fade"></div>

    <div id="container">
        <?php include_once 'blocgauche.php';?><!--
        
        --><main>

            <div id="home">
                <div class="presentation">
                    <span class='bgop'></span>
                    <div class="photo "></div>
                    <blockquote>
                        <span class="titlemm"></span>
                        <p>Passionné des nouvelles technologies  <br>
                        Actuellement apprenti développeur au sein de <a href="http://simplon.co" target='_blank' class="simplon">Simplon</a><br>
                        et fabmanager chez<a href="http://zbis.fr" target='_blank' class="simplon"> zBis</a>, fablab à La Roche-sur-Yon !
                        </p>                     
                        <p class="right">Découvrez ici toutes mes réalisations<br> sites web, applications, ou encore objets connectés . . .</p>
                    </blockquote>
                </div>
                <span class="sep"></span>





                <div class="recent blocleft">
                         <h4>Derniers Projets</h4>
                    <?php $args=array( 'category_name'=> 'websites,apps,graphics,objects,imps,scripts', 'showposts' => '6', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                    <a class='<?php $cat = get_the_category(); $cat = $cat[0]; echo strtolower($cat->cat_name);?>' href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_projects"><?php the_title(); ?></span>
                    </a>
                    
                    <?php endwhile; ?>
                <span class="bgsepvertical"></span>
                    </div><!--
                    --><div class="recent bloccenter">
                    <h4>Derniers Articles</h4>
                    <?php $args=array( 'category_name'=> 'articles', 'showposts' => '6', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_projects"><?php the_title(); ?></span>
                        <span class="date"><?php the_time(d);?>-<?php the_time(m);?>-<?php the_time(y);?></span>
                    </a>
                    <?php endwhile; ?>
               <span class="bgsepvertical"></span>
                </div><!--


                --><div class="recent blocright">
                    <h4>Un Projet ?</h4>
                    <div class="comm">
                        <span class="bgop"></span>
                        <p>Vous recherchez un développeur ? <br>Quelqu'un de sérieux et compétent pour réaliser votre projet ?<br><br>
                        Ne cherchez pas plus loin... <br>Je suis la personne qu'il vous faut !<br>
                        Rencontrons nous et discutons d'une éventuelle collaboration !<br><br>
                        A très bientôt.   <br>
                        <a class="mmlink" href="mailto:contact@mehdimaker.com">Mehdi Maker.</a>
                        </p>
                    </div>
                </div>

            </div>


            <div id="articles" class="off">
                <div id="listarticles"><!--
            <?php $args=array( 'category_name'=> 'articles', 'showposts' => '-1', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            --><a class="article" href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_article"><?php the_title(); ?></span>
                        <span class="resume_article"><?php the_excerpt() ;?></span>
                        <span class="date"><?php the_time(d);?>-<?php the_time(m);?>-<?php the_time(y);?></span>
                    </a><span class="sep"></span><!--
            <?php endwhile; ?>
            --></div>
               
            </div>







            <div id="projects" class="off">

                <div class="rowproject rowprojecttop">

                    <div class="blocleft"><a name="websites" class="loadctg websites " onclick="show('navapp')">
                        <span class="bgop"></span>
                        <i class="websites"></i>
                        <p class="ctgproject" >Sites Web </p>
                            <p class="number">
                                <?php echo count_cat_post( 'websites' ); ?>
                            </p>
                    </a> <span class="bgsepvertical"></span></div><!--


                    --><div class="bloccenter"><a class="loadctg apps face" name="apps" onclick="show('navapp')">
                        <span class="bgop"></span>
                        <i class="apps"></i>
                        <p class="ctgproject" >Applications  </p>
                            <p class="number">
                                <?php echo count_cat_post( 'apps' ); ?>
                            </p>
                    
                    </a> <span class="bgsepvertical"></span></div><!--

                    --><div class="blocright"><a name="scripts" class="loadctg scripts" onclick="show('navapp')">
                        <span class="bgop"></span>
                        <i class="scripts"></i>
                        <p class="ctgproject" >Scripts </p>
                            <p class="number">
                                <?php echo count_cat_post( 'scripts' ); ?>
                            </p>
                    </a></div>

                </div>
                <span class="seppro"></span>

                <div class="rowproject rowprojectbottom" >
                    <div class="blocleft"><a name="graphics" class="loadctg graphics face" onclick="show('navapp')">
                        <span class="bgop"></span>
                        <i class="graphics"></i>
                        <p class="ctgproject" >Designs Graphique</p>
                            <p class="number">
                                <?php echo count_cat_post( 'graphics' ); ?>
                            </p>
                    
                    </a> <span class="bgsepvertical"></span></div><!--

                    --><div class="bloccenter"><a name="imps" class="loadctg imps" onclick="show('navapp')">
                         <span class="bgop"></span>
                        <i class="imps"></i>
                        <p class="ctgproject" >Impressions 3D </p>
                            <p class="number">
                                <?php echo count_cat_post( 'imps' ); ?>
                            </p>
                    
                    </a> <span class="bgsepvertical"></span></div><!--
                    --><div class="blocright"><a name="objects" class="loadctg objects face" onclick="show('navapp')">
                         <span class="bgop"></span>
                        <i class="objects"></i>
                        <p class="ctgproject" >Objets Connectés </p>
                            <p class="number">
                                <?php echo count_cat_post( 'objects' ); ?>
                            </p>
                    
                    </a></div>



                </div>


            </div>
            <div id="navapp" class="off">
                <div id="navlist">
                    <div id="list" class="list">

                    </div>

                </div>
                

            </div>




            <div id="services" class="off">

                     <p>En cours ...</p>
                  
                </div>

            <div id="about" class="off">
                <span class="bgop"></span>




                
                <div id="cv">
                <img src="<?php echo get_bloginfo('template_directory');?>/img/cv_mehdimaker.jpg" >
                <a href="<?php echo get_bloginfo('template_directory');?>/pdf/cv_mehdimaker.pdf.zip" download><i class="fa fa-download"></i>
Télécharger mon CV</a>
                </div>
                  
            </div>



          

            <div id="contact" class="off">
             
            <div class="height100"ng-app="app">
            <div class="height100" ng-controller="appCtrl">
            
            
            <!-- <div id="mminfos">
            



            

              <div class="mmtechno">
    <h3>Ce site à été réalisé avec:</h3>
          <p>
             Front End: <br> Javascript | Jquery | Angular | Html | Css
  <br><br>Back End: <br>Wordpress | Php
                </p>
            </div>

              <div class="links">
                <h3>Links</h3>
                            <a href="https://www.thingiverse.com/MehdiMaker" target="_blank">
             <i class="fa fa-circle-o fa-lg"><span class="thingiverse">T</span></i>   Thingiverse : MehdiMaker

            </a>
            <a href="https://github.com/Mehdimaker" target="_blank">
                <i class="fa fa-github fa-lg"></i>
                  Github : MehdiMaker
            </a>
             <a href="mailto:contact@mehdimaker.com">
                <i class="fa fa-envelope-square fa-lg"></i>
                  contact@mehdimaker.com
            </a>
             </div>

                

                
                  </div>--><!--
             
              
            --><form name="FormContact" ng-submit="sendMessage()" novalidate >
                                    <span class="bgop"></span>

                     <fieldset>             <i class="fa fa-2x fa-paper-plane"></i>
                        <h3>Contacter moi par mail.</h3>

                            N'hésitez pas à me contacter en remplissant ce formulaire, <br>je répondrais au plus vite.</fieldset>
                    <div class="formcontain">
                <label>
                    <span class="ico"><i class="fa fa-user"></i></span><!--
                --><input placeholder="Votre nom *" name="name" ng-model="name" ng-required="true" />
                    <span ng-show="FormContact.name.$valid && FormContact.name.$touched " class="valid"><i class="fa fa-check"></i></span>
                    <span ng-show="FormContact.name.$invalid && FormContact.name.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                    <p ng-show="FormContact.name.$invalid && FormContact.name.$touched " class="help-block">Indiquez votre nom</p>
                </label>
                <label>
                    <span class="ico"><i class="fa fa-phone-square"></i></span><!--
                --><input placeholder="Votre numéro (facultatif)" name="number" ng-model="number" ng-pattern="/[0-9 ]+/" ng-required="true">
                    <span ng-show="FormContact.number.$valid && FormContact.number.$touched " class="valid"><i class="fa fa-check"></i></span>
                   <span ng-show="FormContact.number.$invalid && FormContact.number.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                    <p ng-show="FormContact.number.$invalid && FormContact.number.$touched" class="help-block">Indiquez un numero valide</p>

                </label>
                <label>
                    <span class="ico"><i class="fa  fa-envelope"></i></span><!--
                --><input placeholder="Votre mail *" name="mail" ng-model="mail" ng-pattern="/^(\w[-._+\w]*\w@\w[-._\w]*\w\.\w{2,3})$/" ng-required="true" />
                    <span ng-show="FormContact.mail.$valid && FormContact.mail.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormContact.mail.$invalid && FormContact.mail.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                    <p ng-show="FormContact.mail.$invalid && FormContact.mail.$touched" class="help-block">Indiquez un mail correct</p>

                </label>
               
                <label class="textarea">
                    <span class="icotextarea"><i class="fa fa-align-justify"></i></span><!--
                --><textarea placeholder="Votre message *" name="message" ng-model="message" ng-required="true"></textarea>
                 <span ng-show="FormContact.message.$valid && FormContact.message.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormContact.message.$invalid && FormContact.message.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                   <p ng-show="FormContact.message.$invalid && FormContact.message.$touched" class="help-block">Indiquez un message</p>

                 </label>

<button type="submit" ng-disabled="FormContact.name.$invalid && FormContact.mail.$invalid && FormContact.message.$invalid" ng-class="{ btnvalid : FormContact.name.$valid && FormContact.mail.$valid && FormContact.message.$valid  }"  >Envoyer </button>
        
</div>
            </form>


        </div>
    </div>
                        
                                          
            </div>
             
        </main><!--
        
           
         --><?php include_once 'blocdroit.php';?>

    </div>


    <script type="text/javascript">

    
         app = angular.module('app', []);

        app.controller('appCtrl', ['$scope', '$http', function ($scope, $http) {

$scope.sendMessage = function () {
  var method = 'POST';
  var url = <?php echo "'"; echo get_bloginfo('template_directory');echo "/contactengine.php'";?>;
  $scope.codeStatus = "";
  var FormData = {
      'name' : document.FormContact.name.value,
      'number' : document.FormContact.number.value,
      'mail' : document.FormContact.mail.value,
      'message' : document.FormContact.message.value
    };
    var req = {
      method: method,
      url: url,
      data: FormData,
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    }
   $http(req).success(function(){alert("success");}).error(function(){alert("error");});
    return false;
  };           

}]);




        jQuery(function ($) {
            //redirection ciblé via LocalStorage

            var $direction = JSON.parse(localStorage.getItem("redirection"));
            if ($direction == "home" || $direction == "articles" || $direction == "projects" || $direction == "services" || $direction == "about" || $direction == "contact") {
                show($direction);
                $('nav li a').removeClass('active');
                $('nav li a.' + $direction).addClass('active');
                localStorage.setItem("redirection", null);
                if ($direction == "projects") {
                    $(".menuprojects").css("height", "140px");
                } else if ($direction == "articles") {

                }
            } else if ($direction == "websites" || $direction == "apps" || $direction == "graphics" || $direction == "objects" || $direction == "imps" || $direction == "scripts") {
                show("navapp");
                $('nav li a').removeClass('active');
                $('nav li a.projects').addClass('active');
                $(".menuprojects").css("height", "140px");
                $("div.menuprojects a").removeClass('active2');
                $("div.menuprojects a." + $direction).toggleClass("active2")
                $('.list').html("<div class='ajaxload'><span class='bgop'></span><i class='fa  fa-4x fa-refresh fa-spin'></i></div>");

                jQuery.post(
                    ajaxurl, {
                        'action': 'loadctg',
                        'keyword': $direction
                    },
                    function (response) {
                        $('.list').html(response);
                    }
                );
                localStorage.setItem("redirection", null);
            }
        });


    </script>
</body>

</html>
