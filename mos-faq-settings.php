<?php
function mos_faq_settings_init() {
	register_setting( 'mos_faq', 'mos_faq_option' );
	add_settings_section('mos_faq_section_top_nav', '', 'mos_faq_section_top_nav_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_start', '', 'mos_faq_section_dash_start_cb', 'mos_faq');
	add_settings_section('mos_faq_section_dash_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_body_start', '', 'mos_faq_section_body_start_cb', 'mos_faq');
	add_settings_field( 'field_body_bg', __( 'Background', 'mos_faq' ), 'mos_faq_field_body_bg_cb', 'mos_faq', 'mos_faq_section_body_start', [ 'label_for_body_pbg' => 'mos_faq_body_pbg', 'label_for_body_hbg' => 'mos_faq_body_hbg', 'label_for_body_abg' => 'mos_faq_body_abg']  );
	add_settings_field( 'field_body_font', __( 'Font', 'mos_faq' ), 'mos_faq_field_body_font_cb', 'mos_faq', 'mos_faq_section_body_start', [ 'label_for_body_font_size' => 'mos_faq_body_font_size', 'label_for_body_font_height' => 'mos_faq_body_font_height', 'label_for_body_font_align' => 'mos_faq_body_font_align', 'label_for_body_font_weight' => 'mos_faq_body_font_weight', 'label_for_body_font_pcolor' => 'mos_faq_body_font_pcolor', 'label_for_body_font_hcolor' => 'mos_faq_body_font_hcolor', 'label_for_body_font_acolor' => 'mos_faq_body_font_acolor'] );
	add_settings_field( 'field_body_measurements', __( 'Measurements', 'mos_faq' ), 'mos_faq_field_body_measurements_cb', 'mos_faq', 'mos_faq_section_body_start', [ 'label_for_body_measurements_padding' => 'mos_faq_body_measurements_padding', 'label_for_body_measurements_margin' => 'mos_faq_body_measurements_margin']  );	
	add_settings_field( 'field_body_border', __( 'Border', 'mos_faq' ), 'mos_faq_field_body_border_cb', 'mos_faq', 'mos_faq_section_body_start', [ 'label_for_body_border_width' => 'mos_faq_body_border_width', 'label_for_body_border_style' => 'mos_faq_body_border_style', 'label_for_body_border_color' => 'mos_faq_body_border_color', 'label_for_body_border_radius' => 'mos_faq_body_border_radius']  );
	add_settings_section('mos_faq_section_body_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_heading_start', '', 'mos_faq_section_heading_start_cb', 'mos_faq');
	add_settings_field( 'field_heading_bg', __( 'Background', 'mos_faq' ), 'mos_faq_field_heading_bg_cb', 'mos_faq', 'mos_faq_section_heading_start', [ 'label_for_heading_pbg' => 'mos_faq_heading_pbg', 'label_for_heading_hbg' => 'mos_faq_heading_hbg', 'label_for_heading_abg' => 'mos_faq_heading_abg']  );
	add_settings_field( 'field_heading_font', __( 'Font', 'mos_faq' ), 'mos_faq_field_heading_font_cb', 'mos_faq', 'mos_faq_section_heading_start', [ 'label_for_heading_font_size' => 'mos_faq_heading_font_size', 'label_for_heading_font_height' => 'mos_faq_heading_font_height', 'label_for_heading_font_align' => 'mos_faq_heading_font_align', 'label_for_heading_font_weight' => 'mos_faq_heading_font_weight', 'label_for_heading_font_pcolor' => 'mos_faq_heading_font_pcolor', 'label_for_heading_font_hcolor' => 'mos_faq_heading_font_hcolor', 'label_for_heading_font_acolor' => 'mos_faq_heading_font_acolor'] );
	add_settings_field( 'field_heading_measurements', __( 'Measurements', 'mos_faq' ), 'mos_faq_field_heading_measurements_cb', 'mos_faq', 'mos_faq_section_heading_start', [ 'label_for_heading_measurements_padding' => 'mos_faq_heading_measurements_padding', 'label_for_heading_measurements_margin' => 'mos_faq_heading_measurements_margin']  );	
	add_settings_field( 'field_heading_border', __( 'Border', 'mos_faq' ), 'mos_faq_field_heading_border_cb', 'mos_faq', 'mos_faq_section_heading_start', [ 'label_for_heading_border_width' => 'mos_faq_heading_border_width', 'label_for_heading_border_style' => 'mos_faq_heading_border_style', 'label_for_heading_border_color' => 'mos_faq_heading_border_color', 'label_for_heading_border_radius' => 'mos_faq_heading_border_radius']  );
	add_settings_section('mos_faq_section_heading_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_icon_start', '', 'mos_faq_section_icon_start_cb', 'mos_faq');
	add_settings_field( 'field_icon_bg', __( 'Background', 'mos_faq' ), 'mos_faq_field_icon_bg_cb', 'mos_faq', 'mos_faq_section_icon_start', [ 'label_for_icon_pbg' => 'mos_faq_icon_pbg', 'label_for_icon_hbg' => 'mos_faq_icon_hbg', 'label_for_icon_abg' => 'mos_faq_icon_abg']  );
	add_settings_field( 'field_icon', __( 'Icon List', 'mos_faq' ), 'mos_faq_field_icon_cb', 'mos_faq', 'mos_faq_section_icon_start', [ 'label_for_icon' => 'mos_faq_icon']  );		
	add_settings_field( 'field_icon_font', __( 'Font', 'mos_faq' ), 'mos_faq_field_icon_font_cb', 'mos_faq', 'mos_faq_section_icon_start', [ 'label_for_icon_font_size' => 'mos_faq_icon_font_size', 'label_for_icon_font_height' => 'mos_faq_icon_font_height', 'label_for_icon_font_align' => 'mos_faq_icon_font_align', 'label_for_icon_font_weight' => 'mos_faq_icon_font_weight', 'label_for_icon_font_pcolor' => 'mos_faq_icon_font_pcolor', 'label_for_icon_font_hcolor' => 'mos_faq_icon_font_hcolor', 'label_for_icon_font_acolor' => 'mos_faq_icon_font_acolor'] );
	add_settings_field( 'field_icon_measurements', __( 'Measurements', 'mos_faq' ), 'mos_faq_field_icon_measurements_cb', 'mos_faq', 'mos_faq_section_icon_start', [ 'label_for_icon_measurements_width' => 'mos_faq_icon_measurements_width', 'label_for_icon_measurements_padding' => 'mos_faq_icon_measurements_padding', 'label_for_icon_measurements_margin' => 'mos_faq_icon_measurements_margin']  );
	add_settings_field( 'field_icon_border', __( 'Border', 'mos_faq' ), 'mos_faq_field_icon_border_cb', 'mos_faq', 'mos_faq_section_icon_start', [ 'label_for_icon_border_width' => 'mos_faq_icon_border_width', 'label_for_icon_border_style' => 'mos_faq_icon_border_style', 'label_for_icon_border_color' => 'mos_faq_icon_border_color', 'label_for_icon_border_radius' => 'mos_faq_icon_border_radius']  );
	add_settings_section('mos_faq_section_icon_end', '', 'mos_faq_section_end_cb', 'mos_faq');

	add_settings_section('mos_faq_section_content_start', '', 'mos_faq_section_content_start_cb', 'mos_faq');
	add_settings_field( 'field_content_bg', __( 'Background', 'mos_faq' ), 'mos_faq_field_content_bg_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_pbg' => 'mos_faq_content_pbg', 'label_for_content_hbg' => 'mos_faq_content_hbg', 'label_for_content_abg' => 'mos_faq_content_abg']  );
	add_settings_field( 'field_content_font', __( 'Font', 'mos_faq' ), 'mos_faq_field_content_font_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_font_size' => 'mos_faq_content_font_size', 'label_for_content_font_height' => 'mos_faq_content_font_height', 'label_for_content_font_align' => 'mos_faq_content_font_align', 'label_for_content_font_weight' => 'mos_faq_content_font_weight', 'label_for_content_font_pcolor' => 'mos_faq_content_font_pcolor', 'label_for_content_font_hcolor' => 'mos_faq_content_font_hcolor', 'label_for_content_font_acolor' => 'mos_faq_content_font_acolor'] );
	add_settings_field( 'field_content_measurements', __( 'Measurements', 'mos_faq' ), 'mos_faq_field_content_measurements_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_measurements_padding' => 'mos_faq_content_measurements_padding', 'label_for_content_measurements_margin' => 'mos_faq_content_measurements_margin']  );	
	add_settings_field( 'field_content_border', __( 'Border', 'mos_faq' ), 'mos_faq_field_content_border_cb', 'mos_faq', 'mos_faq_section_content_start', [ 'label_for_content_border_width' => 'mos_faq_content_border_width', 'label_for_content_border_style' => 'mos_faq_content_border_style', 'label_for_content_border_color' => 'mos_faq_content_border_color', 'label_for_content_border_radius' => 'mos_faq_content_border_radius']  );
	add_settings_section('mos_faq_section_content_end', '', 'mos_faq_section_end_cb', 'mos_faq');
	
	add_settings_section('mos_faq_section_scripts_start', '', 'mos_faq_section_scripts_start_cb', 'mos_faq');
	add_settings_field( 'field_jquery', __( 'JQuery', 'mos_faq' ), 'mos_faq_field_jquery_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_jquery' ] );
	add_settings_field( 'field_css', __( 'Custom Css', 'mos_faq' ), 'mos_faq_field_css_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_css' ] );
	add_settings_field( 'field_js', __( 'Custom Js', 'mos_faq' ), 'mos_faq_field_js_cb', 'mos_faq', 'mos_faq_section_scripts_start', [ 'label_for' => 'mos_faq_js' ] );
	add_settings_section('mos_faq_section_end', '', 'mos_faq_section_end_cb', 'mos_faq');
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
        <li class="tab-nav <?php if($data['active_tab'] == 'body') echo 'active';?>"><a data-id="body" href="<?php echo $data['option_prefix'];?>body">Body</a></li>
        <li class="tab-nav <?php if($data['active_tab'] == 'heading') echo 'active';?>"><a data-id="heading" href="<?php echo $data['option_prefix'];?>heading">Heading</a></li>
        <li class="tab-nav <?php if($data['active_tab'] == 'icon') echo 'active';?>"><a data-id="icon" href="<?php echo $data['option_prefix'];?>icon">Icon</a></li>
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
function mos_faq_section_body_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-body" class="tab-con <?php if($data['active_tab'] == 'body') echo 'active';?>">
		<h2><?php esc_html_e('Body Styling') ?></h2>
	<?php
}
function mos_faq_field_body_bg_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<div class="mos-row">
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_pbg'] ); ?>">Primary Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_pbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_pbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_body_pbg'] ] ) ? esc_html_e($options[$args['label_for_body_pbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_hbg'] ); ?>">Hover Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_hbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_hbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_body_hbg'] ] ) ? esc_html_e($options[$args['label_for_body_hbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_abg'] ); ?>">Active Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_abg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_abg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_body_abg'] ] ) ? esc_html_e($options[$args['label_for_body_abg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
            </div>
    	</div>		
	</div>
	<?php
}
function mos_faq_field_body_font_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_body_font_size'] ); ?>">Font Size</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_size'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_size'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_font_size'] ] ) ? esc_html_e($options[$args['label_for_body_font_size']]) : '';?>" placeholder="Font Size">		                        			
    		</div>	                        		
    	</div>
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_body_font_height'] ); ?>">Font Height</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_height'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_height'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_font_height'] ] ) ? esc_html_e($options[$args['label_for_body_font_height']]) : '';?>" placeholder="Font Height">		                        			
    		</div>	                        		
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_body_font_align'] ); ?>">Text Align</label>
            	<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_align'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_align'] ); ?>" class="full-input">
            		<option value=""></option>
            	<?php foreach ($font_align as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_body_font_align'] ] ) ? ( selected( $options[ $args['label_for_body_font_align'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
            	<?php endforeach; ?>
            	</select>
            </div>
    	</div>	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_body_font_weight'] ); ?>">Font Weight &amp; Style</label>
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_weight'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_weight'] ); ?>" class="full-input">
					<option value=""></option>
            	<?php foreach ($font_weight as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_body_font_weight'] ] ) ? ( selected( $options[ $args['label_for_body_font_weight'] ], $key, false ) ) : ( '' ); ?>><?php echo $value ?></option>
            	<?php endforeach; ?>
				</select>
            </div>
    	</div>
	</div>
	<div class="mos-row">
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_body_font_pcolor'] ); ?>">Primary Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_pcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_pcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_body_font_pcolor'] ] ) ? esc_html_e($options[$args['label_for_body_font_pcolor']]) : '';?>" data-format="rgb" placeholder="Primary Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_body_font_hcolor'] ); ?>">Hover Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_hcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_hcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_body_font_hcolor'] ] ) ? esc_html_e($options[$args['label_for_body_font_hcolor']]) : '';?>" data-format="rgb" placeholder="Hover Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_body_font_acolor'] ); ?>">Active Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_font_acolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_font_acolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_body_font_acolor'] ] ) ? esc_html_e($options[$args['label_for_body_font_acolor']]) : '';?>" data-format="rgb" placeholder="Active Color">
            </div>
    	</div>
	</div>
	<?php
}
function mos_faq_field_body_measurements_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>

	<div class="mos-row">		                        	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group"> 
            	<label for="<?php echo esc_attr( $args['label_for_body_measurements_padding'] ); ?>">Content Padding</label>                      		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_measurements_padding'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_measurements_padding'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_measurements_padding'] ] ) ? esc_html_e($options[$args['label_for_body_measurements_padding']]) : '';?>" placeholder="Content Padding">
            </div>
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_measurements_margin'] ); ?>">Content Margin</label>   
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_measurements_margin'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_measurements_margin'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_measurements_margin'] ] ) ? esc_html_e($options[$args['label_for_body_measurements_margin']]) : '';?>" placeholder="Content Margin">
            </div>
    	</div>
    </div>
	<?php	
}
function mos_faq_field_body_border_cb( $args ) {
	$options = get_option( 'mos_faq_option' );	
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_body_border_width'] ); ?>">Border Width</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_border_width'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_border_width'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_border_width'] ] ) ? esc_html_e($options[$args['label_for_body_border_width']]) : '';?>" placeholder="Border Width">
	        </div>
		</div>		                        	
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_border_style'] ); ?>">Content Margin</label>                        		
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_border_style'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_border_style'] ); ?>" class="full-input">
				<?php foreach ($border_style as $key => $value) : ?>
	        		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_body_border_style'] ] ) ? ( selected( $options[ $args['label_for_body_border_style'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
	        	<?php endforeach; ?>
				</select>
	        </div>
		</div>
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_body_border_color'] ); ?>">Border Color</label>                        		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_border_color'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_border_color'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_body_border_color'] ] ) ? esc_html_e($options[$args['label_for_body_border_color']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
	        </div>
		</div>
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_body_border_radius'] ); ?>">Border Radius</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_body_border_radius'] ); ?>]" id="<?php echo esc_attr( $args['label_for_body_border_radius'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_body_border_radius'] ] ) ? esc_html_e($options[$args['label_for_body_border_radius']]) : '';?>" placeholder="Border Radius">
	        </div>
		</div>
	</div>
	<?php	
}
function mos_faq_section_heading_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-heading" class="tab-con <?php if($data['active_tab'] == 'heading') echo 'active';?>">
		<h2><?php esc_html_e('Heading Styling') ?></h2>
	<?php
}
function mos_faq_field_heading_bg_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<div class="mos-row">
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_pbg'] ); ?>">Primary Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_pbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_pbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_heading_pbg'] ] ) ? esc_html_e($options[$args['label_for_heading_pbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_hbg'] ); ?>">Hover Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_hbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_hbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_heading_hbg'] ] ) ? esc_html_e($options[$args['label_for_heading_hbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_abg'] ); ?>">Active Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_abg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_abg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_heading_abg'] ] ) ? esc_html_e($options[$args['label_for_heading_abg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
            </div>
    	</div>		
	</div>
	<?php
}
function mos_faq_field_heading_font_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_size'] ); ?>">Font Size</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_size'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_size'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_font_size'] ] ) ? esc_html_e($options[$args['label_for_heading_font_size']]) : '';?>" placeholder="Font Size">		                        			
    		</div>	                        		
    	</div>
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_height'] ); ?>">Font Height</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_height'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_height'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_font_height'] ] ) ? esc_html_e($options[$args['label_for_heading_font_height']]) : '';?>" placeholder="Font Height">		                        			
    		</div>	                        		
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_align'] ); ?>">Text Align</label>
            	<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_align'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_align'] ); ?>" class="full-input">
            		<option value=""></option>
            	<?php foreach ($font_align as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_heading_font_align'] ] ) ? ( selected( $options[ $args['label_for_heading_font_align'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
            	<?php endforeach; ?>
            	</select>
            </div>
    	</div>	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_weight'] ); ?>">Font Weight &amp; Style</label>
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_weight'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_weight'] ); ?>" class="full-input">
					<option value=""></option>
            	<?php foreach ($font_weight as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_heading_font_weight'] ] ) ? ( selected( $options[ $args['label_for_heading_font_weight'] ], $key, false ) ) : ( '' ); ?>><?php echo $value ?></option>
            	<?php endforeach; ?>
				</select>
            </div>
    	</div>
	</div>
	<div class="mos-row">
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_pcolor'] ); ?>">Primary Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_pcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_pcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_heading_font_pcolor'] ] ) ? esc_html_e($options[$args['label_for_heading_font_pcolor']]) : '';?>" data-format="rgb" placeholder="Primary Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_hcolor'] ); ?>">Hover Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_hcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_hcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_heading_font_hcolor'] ] ) ? esc_html_e($options[$args['label_for_heading_font_hcolor']]) : '';?>" data-format="rgb" placeholder="Hover Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_heading_font_acolor'] ); ?>">Active Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_font_acolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_font_acolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_heading_font_acolor'] ] ) ? esc_html_e($options[$args['label_for_heading_font_acolor']]) : '';?>" data-format="rgb" placeholder="Active Color">
            </div>
    	</div>
	</div>
	<?php
}
function mos_faq_field_heading_measurements_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>

	<div class="mos-row">		                        	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group"> 
            	<label for="<?php echo esc_attr( $args['label_for_heading_measurements_padding'] ); ?>">Content Padding</label>                      		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_measurements_padding'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_measurements_padding'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_measurements_padding'] ] ) ? esc_html_e($options[$args['label_for_heading_measurements_padding']]) : '';?>" placeholder="Content Padding">
            </div>
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_measurements_margin'] ); ?>">Content Margin</label>   
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_measurements_margin'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_measurements_margin'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_measurements_margin'] ] ) ? esc_html_e($options[$args['label_for_heading_measurements_margin']]) : '';?>" placeholder="Content Margin">
            </div>
    	</div>
    </div>
	<?php	
}
function mos_faq_field_heading_border_cb( $args ) {
	$options = get_option( 'mos_faq_option' );	
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_heading_border_width'] ); ?>">Border Width</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_border_width'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_border_width'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_border_width'] ] ) ? esc_html_e($options[$args['label_for_heading_border_width']]) : '';?>" placeholder="Border Width">
	        </div>
		</div>		                        	
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_border_style'] ); ?>">Content Margin</label>                        		
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_border_style'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_border_style'] ); ?>" class="full-input">
				<?php foreach ($border_style as $key => $value) : ?>
	        		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_heading_border_style'] ] ) ? ( selected( $options[ $args['label_for_heading_border_style'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
	        	<?php endforeach; ?>
				</select>
	        </div>
		</div>
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_heading_border_color'] ); ?>">Border Color</label>                        		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_border_color'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_border_color'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_heading_border_color'] ] ) ? esc_html_e($options[$args['label_for_heading_border_color']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
	        </div>
		</div>
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_heading_border_radius'] ); ?>">Border Radius</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_heading_border_radius'] ); ?>]" id="<?php echo esc_attr( $args['label_for_heading_border_radius'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_heading_border_radius'] ] ) ? esc_html_e($options[$args['label_for_heading_border_radius']]) : '';?>" placeholder="Border Radius">
	        </div>
		</div>
	</div>
	<?php	
}
function mos_faq_section_icon_start_cb( $args ) {
	$data = get_mos_faq_active_tab ();
	?>
	<div id="mos-faq-icon" class="tab-con <?php if($data['active_tab'] == 'icon') echo 'active';?>">
		<h2><?php esc_html_e('Icon Styling') ?></h2>
	<?php
}
function mos_faq_field_icon_bg_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>
	<div class="mos-row">
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_pbg'] ); ?>">Primary Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_pbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_pbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_icon_pbg'] ] ) ? esc_html_e($options[$args['label_for_icon_pbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_hbg'] ); ?>">Hover Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_hbg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_hbg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_icon_hbg'] ] ) ? esc_html_e($options[$args['label_for_icon_hbg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
            </div>
    	</div>
    	<div class="mos-form-con">	  
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_abg'] ); ?>">Active Background</label>            	
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_abg'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_abg'] ); ?>" class="moscp" value="<?php echo isset( $options[ $args['label_for_icon_abg'] ] ) ? esc_html_e($options[$args['label_for_icon_abg']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
            </div>
    	</div>		
	</div>
	<?php
}
function mos_faq_field_icon_cb( $args ) {
	$options = get_option( 'mos_faq_option' );	
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<fieldset>
	<?php foreach ($icons as $key => $value) : ?>
		<?php $slices = explode(" ",$value) ?>
		<label><input type='radio' name='mos_faq_option[<?php echo esc_attr( $args['label_for_icon'] ); ?>]' value='<?php echo $key ?>'  <?php echo isset( $options[ $args['label_for_icon'] ] ) ? ( checked( $options[ $args['label_for_icon'] ], $key, false ) ) : ( '' ); ?> /> <i class="fa <?php echo $slices[0]?>"></i> <i class="fa <?php echo $slices[1]?>"></i></label>
	<?php endforeach; ?>
		
	</fieldset>		
	<?php
}
function mos_faq_field_icon_font_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_size'] ); ?>">Font Size</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_size'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_size'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_font_size'] ] ) ? esc_html_e($options[$args['label_for_icon_font_size']]) : '';?>" placeholder="Font Size">		                        			
    		</div>	                        		
    	</div>
		<div class="mos-form-con">
    		<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_height'] ); ?>">Font Height</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_height'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_height'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_font_height'] ] ) ? esc_html_e($options[$args['label_for_icon_font_height']]) : '';?>" placeholder="Font Height">		                        			
    		</div>	                        		
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_align'] ); ?>">Text Align</label>
            	<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_align'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_align'] ); ?>" class="full-input">
            		<option value=""></option>
            	<?php foreach ($font_align as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_icon_font_align'] ] ) ? ( selected( $options[ $args['label_for_icon_font_align'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
            	<?php endforeach; ?>
            	</select>
            </div>
    	</div>	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_weight'] ); ?>">Font Weight &amp; Style</label>
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_weight'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_weight'] ); ?>" class="full-input">
					<option value=""></option>
            	<?php foreach ($font_weight as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_icon_font_weight'] ] ) ? ( selected( $options[ $args['label_for_icon_font_weight'] ], $key, false ) ) : ( '' ); ?>><?php echo $value ?></option>
            	<?php endforeach; ?>
				</select>
            </div>
    	</div>
	</div>
	<div class="mos-row">
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_pcolor'] ); ?>">Primary Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_pcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_pcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_icon_font_pcolor'] ] ) ? esc_html_e($options[$args['label_for_icon_font_pcolor']]) : '';?>" data-format="rgb" placeholder="Primary Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_hcolor'] ); ?>">Hover Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_hcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_hcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_icon_font_hcolor'] ] ) ? esc_html_e($options[$args['label_for_icon_font_hcolor']]) : '';?>" data-format="rgb" placeholder="Hover Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_icon_font_acolor'] ); ?>">Active Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_font_acolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_font_acolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_icon_font_acolor'] ] ) ? esc_html_e($options[$args['label_for_icon_font_acolor']]) : '';?>" data-format="rgb" placeholder="Active Color">
            </div>
    	</div>
	</div>
	<?php
}
function mos_faq_field_icon_measurements_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>

	<div class="mos-row">
    	<div class="mos-form-con">	  
        	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_icon_measurements_width'] ); ?>">Icon Width</label>                      		
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_measurements_width'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_measurements_width'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_measurements_width'] ] ) ? esc_html_e($options[$args['label_for_icon_measurements_width']]) : '';?>" placeholder="Icon Width">
            </div>
    	</div>		                        	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group"> 
            	<label for="<?php echo esc_attr( $args['label_for_icon_measurements_padding'] ); ?>">Content Padding</label>                      		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_measurements_padding'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_measurements_padding'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_measurements_padding'] ] ) ? esc_html_e($options[$args['label_for_icon_measurements_padding']]) : '';?>" placeholder="Content Padding">
            </div>
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_measurements_margin'] ); ?>">Content Margin</label>   
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_measurements_margin'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_measurements_margin'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_measurements_margin'] ] ) ? esc_html_e($options[$args['label_for_icon_measurements_margin']]) : '';?>" placeholder="Content Margin">
            </div>
    	</div>
    </div>
	<?php	
}
function mos_faq_field_icon_border_cb( $args ) {
	$options = get_option( 'mos_faq_option' );	
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_icon_border_width'] ); ?>">Border Width</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_border_width'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_border_width'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_border_width'] ] ) ? esc_html_e($options[$args['label_for_icon_border_width']]) : '';?>" placeholder="Border Width">
	        </div>
		</div>		                        	
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_border_style'] ); ?>">Content Margin</label>                        		
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_border_style'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_border_style'] ); ?>" class="full-input">
				<?php foreach ($border_style as $key => $value) : ?>
	        		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_icon_border_style'] ] ) ? ( selected( $options[ $args['label_for_icon_border_style'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
	        	<?php endforeach; ?>
				</select>
	        </div>
		</div>
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_icon_border_color'] ); ?>">Border Color</label>                        		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_border_color'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_border_color'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_icon_border_color'] ] ) ? esc_html_e($options[$args['label_for_icon_border_color']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
	        </div>
		</div>
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_icon_border_radius'] ); ?>">Border Radius</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_icon_border_radius'] ); ?>]" id="<?php echo esc_attr( $args['label_for_icon_border_radius'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_icon_border_radius'] ] ) ? esc_html_e($options[$args['label_for_icon_border_radius']]) : '';?>" placeholder="Border Radius">
	        </div>
		</div>
	</div>
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
	global $font_align, $font_weight, $border_style, $icons;
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
            	<label for="<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>">Font Height</label>
            	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_height'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_font_height'] ] ) ? esc_html_e($options[$args['label_for_content_font_height']]) : '';?>" placeholder="Font Height">		                        			
    		</div>	                        		
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_align'] ); ?>">Text Align</label>
            	<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_align'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_align'] ); ?>" class="full-input">
            		<option value=""></option>
            	<?php foreach ($font_align as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_content_font_align'] ] ) ? ( selected( $options[ $args['label_for_content_font_align'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
            	<?php endforeach; ?>
            	</select>
            </div>
    	</div>	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_weight'] ); ?>">Font Weight &amp; Style</label>
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_weight'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_weight'] ); ?>" class="full-input">
					<option value=""></option>
            	<?php foreach ($font_weight as $key => $value) : ?>
            		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_content_font_weight'] ] ) ? ( selected( $options[ $args['label_for_content_font_weight'] ], $key, false ) ) : ( '' ); ?>><?php echo $value ?></option>
            	<?php endforeach; ?>
				</select>
            </div>
    	</div>
	</div>
	<div class="mos-row">
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_pcolor'] ); ?>">Primary Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_pcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_pcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_content_font_pcolor'] ] ) ? esc_html_e($options[$args['label_for_content_font_pcolor']]) : '';?>" data-format="rgb" placeholder="Primary Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_hcolor'] ); ?>">Hover Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_hcolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_hcolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_content_font_hcolor'] ] ) ? esc_html_e($options[$args['label_for_content_font_hcolor']]) : '';?>" data-format="rgb" placeholder="Hover Color">
            </div>
    	</div>
		<div class="mos-form-con">	 
        	<div class="mos-form-group">                       		
            	<label for="<?php echo esc_attr( $args['label_for_content_font_acolor'] ); ?>">Active Color</label>
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_font_acolor'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_font_acolor'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_content_font_acolor'] ] ) ? esc_html_e($options[$args['label_for_content_font_acolor']]) : '';?>" data-format="rgb" placeholder="Active Color">
            </div>
    	</div>
	</div>
	<?php
}
function mos_faq_field_content_measurements_cb( $args ) {
	$options = get_option( 'mos_faq_option' );
	?>

	<div class="mos-row">		                        	
    	<div class="mos-form-con">	 
        	<div class="mos-form-group"> 
            	<label for="<?php echo esc_attr( $args['label_for_content_measurements_padding'] ); ?>">Content Padding</label>                      		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_measurements_padding'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_measurements_padding'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_measurements_padding'] ] ) ? esc_html_e($options[$args['label_for_content_measurements_padding']]) : '';?>" placeholder="Content Padding">
            </div>
    	</div>
    	<div class="mos-form-con">	 
        	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_measurements_margin'] ); ?>">Content Margin</label>   
        		<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_measurements_margin'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_measurements_margin'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_measurements_margin'] ] ) ? esc_html_e($options[$args['label_for_content_measurements_margin']]) : '';?>" placeholder="Content Margin">
            </div>
    	</div>
    </div>
	<?php	
}
function mos_faq_field_content_border_cb( $args ) {
	$options = get_option( 'mos_faq_option' );	
	global $font_align, $font_weight, $border_style, $icons;
	?>
	<div class="mos-row">
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_content_border_width'] ); ?>">Border Width</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_border_width'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_border_width'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_border_width'] ] ) ? esc_html_e($options[$args['label_for_content_border_width']]) : '';?>" placeholder="Border Width">
	        </div>
		</div>		                        	
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_border_style'] ); ?>">Content Margin</label>                        		
				<select name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_border_style'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_border_style'] ); ?>" class="full-input">
				<?php foreach ($border_style as $key => $value) : ?>
	        		<option value="<?php echo $key ?>" <?php echo isset( $options[ $args['label_for_content_border_style'] ] ) ? ( selected( $options[ $args['label_for_content_border_style'] ], $key, false ) ) : ( '' ); ?> ><?php echo $value ?></option>
	        	<?php endforeach; ?>
				</select>
	        </div>
		</div>
		<div class="mos-form-con">	 
	    	<div class="mos-form-group">
            	<label for="<?php echo esc_attr( $args['label_for_content_border_color'] ); ?>">Border Color</label>                        		
				<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_border_color'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_border_color'] ); ?>" class="moscp full-input" value="<?php echo isset( $options[ $args['label_for_content_border_color'] ] ) ? esc_html_e($options[$args['label_for_content_border_color']]) : '';?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
	        </div>
		</div>
		<div class="mos-form-con">	  
	    	<div class="mos-form-group px-unit">
            	<label for="<?php echo esc_attr( $args['label_for_content_border_radius'] ); ?>">Border Radius</label>                       		
	        	<input type="text" name="mos_faq_option[<?php echo esc_attr( $args['label_for_content_border_radius'] ); ?>]" id="<?php echo esc_attr( $args['label_for_content_border_radius'] ); ?>" class="full-input" value="<?php echo isset( $options[ $args['label_for_content_border_radius'] ] ) ? esc_html_e($options[$args['label_for_content_border_radius']]) : '';?>" placeholder="Border Radius">
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