<?php
function mos_faq_settings_init() {
	register_setting( 'mos_faq', 'mos_faq_option' );
	add_settings_section('mos_faq_section_top_nav', '', 'mos_faq_section_top_nav_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_start', '', 'mos_faq_section_dash_start_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_content_start', '', 'mos_faq_section_content_start_cb', 'mos_faq');
	add_settings_section('mos_faq_section_content_end', '', 'mos_faq_section_end_cb', 'mos_faq');
	
	add_settings_section('mos_faq_section_scripts_start', '', 'mos_faq_section_scripts_start_cb', 'mos_faq');
	add_settings_field( 'field_jquery', __( 'JQuery', 'mos_faq' ), 'mos_faq_field_jquery_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_jquery', 'class' => 'mos_faq_row' ] );
	add_settings_field( 'field_css', __( 'Custom Css', 'mos_faq' ), 'mos_faq_field_css_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_css', 'class' => 'mos_faq_row' ] );
	add_settings_field( 'field_js', __( 'Custom Js', 'mos_faq' ), 'mos_faq_field_js_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_js', 'class' => 'mos_faq_row' ] );

	add_settings_section('mos_faq_section_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	// add_settings_section('mos_faq_section_developers', __( 'The Matrix has you.', 'mos_faq' ), 'mos_faq_section_developers_cb', 'mos_faq');
	// add_settings_field( 'mos_faq_field_pill', __( 'Pill', 'mos_faq' ), 'mos_faq_field_pill_cb', 'mos_faq', 'mos_faq_section_developers', [ 'label_for' => 'mos_faq_field_pill', 'class' => 'mos_faq_row', 'mos_faq_custom_data' => 'custom', ] );

}
add_action( 'admin_init', 'mos_faq_settings_init' );

function get_mos_faq_active_tab () {
	$output = array(
		'option_prefix' => admin_url() . "/options-general.php?page=mos_faq_settings&tab=",
		//'option_prefix' = "?post_type=p_file&page=mos_faq_settings&tab=",
	);
	if (isset($_GET['tab'])) $active_tab = $_GET['tab'];
	elseif (isset($_COOKIE['plugin_active_tab'])) $active_tab = $_COOKIE['plugin_active_tab'];
	else $active_tab = 'dashboard';
	$output['active_tab'] = $active_tab;
	return $output;
}
function mos_faq_section_top_nav_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
    <ul class="nav nav-tabs">
        <li class="tab-nav <?php if($data['active_tab'] == 'dashboard') echo 'active';?>"><a data-id="dashboard" href="<?php echo $data['option_prefix'];?>dashboard">Dashboard</a></li>
        <li class="tab-nav <?php if($data['active_tab'] == 'content') echo 'active';?>"><a data-id="content" href="<?php echo $data['option_prefix'];?>content">Content</a></li>
        <li class="tab-nav <?php if($data['active_tab'] == 'scripts') echo 'active';?>"><a data-id="scripts" href="<?php echo $data['option_prefix'];?>scripts">Scripts</a></li>
    </ul>
	<?php
}
function mos_faq_section_dash_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-dashboard" class="tab-con <?php if($data['active_tab'] == 'dashboard') echo 'active';?>">
		Plugin Details

	<?php
}
function mos_faq_section_content_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-content" class="tab-con <?php if($data['active_tab'] == 'content') echo 'active';?>">
		Content
	<?php
}
function mos_faq_section_scripts_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-scripts" class="tab-con <?php if($data['active_tab'] == 'scripts') echo 'active';?>">
	<?php
}
function mos_faq_field_jquery_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<label for="<?php echo esc_attr( $args['label_for'] ); ?>"><input name="mos_faq_option[<?php echo esc_attr( $args['label_for'] ); ?>]" type="checkbox" id="<?php echo esc_attr( $args['label_for'] ); ?>" value="1" <?php echo isset( $options[ $args['label_for'] ] ) ? ( checked( $options[ $args['label_for'] ], 1, false ) ) : ( '' ); ?>><?php esc_html_e( 'Yes I like to add JQuery from Plugin.', 'mos_faq' ); ?></label>
	<?php
}
function mos_faq_field_css_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<textarea name="mos_faq_option[<?php echo esc_attr( $args['label_for'] ); ?>]" id="<?php echo esc_attr( $args['label_for'] ); ?>" rows="10" class="regular-text"><?php echo isset( $options[ $args['label_for'] ] ) ? esc_html_e($options[$args['label_for']]) : '';?></textarea>
	<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("mos_faq_css"), {
      lineNumbers: true,
      mode: "text/css",
      extraKeys: {"Ctrl-Space": "autocomplete"}
    });
	</script>
	<?php
}
function mos_faq_field_js_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<textarea name="mos_faq_option[<?php echo esc_attr( $args['label_for'] ); ?>]" id="<?php echo esc_attr( $args['label_for'] ); ?>" rows="10" class="regular-text"><?php echo isset( $options[ $args['label_for'] ] ) ? esc_html_e($options[$args['label_for']]) : '';?></textarea>
	<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("mos_faq_js"), {
      lineNumbers: true,
      mode: "text/css",
      extraKeys: {"Ctrl-Space": "autocomplete"}
    });
	</script>
	<?php
}
function mos_faq_section_end_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	</div>
	<?php
}



function mos_faq_section_developers_cb( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Follow the white rabbit.', 'mos_faq' ); ?></p>
	<?php
}
function mos_faq_field_pill_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<select id="<?php echo esc_attr( $args['label_for'] ); ?>" data-custom="<?php echo esc_attr( $args['mos_faq_custom_data'] ); ?>" name="mos_faq_option[<?php echo esc_attr( $args['label_for'] ); ?>]">
		<option value="red" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'red', false ) ) : ( '' ); ?>><?php esc_html_e( 'red pill', 'mos_faq' ); ?></option>
		<option value="blue" <?php echo isset( $options[ $args['label_for'] ] ) ? ( selected( $options[ $args['label_for'] ], 'blue', false ) ) : ( '' ); ?>><?php esc_html_e( 'blue pill', 'mos_faq' ); ?></option>
	</select>
	<p class="description"><?php esc_html_e( 'You take the blue pill and the story ends. You wake in your bed and you believe whatever you want to believe.', 'mos_faq' ); ?></p>
	<p class="description"><?php esc_html_e( 'You take the red pill and you stay in Wonderland and I show you how deep the rabbit-hole goes.', 'mos_faq' ); ?></p>
	<?php
}

function mos_faq_option_page() {
	add_submenu_page( 'edit.php?post_type=qa', 'Mos FAQ Settings', 'Settings', 'manage_options', 'faq_settings', 'mos_faq_admin_page' );
}
add_action( 'admin_menu', 'mos_faq_option_page' );

function mos_faq_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	if ( isset( $_GET['settings-updated'] ) ) {
		add_settings_error( 'mos_faq_messages', 'mos_faq_message', __( 'Settings Saved', 'mos_faq' ), 'updated' );
	}
	settings_errors( 'mos_faq_messages' );
	?>
	<div class="wrap mos-faq-wrapper">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
		<?php
		settings_fields( 'mos_faq' );
		do_settings_sections( 'mos_faq' );
		submit_button( 'Save Settings' );
		?>
		</form>
	</div>
	<?php
}