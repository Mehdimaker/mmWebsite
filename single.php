<?php get_header();?>

<body>
   <header class="cf">
        <div class="logo"></div>
        <div class="mmname"></div>
        <a href="#" id="navicon" class="closed"><i class="fa fa-bars"></i>
</a>
    </header>
    <nav id="main-nav">
        <a  name="home" onclick="show('home')" class="home active "><i class="fa  fa-lg fa-home"></i><span><br>Home</span></a>
        <a name="projects" onclick="show('projects')" class="projects displaylistprojects"><i class="fa fa-lg fa-folder-open"></i><span><br>Projects</span></a>
        <a name="articles" onclick="show('articles')" class="articles"><i class="fa fa-lg fa-file-text"></i><span><br>Articles</span></a>
        <a name="services" onclick="show('services')" class="services"><i class="fa fa-lg fa-briefcase"></i><span><br>Services</span></a>
        <a name="contact" onclick="show('contact')" class="contact"><i class="fa fa-lg fa-envelope"></i><span><br>Contact</span></a>
    </nav>
    <div class="fade"></div>
    <div id="container">

<?php include_once 'blocgauche.php';?><!--
 
--><main>     
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
        <div id="present_article" href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_article"><?php the_title(); ?></span>
                        <span class="resume_article"><?php the_excerpt() ;?></span>
                        <span class="date"><?php the_time(d);?>-<?php the_time(m);?>-<?php the_time(y);?></span>
        </div>
     
    
<div id="present_project">
       
    <?php 
    echo "<span class='thumbnail'><span class='bgop'></span>";
    the_post_thumbnail('full');
    echo "</span><span class='resumepro'><span class='bgop'></span><h1>";
    the_title();
    echo "</h1>";
    ?>
    
 <span class="date"><?php the_time(d);?>-<?php the_time(m);?>-<?php the_time(y);?></span>
    
    <?php   
    echo "<p>";
    the_excerpt() ;
    echo "</p></span><span class='comment'>Commentaires<i class='fa fa-comment fa-2x'></i><p>";
    
comments_number('0', '0 Comment', '%'); 
    echo "</p></span>"
?>
 
    </div>
    
    <span class="sep"></span>
    <div id="mainpro">
    <div id="etapes">
 
    <?php the_content(); ?>
   
            <section class="comment" > 
                     
<?php comments_template(); ?>
         
            </section>
    <?php endwhile; ?>
        </div>
        </div>

</main><!--

 --><?php include_once 'blocdroit.php';?>

    </div>
   
    <script type="text/javascript">
          //FORMM COMMENTS
        comapp = angular.module('comapp', []);

        comapp.controller('comappCtrl', ['$scope', '$http', function ($scope, $http) {
            $scope.sendMessage = function (message) {
            //    alert($scope.name + " " + $scope.mail + " " + $scope.message);
            }
}]);    
        
        jQuery(function ($) {
            
        
  

//Affichage navbtnpro
             $('#navverticalpro').removeClass('off');
                 $('#navverticalpro').addClass('on');
            
            //Detecte où l'on est
            //Ajoute la class active en fonction de la catégorie de l'article

            var ctg = "<?php $category = get_the_category();
            echo $category[0] -> cat_name; ?> ";
            $('nav li a').removeClass('active');

            
            if (ctg == "Articles ") {
                $('nav li a.articles').addClass('active');
                $('#present_project').addClass('off');
                $('#present_article').removeClass('off');
                 $('#present_article').addClass('on');

                //section height
                     $("#mainpro").css("height", "488px");
                     $("#mainpro div.description").css("width", "366px");
                     $("label.textarea").css("height", "267px");
                            $decalagesingle = $("#mainpro").height();

            } else {
                $('nav li a.projects').addClass('active');
                $(".menuprojects").css("height", "140px");
                ctg = ctg.toLowerCase();  
                $('div.menuprojects a.' + ctg).addClass('active2');       
                $('#present_article').addClass('off');
                $('#present_project').removeClass('off');
                $('#present_project').addClass('on');
                
                 //section height
                $("#mainpro").css("height", "461px");
                $("label.textarea").css("height", "242px");
                $decalagesingle = $("#mainpro").height();
                

                
                

            }


            // renvoie vers url quand clic sur liens dans nav
            $('nav a').on("click", function () {


                var redirection = $(this).attr("name");
                localStorage.setItem("redirection", JSON.stringify(redirection));
                window.location.href = "<?php echo bloginfo('url'); ?>";

            

            });
        });

//MOBILE PUSH MENU
            var 
                menuTop = document.getElementById( 'cbp-spmenu-s3' ),
            
                showTop = document.getElementById( 'showTop' ),
                
                body = document.body;

    
            showTop.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuTop, 'cbp-spmenu-open' );
            };
    </script>

</body>

</html>