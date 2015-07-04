<?php get_header();?>

<body>
    <div id="container">



        <?php include_once 'blocgauche.php';?><!--
        

            
        --><main>

            <div id="home">
                <div class="presentation">
                    <div class="photo "></div>
                    <blockquote>
                       <h1>MEHDI MAKER </h1>
                       DEVELOPER - DESIGNER - MAKER <br><br>
                       Passionée d'informatique depuis l'enfance, <br>
                       Actuellement développeur au sein de Simplon.co.<br>
                       Découvrez ici toutes mes réalisations, site internet, applications mobile, ou encore objects connécté ... 
                       
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
                        <p>Un projet en tète ? Vous recherchez un développeur ?<br>Pour développez un site web, une application mobile ou toutes autres chose?
                        
                         Je suis prêt à étudier toute demande ! </p>
                         
                    

                        <p>+</p>
                    </div>
                </div>

            </div>








            <div id="articles" class="off">
                <div id="listarticles"><!--
            <?php $args=array( 'category_name'=> 'articles', 'showposts' => '-1', ); $recentPosts=new WP_Query($args); while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            --><a class="article" href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_article"><?php the_title(); ?></span>
                        <span class="resume_article"><?php the_excerpt() ;?></span>
                        <span class="date"><p class="JJ"> <?php the_time(d);?> </p><p class="MM"><?php the_time(M);?></p><p class="AA"><?php the_time(Y);?></p></span>
                    </a><!--
            <?php endwhile; ?>
            --></div>
               
            </div>







            <div id="projects" class="off">

                <div class="rowproject">


                    <a name="websites" class="loadctg websites blocleft" onclick="show('navapp')">

                        <div class="websites ctgproject">
                            <p>Websites </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'websites' ); ?>
                            </p>
                        </div>
                    </a><!--


                    --><a class="loadctg apps bloccenter" name="apps" onclick="show('navapp')">

                        <div class="apps ctgproject">
                            <p>Apps mobile </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'apps' ); ?>
                            </p>
                        </div>
                    </a><!--

                    --><a name="graphics" class="loadctg graphics blocright" onclick="show('navapp')">

                        <div class="graphics ctgproject">
                            <p>Graphics Design </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'graphics' ); ?>
                            </p>
                        </div>
                    </a>

                </div>

                <div class="rowproject">
                    <a name="objects" class="loadctg objects blocleft" onclick="show('navapp')">

                        <div class="objects ctgproject">
                            <p>Objects 3d </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'objects' ); ?>
                            </p>
                        </div>
                    </a><!--

                    --><a name="videos" class="loadctg videos bloccenter" onclick="show('navapp')">

                        <div class="videos ctgproject">
                            <p>Videos </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'videos' ); ?>
                            </p>
                        </div>
                    </a><!--
                    --><a name="others" class="loadctg others blocright" onclick="show('navapp')">

                        <div class="others ctgproject">
                            <p>Others </p>
                        </div>
                        <div class="number">
                            <p>
                                <?php echo count_cat_post( 'others' ); ?>
                            </p>
                        </div>
                    </a>



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
             
                       
                       <div ng-app="app">
        <div ng-controller="appCtrl">
            
            
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
             
              
            --><form method="post" name="FormContact" ng-submit="sendMessage()" novalidate action="<?php echo get_bloginfo('template_directory')?>/contactengine.php">
                     <fieldset>             <i class="fa fa-2x fa-paper-plane"></i>
                        <h3>Contacter moi par mail.</h4>
                            N'hésitez pas à me contacter en remplissant ce formulaire, <br>Je répondrais au plus vite.</fieldset>

                <label>
                    <span class="ico"><i class="fa fa-lg fa-user"></i></span><!--
                --><input placeholder="Votre nom *" name="name" ng-model="name" ng-required="true" />
                    <span ng-show="FormContact.name.$valid && FormContact.name.$touched " class="valid"><i class="fa fa-check"></i></span>
                    <span ng-show="FormContact.name.$invalid && FormContact.name.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                    <p ng-show="FormContact.name.$invalid && FormContact.name.$touched " class="help-block">Indiquez votre nom</p>
                </label>
                <label>
                    <span class="ico"><i class="fa fa-lg fa-phone"></i></span><!--
                --><input placeholder="Votre numéro (facultatif)" name="number" ng-model="number" ng-pattern="/[0-9 ]+/" ng-required="true">
                    <span ng-show="FormContact.number.$valid && FormContact.number.$touched " class="valid"><i class="fa fa-check"></i></span>
                   <span ng-show="FormContact.number.$invalid && FormContact.number.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                    <p ng-show="FormContact.number.$invalid && FormContact.number.$touched" class="help-block">Indiquez un numero valide</p>

                </label>
                <label>
                    <span class="ico"><i class="fa fa-lg  fa-envelope"></i></span><!--
                --><input placeholder="Votre mail *" name="mail" ng-model="mail" ng-pattern="/^(\w[-._+\w]*\w@\w[-._\w]*\w\.\w{2,3})$/" ng-required="true" />
                    <span ng-show="FormContact.mail.$valid && FormContact.mail.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormContact.mail.$invalid && FormContact.mail.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                    <p ng-show="FormContact.mail.$invalid && FormContact.mail.$touched" class="help-block">Indiquez un mail correct</p>

                </label>
               
                <label class="textarea">
                    <span class="icotextarea"><i class="fa fa-lg fa-align-justify"></i></span><!--
                --><textarea placeholder="Votre message *" name="message" ng-model="message" ng-required="true"></textarea>
                 <span ng-show="FormContact.message.$valid && FormContact.message.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormContact.message.$invalid && FormContact.message.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                   <p ng-show="FormContact.message.$invalid && FormContact.message.$touched" class="help-block">Indiquez un message</p>

                 </label>

<button type="submit" ng-class="{ btnvalid : FormContact.name.$valid && FormContact.mail.$valid && FormContact.message.$valid  }" >Envoyer </button>
        

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
            $scope.sendMessage = function (message) {
            //    alert($scope.name + " " + $scope.mail + " " + $scope.message);
            }
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
                    $(".menuprojects").css("height", "140px");
                } else if ($direction == "articles") {

                }
            } else if ($direction == "websites" || $direction == "apps" || $direction == "graphics" || $direction == "objects" || $direction == "videos" || $direction == "others") {
                show("navapp");
                $('nav li a').removeClass('active');
                $('nav li a.projects').addClass('active');
                $(".menuprojects").css("height", "140px");
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