<?php get_header();?>

<body>
    <div id="container">

<?php include_once 'blocgauche.php';?><!--
 
--><main>     
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
        <div id="present_article" href="<?php the_permalink() ?>" rel="bookmark">
                        <span class="title_article"><?php the_title(); ?></span>
                        <span class="resume_article"><?php the_excerpt() ;?></span>
                        <span class="date"><p class="JJ"> <?php the_time(d);?> </p><p class="MM"><?php the_time(M);?></p><p class="AA"><?php the_time(Y);?></p></span>
        </div>
     
    
<div id="present_project">
       
    <?php 
    echo "<span class='thumbnail'>";
    the_post_thumbnail('full');
    echo "</span><span class='resumepro'><h1>";
    the_title();
    echo "</h1>";
    ?>
    
<span class="date">
   <p class="JJ"> <?php the_time(d);?> </p><p class="MM"><?php the_time(M);?></p><p class="AA"><?php the_time(Y);?></p></span>
    
    <?php   
    echo "<p>";
    the_excerpt() ;
    echo "</p></span><span class='comment'>Comments<i class='fa fa-comment fa-2x'></i><p>";
    
comments_number('0', '0 Comment', '%'); 
    echo "</p></span>"
?>
 
    </div>
    
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
                alert($scope.name + " " + $scope.mail + " " + $scope.message);
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
                     $("#mainpro").css("height", "444px");
                     $("label.textarea").css("height", "225px");
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
                $("#mainpro").css("height", "378px");
                $("label.textarea").css("height", "159px");
                $decalagesingle = $("#mainpro").height();
                

                
                

            }


            // renvoie vers url quand clic sur liens dans nav
            $('nav a').on("click", function () {


                var redirection = $(this).attr("name");
                localStorage.setItem("redirection", JSON.stringify(redirection));
                window.location.href = "<?php echo bloginfo('url'); ?>";

            

            });
        });
    </script>

</body>

</html>