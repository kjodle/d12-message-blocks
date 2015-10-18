<?php

// This file is based on wp-includes/js/tinymce/langs/wp-langs.php

if ( ! defined( 'ABSPATH' ) )
	exit;

if ( ! class_exists( '_WP_Editors' ) )
	require( ABSPATH . WPINC . '/class-wp-editor.php' );

function d12mb_tinymce_plugin_translation() {
	$strings = array(
		'nutshell' => __('This page in a nutshell', 'd12-message-blocks'),
	);
	$locale = _WP_Editors::$mce_locale;
	$translated = 'tinyMCE.addI18n("' . $locale . '.d12-message-blocks", ' . json_encode( $strings ) . ");\n";

	return $translated;
}

$strings = d12mb_tinymce_plugin_translation();