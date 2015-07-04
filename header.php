<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <?php wp_deregister_script( 'jquery-ui-core' ); wp_deregister_script( 'jquery-ui-tab' ); wp_deregister_script( 'jquery-ui-autocomplete' ); wp_deregister_script( 'jquery-ui-accordion' ); wp_deregister_script( 'jquery-ui-autocomplete' ); wp_deregister_script( 'jquery-ui-button' ); wp_deregister_script( 'jquery-ui-datepicker'); wp_deregister_script( 'jquery-ui-dialog' ); wp_deregister_script( 'jquery-ui-draggable' ); wp_deregister_script( 'jquery-ui-droppable' ); wp_deregister_script( 'jquery-ui-mouse' ); wp_deregister_script( 'jquery-ui-position' ); wp_deregister_script( 'jquery-ui-progressbar'); wp_deregister_script( 'jquery-ui-resizable' ); wp_deregister_script( 'jquery-ui-selectable'); wp_deregister_script( 'jquery-ui-slider' ); wp_deregister_script( 'jquery-ui-sortable' ); wp_deregister_script( 'jquery-ui-tabs' ); wp_deregister_script( 'jquery-ui-widget' ); wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery' ), '1.8', true); ?>
    <?php wp_head(); ?>
</head>



