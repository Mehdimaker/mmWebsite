<?php 



// TEXTE PAR DEFAUT DANS NOUVELLE ARTICLES
function texte_post_par_defaut( $content )
{
global $post_type;
if ( 'post' == $post_type )
{
$content = "<div class='infos'>
	<a href=''target='_blank'><span>View all</span><i class='fa fa-lg fa-search'></i> </a>
	<a href=''target='_blank'><span>Github</span><i class='fa fa-lg fa-github'></i> </a>
	<a href=''target='_blank'><i class='fa fa-circle-o fa-lg'><span>T</span></i>Thingiverse</a>
	<a href=''target='_blank'><span>Download</span><i class='fa fa-lg fa-download'></i> </a> 
</div>

<section class='pres'>

<span class='bgtechno'></span>
<div class='techno'>
<div ><p>Languages</p>
	<span class='html'></span><span class='css'></span><span class='js'></span>
</div><div><p>Software</p>
	<span class='ff'></span><span class='sublime'></span>
</div>
<div><p>Hardware</p>
	<span class='ff'></span><span class='sublime'></span>
</div>
</div></section>


<section> <span class='bgop'></span><div class='description'>
<h3> </h3>

</div><div class='illustration'>

</div></section>


<section> <span class='bgop'></span><div class='description'>
<h3> </h3>

</div><div class='illustration'>

</div></section>


<section> <span class='bgop'></span><div class='description'>
<h3> </h3>

</div><div class='illustration'>

</div></section> ";
return $content;
}
}
add_filter('default_content', 'texte_post_par_defaut');

//// Ajoute les scripts js
   function jm_scripts() {
       
    wp_register_script('handle', get_bloginfo('template_directory') . '/js/adddisplay.js', false, null, false); 
       wp_register_script('handle2', get_bloginfo('template_directory') . '/js/addactive.js', false, null, false);
       wp_register_script('handle3', get_bloginfo('template_directory') . '/js/navlist.js', false, null, false);
       wp_register_script('handle4', get_bloginfo('template_directory') . '/js/angular.min.js', false, null, false);



    wp_enqueue_script('handle'); wp_enqueue_script('handle2');wp_enqueue_script('handle3');wp_enqueue_script('handle4');
}
add_action('wp_enqueue_scripts', 'jm_scripts', 100);

//// Suprime la admin bar pour tous les utilisateurs
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


/* On supprime les fonctions inutiles de l'entête
*/
add_action('init', 'clean_head');
function clean_head () {
    remove_action( 'wp_head', 'feed_links', 2 ); // Affiche les liens des flux RSS pour les Articles et les commentaires.
    remove_action( 'wp_head', 'feed_links_extra', 3 ); // Affiche les liens des flux RSS supplémentaires comme les catégories de vos articles.
    remove_action( 'wp_head', 'rsd_link' ); // Affiche le lien RSD (Really Simple Discovery). Je ne l'ai jamais utilisé mais si vous êtes certain d'en avoir besoin, laissez-le.
    remove_action( 'wp_head', 'wlwmanifest_link' ); // Affiche le lien xml dont a besoin Windows Live Writer pour accéder à votre blog. Si vous ne publiez pas vos articles avec ce logiciel, il ne vous sert à rien.
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Affiche les liens relatifs vers les articles suivants et précédents. (<kbd>      				<link title=" href=" rel="prev" /></kbd> et <kbd>       				<link title="" href=""" rel="next" /></kbd>). Ces liens peuvent parfois affecter votre SEO.
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Affiche l'url raccourcie de la page ou vous vous situez.

    /**
    * On en profite pour supprimer le style en trop ajouté par le widget "Commentaires récents"
    */
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
}





function add_js_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri().'/js/ajaxload.js',false, null, false );

	// pass Ajax Url to script.js
	wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');


/// LOAD CTG


add_action( 'wp_ajax_loadctg', 'loadctg' );
add_action( 'wp_ajax_nopriv_loadctg', 'loadctg' );

function loadctg() {
	// récupération du mot tapé dans la recherche
	$keyword = $_POST['keyword'];

	$args = array(
        'category_name' => $keyword,
        'order'   => 'DESC'
	);

	$ajax_query = new WP_Query($args);

	if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
		
    echo "<a class='loadarticle' href='";
        the_permalink();
    echo "'><h1>";
        the_title();
    echo "</h1><span class='thumbnail'><span class='bgop'></span>";
        the_post_thumbnail( 'full' );     
    echo "</span><span class='resumepro'><p>";
       the_excerpt() ;
    echo "</p></span><span class='infopro'><span class='date'><p class='JJ'>";
        the_time(d); 
    echo "</p><p class='MM'>";
        the_time(M);
    echo "</p><p class='AA'>";
        the_time(Y);
    echo "</p></span></span></a>";
    
    
 
	endwhile;
        else: echo "<div class='noproject'>Pas de projet pour le moment ...</div>";

	endif;
    
      echo "<script type='text/javascript' src='";
          bloginfo( 'template_url' );
          echo"/js/makelist.js'></script>";
	die();
    
   
}


//AFFICHER IMAGE A LA UNE ARTICLE

add_theme_support( 'post-thumbnails');


/*
Count all post in Category
Author : Ayush
URL : WebGarb.com
*/
function count_cat_post($category) {
if(is_string($category)) {
	$catID = get_cat_ID($category);
} 
elseif(is_numeric($category)) {
	$catID = $category;
} else {
	return 0;
}
$cat = get_category($catID);
return $cat->count;
}


function lists_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<p><time datetime="%2$s">%3$s</time></p>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Votre commentaire est en cours de modération.', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
			</section><!-- .comment-content -->

		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}


function comment_form_modify( $args = array(), $post_id = null ) {
	if ( null === $post_id )
		$post_id = get_the_ID();

	$commenter = wp_get_current_commenter();
	$user = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';

	$args = wp_parse_args( $args );
	if ( ! isset( $args['format'] ) )
		$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';

	$req      = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	$html_req = ( $req ? " required='required'" : '' );
	$html5    = 'html5' === $args['format'];
	$fields   =  array(
		'author' => '<label>
         <span class="ico"><i class="fa fa-user"></i></span><!--
                --><input placeholder="Votre nom *" ng-model="author" ng-required="true" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
                    <span ng-show="FormComment.author.$valid && FormComment.author.$touched " class="valid"><i class="fa fa-check"></i></span>
                    <span ng-show="FormComment.author.$invalid && FormComment.author.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                    <p ng-show="FormComment.author.$invalid && FormComment.author.$touched " class="help-block">Indiquez votre nom</p>
                </label>',
        
        
        
		'email'  => '
            <label>
                    <span class="ico"><i class="fa  fa-envelope"></i></span><!--
                --><input placeholder="Votre mail *" ng-model="email" ng-pattern="/^(\w[-._+\w]*\w@\w[-._\w]*\w\.\w{2,3})$/" ng-required="true" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
                    <span ng-show="FormComment.email.$valid && FormComment.email.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormComment.email.$invalid && FormComment.email.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                    <p ng-show="FormComment.email.$invalid && FormComment.email.$touched" class="help-block">Indiquez un mail correct</p>

                </label>',
	);

	$required_text = sprintf( ' ' . __('Required fields are marked %s'), '<span class="required">*</span>' );

	/**
	 * Filter the default comment form fields.
	 *
	 * @since 3.0.0
	 *
	 * @param array $fields The default comment fields.
	 */
	$fields = apply_filters( 'comment_form_default_fields', $fields );
	$defaults = array(
		'fields'               => $fields,
		'comment_field'        => '<label class="textarea">
                    <span class="icotextarea"><i class="fa fa-align-justify"></i></span><!--
                --><textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true" required="required" placeholder="Votre commentaire *" ng-model="message" ng-required="true"></textarea>
                 <span ng-show="FormComment.comment.$valid && FormComment.comment.$touched " class="valid"><i class="fa fa-check"></i></span>
                 <span ng-show="FormComment.comment.$invalid && FormComment.comment.$touched " class="invalid"><i class="fa fa-remove"></i></span>
                                   <p ng-show="FormComment.comment.$invalid && FormComment.comment.$touched" class="help-block">Indiquez un message</p>

                 </label>',
		/** This filter is documented in wp-includes/link-template.php */
		'must_log_in'          => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		/** This filter is documented in wp-includes/link-template.php */
		'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
		'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p>',
		'comment_notes_after'  => '<p class="form-allowed-tags" id="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'class_submit'         => 'submit',
		'name_submit'          => 'submit',
		'title_reply'          => __( 'Leave a Reply' ),
		'title_reply_to'       => __( 'Leave a Reply to %s' ),
		'cancel_reply_link'    => __( 'Cancel reply' ),
		'label_submit'         => __( 'Post Comment' ),
		'submit_button'        => '<button type="submit" id="%2$s" class="%3$s" value="%4$s" ng-disabled="FormComment.$invalid" ng-class="{ btnvalid : FormComment.$valid}" >Envoyer</button>
        ',
		'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
		'format'               => 'xhtml',
	);

	/**
	 * Filter the comment form default arguments.
	 *
	 * Use 'comment_form_default_fields' to filter the comment fields.
	 *
	 * @since 3.0.0
	 *
	 * @param array $defaults The default comment form arguments.
	 */
	$args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );

		if ( comments_open( $post_id ) ) : ?>
			<?php
			/**
			 * Fires before the comment form.
			 *
			 * @since 3.0.0
			 */
			do_action( 'comment_form_before' );
			?>
			<div id="respond" class="comment-respond">
			<div class="titlereponse">
				<i class="fa fa-2x  fa-comment-o"></i>
				<h4 >Laisser un Commentaire</h4>
			<p>Votre adresse e-mail ne sera pas publié.</p>	
            </div>
				<?php if ( get_option( 'comment_registration' ) && !is_user_logged_in() ) : ?>
					<?php echo $args['must_log_in']; ?>
					<?php
					/**
					 * Fires after the HTML-formatted 'must log in after' message in the comment form.
					 *
					 * @since 3.0.0
					 */
					do_action( 'comment_form_must_log_in_after' );
					?>
				<?php else : ?>
					<form name="FormComment" novalidate action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post" id="<?php echo esc_attr( $args['id_form'] ); ?>" class="comment-form"<?php echo $html5 ? ' novalidate' : ''; ?>>
						
						
							<?php
							/**
							 * Fires before the comment fields in the comment form.
							 *
							 * @since 3.0.0
							 */
							do_action( 'comment_form_before_fields' );
							foreach ( (array) $args['fields'] as $name => $field ) {
								/**
								 * Filter a comment form field for display.
								 *
								 * The dynamic portion of the filter hook, `$name`, refers to the name
								 * of the comment form field. Such as 'author', 'email', or 'url'.
								 *
								 * @since 3.0.0
								 *
								 * @param string $field The HTML-formatted output of the comment form field.
								 */
								echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
							}
							/**
							 * Fires after the comment fields in the comment form.
							 *
							 * @since 3.0.0
							 */
							do_action( 'comment_form_after_fields' );
							?>
						
						<?php
						/**
						 * Filter the content of the comment textarea field for display.
						 *
						 * @since 3.0.0
						 *
						 * @param string $args_comment_field The content of the comment textarea field.
						 */
						echo apply_filters( 'comment_form_field_comment', $args['comment_field'] );
						?>
						

						<?php
						$submit_button = sprintf(
							$args['submit_button'],
							esc_attr( $args['name_submit'] ),
							esc_attr( $args['id_submit'] ),
							esc_attr( $args['class_submit'] ),
							esc_attr( $args['label_submit'] )
						);

						/**
						 * Filter the submit button for the comment form to display.
						 *
						 * @since 4.2.0
						 *
						 * @param string $submit_button HTML markup for the submit button.
						 * @param array  $args          Arguments passed to `comment_form()`.
						 */
						$submit_button = apply_filters( 'comment_form_submit_button', $submit_button, $args );

						$submit_field = sprintf(
							$args['submit_field'],
							$submit_button,
							get_comment_id_fields( $post_id )
						);

						/**
						 * Filter the submit field for the comment form to display.
						 *
						 * The submit field includes the submit button, hidden fields for the
						 * comment form, and any wrapper markup.
						 *
						 * @since 4.2.0
						 *
						 * @param string $submit_field HTML markup for the submit field.
						 * @param array  $args         Arguments passed to comment_form().
						 */
						echo apply_filters( 'comment_form_submit_field', $submit_field, $args );

						/**
						 * Fires at the bottom of the comment form, inside the closing </form> tag.
						 *
						 * @since 1.5.0
						 *
						 * @param int $post_id The post ID.
						 */
						do_action( 'comment_form', $post_id );
						?>
					</form>
				<?php endif; ?>
			</div><!-- #respond -->
			<?php
			/**
			 * Fires after the comment form.
			 *
			 * @since 3.0.0
			 */
			do_action( 'comment_form_after' );
		else :
			/**
			 * Fires after the comment form if comments are closed.
			 *
			 * @since 3.0.0
			 */
			do_action( 'comment_form_comments_closed' );
		endif;
}

