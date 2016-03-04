<?php
/*
 * Plugin Name: d12 Message Blocks
 * Plugin URI: http://kjodle.net/wordpress/d12-message-blocks/
 * Description: Adds shortcodes for message blocks.
 * Version: 2.2
 * Author: Kenneth John Odle
 * Author URI: http://kjodle.net/
 * Text Domain: d12-message-blocks
 * Domain Path: /lang
 * License: GPL3
*/

/*
Icons courtesy of Fat Cow
http://www.fatcow.com/free-icons
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Load our translations
load_plugin_textdomain( 'lang');
function d12mb_tinymce_plugin_add_locale($locales) {
	$locales ['My-Custom-Tinymce-Plugin'] = plugin_dir_path ( __FILE__ ) . 'd12mb-tinymce-plugin-langs.php';
	return $locales;
}
add_filter('mce_external_languages', 'd12mb_tinymce_plugin_add_locale');


// Initialize our array if it's not set


// Retrieve Message Block options from database, register appropriate stylesheet, and enqueue
function d12bs_retrieve() {
	$mbbsoptions = get_option('d12mb_options');
	switch($mbbsoptions['bs']) {
		case "1" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-round-single-thin.css', __FILE__), false, '1.1.0' );
			break;
		case "2" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-round-single-thick.css', __FILE__), false, '1.1.0' );
			break;
		case "3" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-round-double.css', __FILE__), false, '1.1.0' );
			break;
		case "4" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-square-single-thin.css', __FILE__), false, '1.1.0' );
			break;
		case "5" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-square-single-thick.css', __FILE__), false, '1.1.0' );
			break;
		case "6" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-square-double.css', __FILE__), false, '1.1.0' );
			break;
		case "7" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-mw-thick-thin.css', __FILE__), false, '1.1.0' );
			break;
		case "8" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-mw-thick-thick.css', __FILE__), false, '1.1.0' );
			break;
		case "9" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-mw-thin-thick.css', __FILE__), false, '1.1.0' );
			break;
		case "10" :
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-mw-thin-thin.css', __FILE__), false, '1.1.0' );
			break;
		default:
			wp_enqueue_style( 'd12mb', plugins_url('css/bs-round-single-thick.css', __FILE__), false, '1.1.0' );
			return;
	}
}
add_action( 'wp_enqueue_scripts', 'd12bs_retrieve' );


// Retrieve Message Block options from database, register appropriate stylesheet, and enqueue
function d12cs_retrieve() {
	$mbcsoptions = get_option('d12mb_options');
	switch($mbcsoptions['cs']) {
		case "1" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-default.css', __FILE__), false, '1.1.0' );
			break;
		case "2" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-business.css', __FILE__), false, '1.1.0' );
			break;
		case "3" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-beach.css', __FILE__), false, '1.1.0' );
			break;
		case "4" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-sol.css', __FILE__), false, '1.1.0' );
			break;
		case "5" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-aqua.css', __FILE__), false, '1.1.0' );
			break;
		case "6" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-forest.css', __FILE__), false, '1.1.0' );
			break;
		case "7" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-winter.css', __FILE__), false, '1.1.0' );
			break;
		case "8" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-magique.css', __FILE__), false, '1.1.0' );
			break;
		case "9" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-solstice.css', __FILE__), false, '1.1.0' );
			break;
		case "10" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-bark.css', __FILE__), false, '1.1.0' );
			break;
		case "11" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-leaves.css', __FILE__), false, '1.1.0' );
			break;
		case "12" :
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-bw.css', __FILE__), false, '1.1.0' );
			break;
		default:
			wp_enqueue_style( 'd12cs', plugins_url('css/cs-default.css', __FILE__), false, '1.1.0' );
			return;
	}
}
add_action( 'wp_enqueue_scripts', 'd12cs_retrieve' );


/* Enqueue our back end style sheet */
function d12_shortcodes_admin_styles() {
	wp_enqueue_style( 'd12mb-screenstyle', plugins_url( '/css/admin.css', __FILE__, '1.0', 'screen' ) );
}
add_action( 'admin_enqueue_scripts', 'd12_shortcodes_admin_styles' );


/*
* Functions for our shortcodes *
*/

/* Nutshell */
function d12_nutshell( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-nutshell"><div class="d12-sc-text"><p><strong>' .
	__( 'This article in a nutshell:', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-nutshell' , 'd12_nutshell' );

/* Update */
function d12_update( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-update"><div class="d12-sc-text"><p><strong>' .
	__( 'Update Information:', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-update' , 'd12_update' );

/* Attach */
function d12_attach( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-attach"><div class="d12-sc-text"><p><strong>' .
	__( 'Downloads:', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-attach' , 'd12_attach' );

/* Delete */
function d12_delete( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-delete"><div class="d12-sc-text"><p><strong>' .
	__( 'This page has been marked for deletion.', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-delete' , 'd12_delete' );

/* Part of a Series */
function d12_part( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'series' => '',
		), $atts )
	);
	echo '<div class="d12-block d12-part"><div class="d12-sc-text"><p><strong>';
	printf(__( 'This page is part of a series on %s', 'd12-message-blocks' ), $series );
	echo '.</strong></p>' . $content . '</div></div>	';
}
add_shortcode( 'd12-part' , 'd12_part' );

/* Mentions */
function d12_mentions( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-mention"><div class="d12-sc-text"><p><strong>' .
	__( 'This page has been mentioned here:', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-mentions' , 'd12_mentions' );

/* Warning */
function d12_warning( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-warning"><div class="d12-sc-text"><p><strong>' .
	__ ( 'Warning!', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-warning' , 'd12_warning' );

/* Important */
function d12_important( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-important"><div class="d12-sc-text"><p><strong>' .
	__ ( 'Important!', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-important' , 'd12_important' );

/* Notice */
function d12_notice( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-notice"><div class="d12-sc-text"><p><strong>' .
	__( 'Notice!', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-notice' , 'd12_notice' );

/* Error */
function d12_error( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-error"><div class="d12-sc-text"><p><strong>' .
	__( 'Error!', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-error' , 'd12_error' );

/* Caution */
function d12_caution( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-caution"><div class="d12-sc-text"><p><strong>' .
	__( 'Caution!', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-caution' , 'd12_caution' );

/* Archive */
function d12_archive( $atts, $content= NULL) {
	$filestring = '<div class="d12-block d12-archive"><div class="d12-sc-text"><p><strong>' .
	__( 'This page has been archived.', 'd12-message-blocks' )
	. '</strong></p>' . $content . '</div></div>';
	return $filestring;
}
add_shortcode( 'd12-archive' , 'd12_archive' );

/* Support */
function d12_support( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-support">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-support' , 'd12_support' );

/* Contact */
function d12_contact( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-contact">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-contact' , 'd12_contact' );

/* Global */
function d12_global( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-global">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-global' , 'd12_global' );

/* Green */
function d12_green( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-green">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-green' , 'd12_green' );

/* Accept */
function d12_accept( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-accept">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-accept' , 'd12_accept' );

/* Stats */
function d12_stats( $atts, $content= NULL) {
	extract( shortcode_atts(
		array(
			'title' => '',
		), $atts )
	);
	return '<div class="d12-block d12-stats">
				<div class="d12-sc-text"><p><strong>' . $title . '</strong></p>' . $content . '</div>
			</div>
			';
}
add_shortcode( 'd12-stats' , 'd12_stats' );


/*
* Register a function with TinyMCE
*/
add_action( 'init', 'd12mb_buttons' );
function d12mb_buttons() {
	if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
	{
		add_filter( "mce_external_plugins", "d12mb_add_buttons" );
		add_filter( 'mce_buttons_2', 'd12mb_register_buttons' );
	}
}
function d12mb_add_buttons( $plugin_array ) {
	$plugin_array['d12mb'] = plugins_url( 'js/d12mb.js', __FILE__ );
	return $plugin_array;
}
function d12mb_register_buttons( $buttons ) {
	array_push( $buttons, 'd12-mb-button', 'd12-mb-button-2' );
	return $buttons;
}

// Experiment to add shortcode to excerpts
// wordpress.org/support/topic/how-to-enable-shortcodes-in-excerpts?replies=8#post-1843419



/**
 * Add an options page
 *
 * @since d12 Message Blocks 1.1
 */
require plugin_basename( 'plugin-options.php' );
