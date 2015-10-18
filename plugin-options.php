<?php

// Create a new admin panel
function d12mb_admin_panel_setup(){
	add_submenu_page(
	'options-general.php',
	'd12 Message Blocks Options',
	'd12 Message Blocks',
	'manage_options',
	'd12-menu-blocks-options',
	'd12mb_options_callback'
	);
}
add_action('admin_menu', 'd12mb_admin_panel_setup');


// Callback to create the setting page
function d12mb_options_callback(){
?>

	<div class="wrap">
	<h2>d12 Message Blocks Options</h2>
	<p><strong>New!</strong> In version 1.1, you can select from 10 different border styles and 11 color schemes. Seven of the color schemes are suitable for light backgrounds, and the other four are suitable for dark backgrounds. (Screenshots display the "Business" color scheme.)</p>


	<form method="post" action="options.php"> 
	<?php
		settings_fields( 'd12mb_options_group' );
		do_settings_sections( 'd12mb_border' );
		do_settings_sections( 'd12mb_color' );

	?>
	<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e(__('Save Options','d12-message-blocks')); ?>" />
	</form>
	</div>
<?php
};


// Add the admin settings
add_action( 'admin_init', 'd12mb_admin_init');
function d12mb_admin_init() {
	register_setting(
		'd12mb_options_group',
		'd12mb_options',
		''
	);
	add_settings_section(
		'd12mb_border_settings',
		'Border Style Options',
		'bs_settings_section',
		'd12mb_border'
	);
	add_settings_field(
		'd12mb_bs',
		'Message Block Border Style',
		'bs_settings_field',
		'd12mb_border',
		'd12mb_border_settings'
	);
	add_settings_section(
		'd12mb_color_settings',
		'Color Scheme Options',
		'cs_settings_section',
		'd12mb_color'
	);
	add_settings_field(
		'd12mb_cs',
		'Message Blocks Color Scheme',
		'cs_settings_field',
		'd12mb_color',
		'd12mb_color_settings'
	);
};


// Callback for border style setting_section
function bs_settings_section() {
	echo '<p>Select from one of 10 different border styles.</p>';
};



// Callback for color scheme setting_section
function cs_settings_section() {
	echo '<p>Select from one of 11 different color schemes.</p>';
};



// Callback for settings_field for Border Style
function bs_settings_field(){
	$options = get_option( 'd12mb_options' );

	$html = '<p><b>Rounded Corner Options</b></p>';

	$html .= '<input type="radio" id="bs_one" name="d12mb_options[bs]" value="1"' . checked( 1, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_one">' . __( 'Rounded Corners Thin Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example01.png', __FILE__ ) . '" /></label><br /> ';

	$html .= '<input type="radio" id="bs_two" name="d12mb_options[bs]" value="2"' . checked( 2, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_two">' . __( 'Rounded Corners Thick Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example02.png', __FILE__ ) . '" /></label><br /> ';

	$html .= '<input type="radio" id="bs_three" name="d12mb_options[bs]" value="3"' . checked( 3, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_three">' . __( 'Rounded Corners Double Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example03.png', __FILE__ ) . '" /></label><br /> ';

	$html .= '<p><b>Square Corner Options</b></p>';

	$html .= '<input type="radio" id="bs_four" name="d12mb_options[bs]" value="4"' . checked( 4, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_four">' . __( 'Square Corners Thin Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example04.png', __FILE__ ) . '" /></label><br />';

	$html .= '<input type="radio" id="bs_five" name="d12mb_options[bs]" value="5"' . checked( 5, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_five">' . __( 'Square Corners Thick Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example05.png', __FILE__ ) . '" /></label><br />';

	$html .= '<input type="radio" id="bs_six" name="d12mb_options[bs]" value="6"' . checked( 6, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_six">' . __( 'Square Corners Double Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example06.png', __FILE__ ) . '" /></label><br />';

	$html .= '<p><b>MediaWiki Style Borders</b> have a bar on the left side</p>';

	$html .= '<input type="radio" id="bs_seven" name="d12mb_options[bs]" value="7"' . checked( 7, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_seven">' . __( 'Thick Bar Thin Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example07.png', __FILE__ ) . '" /></label><br />';

	$html .= '<input type="radio" id="bs_eight" name="d12mb_options[bs]" value="8"' . checked( 8, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_eight">' . __( 'Thick Bar Thick Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example08.png', __FILE__ ) . '" /></label><br />';

	$html .= '<input type="radio" id="bs_nine" name="d12mb_options[bs]" value="9"' . checked( 9, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_nine">' . __( 'Thin Bar Thick Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example09.png', __FILE__ ) . '" /></label><br />';

	$html .= '<input type="radio" id="bs_ten" name="d12mb_options[bs]" value="10"' . checked( 10, $options['bs'], false ) . '/>';
	$html .= '<label for="bs_ten">' . __( 'Thin Bar Thin Border', 'd12-message-blocks' ) . '<br />';
	$html .= '<img src="' .plugins_url( 'examples/example10.png', __FILE__ ) . '" /></label><br />';

echo $html;
}

// Callback for settings_field for Color Scheme
function cs_settings_field(){
	$options = get_option( 'd12mb_options' );

	$html = '<p><b>Light Themes</b> &mdash; suitable for light backgrounds</p>';

	$html .= '<input type="radio" id="cs_one" name="d12mb_options[cs]" value="1"' . checked( 1, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_one">'. __( 'Colorful (Default)', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_two" name="d12mb_options[cs]" value="2"' . checked( 2, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_two">' . __( 'Business', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_three" name="d12mb_options[cs]" value="3"' . checked( 3, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_three">' . __( 'Beach', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_four" name="d12mb_options[cs]" value="4"' . checked( 4, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_four">' . __( 'Sol', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_five" name="d12mb_options[cs]" value="5"' . checked( 5, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_five">' . __( 'Aqua', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_six" name="d12mb_options[cs]" value="6"' . checked( 6, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_six">' . __( 'Forest', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_seven" name="d12mb_options[cs]" value="7"' . checked( 7, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_seven">' . __( 'Winter', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_twelve" name="d12mb_options[cs]" value="12"' . checked( 12, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_twelve">' . __( 'Black and White', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<p><b>Dark Themes</b> &mdash; suitable for dark backgrounds</p>';

	$html .= '<input type="radio" id="cs_eight" name="d12mb_options[cs]" value="8"' . checked( 8, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_eight">' . __( 'Magique', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_nine" name="d12mb_options[cs]" value="9"' . checked( 9, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_nine">' . __( 'Solstice', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_ten" name="d12mb_options[cs]" value="10"' . checked( 10, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_ten">' . __( 'Bark', 'd12-message-blocks' ) . '</label><br /> ';

	$html .= '<input type="radio" id="cs_eleven" name="d12mb_options[cs]" value="11"' . checked(11, $options['cs'], false ) . '/>';
	$html .= '<label for="cs_eleven">' . __( 'Leaves', 'd12-message-blocks' ) . '</label><br /> ';

	echo $html;
};

