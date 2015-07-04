<?php
 /**
* On supprime les fonctions inutiles de l'entête
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


/**
* On nettoie la façon qu'à WordPress d'afficher les feuilles de style.
* On remplace 				<link rel='stylesheet' id='mon-fichier-css'  href='mon-fichier.css' type='text/css' media='all' />
* Par ceci    				<link rel="stylesheet" href="mon-fichier.css" /> (+ media="..." si nécessaire)
*/
/*
add_filter('style_loader_tag', 'clean_styles_tags');
function clean_styles_tags ( $input ) {
    preg_match_all ( "!				<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches );

    // On affiche media="" uniquement si c'est utile.
    $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
    return '				<link href="' . $matches[2][0] . '" rel="stylesheet" media="" />' . "\n";
}
*/

/*

//On supprime les widgets inutiles du dashboard WordPress

function clean_dashboard_widgets() {
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // Plugins populaires
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // Feed du Blog WordPress.org
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // Des news de WordPress
    remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // Publiez rapidement un article
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // Vos récents brouillons
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // Liens entrants
}
add_action('admin_init', 'clean_dashboard_widgets');

*/