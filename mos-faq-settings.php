<?php
function mos_faq_settings_init() {
	register_setting( 'mos_faq', 'mos_faq_option' );
	add_settings_section('mos_faq_section_top_nav', '', 'mos_faq_section_top_nav_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_start', '', 'mos_faq_section_dash_start_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_content_start', '', 'mos_faq_section_content_start_cb', 'mos_faq');
	add_settings_field( 'field_content_bg', __( 'Background', 'mos_faq' ), 'mos_faq_field_content_bg_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_pbg' => 'mos_faq_content_pbg', 'label_for_content_hbg' => 'mos_faq_content_hbg', 'label_for_content_abg' => 'mos_faq_content_abg']  );	
	add_settings_field( 'field_content_font', __( 'Font', 'mos_faq' ), 'mos_faq_field_content_font_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_font_size' => 'mos_faq_content_font_size', 'label_for_font_height' => 'mos_faq_content_font_height', 'label_for_font_align' => 'mos_faq_content_font_align', 'label_for_font_weight' => 'mos_faq_content_font_weight']  );	
	add_settings_section('mos_faq_section_content_end', '', 'mos_faq_section_end_cb', 'mos_faq');
	
	add_settings_section('mos_faq_section_scripts_start', '', 'mos_faq_section_scripts_start_cb', 'mos_faq');
	add_settings_field( 'field_jquery', __( 'JQuery', 'mos_faq' ), 'mos_faq_field_jquery_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_jquery' ] );
	add_settings_field( 'field_css', __( 'Custom Css', 'mos_faq' ), 'mos_faq_field_css_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_css' ] );
	add_settings_field( 'field_js', __( 'Custom Js', 'mos_faq' ), 'mos_faq_field_js_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_js' ] );

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
	elseif (isset($_COOKIE['faq_active_tab'])) $active_tab = $_COOKIE['faq_active_tab'];
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
		<h2><?php esc_html_e('Dashboard') ?></h2>
		<p><strong>For using faqs in your post or page use this shortcode</strong></p>
		<p>[mos_faq]</p>
		<h3>Properties</h3>
		<dl>
			<dt>
				<tt>limit</tt>
			</dt>
			<dd>(int) - number of post to show per page. Use 'limit'=-1 to show all posts (the 'offset' parameter is ignored with a -1 value).</dd>
			
			<dt>
				<tt>offset</tt>
			</dt>
			<dd>(int) - number of post to displace or pass over. Warning: Setting the offset parameter overrides/ignores the paged parameter and breaks pagination. The 'offset' parameter is ignored when 'limit'=-1 (show all posts) is used.</dd>	
								
			<dt>
				<tt>category</tt>
			</dt>
			<dd>(int) - category ids from where you like to display posts. Please seperate ids by comma (,). </dd>
								
			<dt>
				<tt>tag</tt>
			</dt>
			<dd>(int) - tag ids from where you like to display posts. Please seperate ids by comma (,). </dd>
								
			<dt>
				<tt>order</tt>
			</dt>
			<dd>
				(string | array) - Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. An array can be used for multiple order/orderby sets
				<ol>
					<li>'ASC' - ascending order from lowest to highest values (1, 2, 3; a, b, c).</li>
					<li>'DESC' - descending order from highest to lowest values (3, 2, 1; c, b, a).</li>
				</ol>
			</dd>
								
			<dt>
				<tt>orderby</tt>
			</dt>
			<dd>
				(string | array) - Sort retrieved posts by parameter. Defaults to 'date (post_date)'. One or more options can be passed.
				<ol>
					<li>'none' - No order</li>
					<li>'ID' - Order by post id. Note the capitalization.</li>
					<li>'author' - Order by author. ('post_author' is also accepted.)</li>
					<li>'title' - Order by title. ('post_title' is also accepted.)</li>
					<li>'name' - Order by post name (post slug). ('post_name' is also accepted.)</li>
					<li>'type' - Order by post type. ('post_type' is also accepted.)</li>
					<li>'date' - Order by date. ('post_date' is also accepted.)</li>
					<li>'modified' - Order by last modified date. ('post_modified' is also accepted.)</li>
					<li>'parent' - Order by post/page parent id. ('post_parent' is also accepted.)</li>
					<li>'rand' - Random order. You can also use 'RAND(x)' where 'x' is an integer seed value.</li>
					<li>'comment_count' - Order by number of comments.</li>
				</ol>
			</dd>
								
			<dt>
				<tt>author</tt>
			</dt>
			<dd>(int | string) - use author id or comma-separated list of IDs.</dd>
								
			<dt>
				<tt>container</tt>
			</dt>
			<dd>(boolean) - Whether or not to include wrapper.</dd>
								
			<dt>
				<tt>container_class</tt>
			</dt>
			<dd>(string) - Class that is applied to the container.</dd>
								
			<dt>
				<tt>class</tt>
			</dt>
			<dd>(string) - Class that is applied to the faq body.</dd>
								
			<dt>
				<tt>singular</tt>
			</dt>
			<dd>(boolean) - Whether or not to allow to open singularly.</dd>
								
			<dt>
				<tt>pagination</tt>
			</dt>
			<dd>(boolean) - Whether or not to include pagination.</dd>
								
			<dt>
				<tt>grid</tt>
			</dt>
			<dd>(string) - Range from 1 to 5.</dd>
								
			<dt>
				<tt>view</tt>
			</dt>
			<dd>(string) - faq can be viewwd in like accordion, collapsible or block.</dd>
		</dl>
	<?php
}
function mos_faq_section_content_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-content" class="tab-con <?php if($data['active_tab'] == 'content') echo 'active';?>">
	<?php
}
function mos_faq_field_content_bg_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<div class="mos-row">
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_pbg'] ); ?>">Primary Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_pbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_pbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_content_pbg'] ] ) ? esc_html_e($options[$args['label_for_content_pbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_hbg'] ); ?>">Hover Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_hbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_hbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_content_hbg'] ] ) ? esc_html_e($options[$args['label_for_content_hbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_abg'] ); ?>">Active Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_abg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_abg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_content_abg'] ] ) ? esc_html_e($options[$args['label_for_content_abg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
            </div>
    	</div>		
	</div>
	<?php
}
function mos_faq_field_content_font_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<div class="mos-row">
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_content_font_size'] ); ?>">Font Size</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_size'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_size'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_font_size'] ] ) ? esc_html_e($options[$args['label_for_content_font_size']]) : '';?>" placeholder="Font Size">		                        			
    		</div>	                        		
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group px-unit">                      		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>">Line Height</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_font_height'] ] ) ? esc_html_e($options[$args['label_for_content_font_height']]) : '';?>" placeholder="Line Height">
            </div>
    	</div>	
	</div>
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