<?php get_header();?>


<body>
    <nav  id="navbar">
          <ul>
            <li>
                <a  name="home" onclick="show('home')" class="home active "><i class="fa  fa-lg fa-home"></i><span><br>Home</span></a>
            </li>
            <li>
                <a name="articles" onclick="show('articles')" class="articles"><i class="fa fa-lg fa-file-text"></i><span><br>Articles</span></a>
            </li>
            <li>
                <a name="projects" onclick="show('projects')" class="projects displaylistprojects"><i class="fa fa-lg fa-folder-open"></i><span><br>Projects</span></a>
            </li>   
            <li>
                <a name="services" onclick="show('services')" class="services"><i class="fa fa-lg fa-briefcase"></i><span><br>Services</span></a>
            </li>
            <li>
                <a name="contact" onclick="show('contact')" class="contact"><i class="fa fa-lg fa-envelope"></i><span><br>Contact</span></a>
            </li>
        </ul>
    </nav>

    <div id="container">
        <?php include_once 'blocgauche.php';?><!--
        
        --><main>

            <div id="home">
                <div class="presentation">
                    <span class='bgop'></span>
                    <div class="photo "></div>
                    <blockquote>
                       <h1>MEHDI MAKER </h1>
                      <span> DEVELOPER - DESIGNER - MAKER </span>
                       <p>Passioné d'informatique depuis l'enfance, <br>
                       Actuellement développeur au sein de Simplon.co.<br>
                       Découvrez ici toutes mes réalisations, site internet, applications mobile, ou encore objects connectés ... 
                       </p>
                       </blockquote>
                </div>





                <div class="recent blocleft">
                    <h4>Derniers Articles</h4>
                    <?php $args=array( 'category_name'=> 'articles', 'showposts' => '6', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_projects"><?php the_title(); ?></span>
                        <span class="date"><p class="JJ"> <?php the_time(d);?> </p><p class="MM"><?php the_time(M);?></p><p class="AA"><?php the_time(Y);?></p></span>
                    </a>

                    <?php endwhile; ?>

                </div><!--

                --><div class="recent bloccenter">
                    <h4>Derniers Projets</h4>
                    <?php $args=array( 'category_name'=> 'websites,apps,graphics,objects,videos,others', 'showposts' => '6', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                    <a class='<?php $cat = get_the_category(); $cat = $cat[0]; echo strtolower($cat->cat_name);?>' href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_projects"><?php the_title(); ?></span>
                    </a>

                    <?php endwhile; ?>

                </div><!--


                --><div class="recent blocright">
                    <h4>Un Projet ?</h4>
                    <div class="comm">
                        <p>Vous recherchez un développeur ? <br>Quelqu'un de sérieux et compétent pour réaliser votre projet ?<br><br>
                        Ne cherchez pas plus loin... <br>Je suis la personne qu'il vous faut !<br><br>
                        Je vous invite à me rencontrer, afin de discuter d'une éventuelle collaboration !<br><br>
                        A très bientôt !   
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
                        <span class="containdate"><div class="date"><p class="JJ"> <?php the_time(d);?> </p><p class="MM"><?php the_time(M);?></p><p class="AA"><?php the_time(Y);?></p></div></span>
                    </a><!--
            <?php endwhile; ?>
            --></div>
               
            </div>







            <div id="projects" class="off">

                <div class="rowproject rowprojecttop">


                    <span class="blocleft"><a name="websites" class="loadctg websites " onclick="show('navapp')">
                        <i class="websites"></i>
                        <div class="ctgproject">
                            <p>Websites </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'websites' ); ?>
                            </p>
                        </div>
                    </a></span><!--


                    --><span class="bloccenter"><a class="loadctg apps " name="apps" onclick="show('navapp')">
                        <i class="apps"></i>
                        <div class="ctgproject">
                            <p>Apps mobile </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'apps' ); ?>
                            </p>
                        </div>
                    </a></span><!--

                    --><span class="blocright"><a name="graphics" class="loadctg graphics" onclick="show('navapp')">
                        <i class="graphics"></i>
                        <div class="ctgproject">
                            <p>Graphics Design </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'graphics' ); ?>
                            </p>
                        </div>
                    </a></span>

                </div>

                <div class="rowproject rowprojectbottom" >
                    <span class="blocleft"><a name="objects" class="loadctg objects" onclick="show('navapp')">
                        <i class="objects"></i>
                        <div class="ctgproject">
                            <p>Objects 3D </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'objects' ); ?>
                            </p>
                        </div>
                    </a></span><!--

                    --><span class="bloccenter"><a name="videos" class="loadctg videos" onclick="show('navapp')">
                        <i class="videos"></i>
                        <div class="ctgproject">
                            <p>Videos </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'videos' ); ?>
                            </p>
                        </div>
                    </a></span><!--
                    --><span class="blocright"><a name="others" class="loadctg others" onclick="show('navapp')">
                        <i class="others"></i>
                        <div class="ctgproject">
                            <p>Others </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'others' ); ?>
                            </p>
                        </div>
                    </a></span>



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



          

            <div id="contact" class="off">
             
                       
                      <div class="height100"ng-app="app">
        <div class="height100" ng-controller="appCtrl">
            
            
             <div id="apropos">
             <h3>A propos </h3>
                <p>MehdiMaker.com,<br> Website entièrement réalisé par Mehdi M.
          <br>
             Front End: <br> Javascript | Jquery | Angular | Html | Css
  <br>Back End: <br>Wordpress | Php
                </p>



            
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
                
                  </div><!--
             
              
            --><form name="FormContact" ng-submit="sendMessage()" novalidate >
                     <fieldset>             <i class="fa fa-2x fa-paper-plane"></i>
                        <h3>Contacter moi par mail.</h3>

                            N'hésitez pas à me contacter en remplissant ce formulaire, <br>Je répondrais au plus vite.</fieldset>
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
            if ($direction == "home" || $direction == "articles" || $direction == "projects" || $direction == "services" || $direction == "contact") {
                show($direction);
                $('nav li a').removeClass('active');
                $('nav li a.' + $direction).addClass('active');
                localStorage.setItem("redirection", null);
                if ($direction == "projects") {
                    $(".menuprojects").css("height", "130px");
                } else if ($direction == "articles") {

                }
            } else if ($direction == "websites" || $direction == "apps" || $direction == "graphics" || $direction == "objects" || $direction == "videos" || $direction == "others") {
                show("navapp");
                $('nav li a').removeClass('active');
                $('nav li a.projects').addClass('active');
                $(".menuprojects").css("height", "130px");
                $("div.menuprojects a").removeClass('active2');
                $("div.menuprojects a." + $direction).toggleClass("active2")
                $('.list').html("<div class='ajaxload'><i class='fa  fa-5x fa-cog fa-spin'></div>");

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