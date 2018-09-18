<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" ) {  
    if ($_POST['mos_faq_submit'] == 'Save Changes') {
	    $mos_faq_option = array();
	    foreach ($_POST as $field => $value) {
	    	$mos_faq_option[$field] = trim($value);
	    }
	    update_option( 'mos_faq_option', $mos_faq_option, false );
	}
}

function mos_faq_admin_menu () {
    add_submenu_page( 'edit.php?post_type=qa', 'Mos FAQ Settings', 'Settings', 'manage_options', 'settings', 'mos_faq_admin_page' );
}
add_action("admin_menu", "mos_faq_admin_menu");


function mos_faq_admin_page () {
    if( isset( $_GET[ 'tab' ] ) ) {
        $active_tab = $_GET[ 'tab' ];
    }
    $mos_faq_option = get_option( 'mos_faq_option' );
    global $font_align, $font_weight, $border_style, $icons;
    //var_dump($mos_faq_option);
    ?>
    <div class="wrap mos-faq-wrapper">
        <h1><?php _e("Mos FAQ Settings") ?></h1>
        <ul class="nav nav-tabs">
            <li class="tab-nav <?php if(!@$active_tab OR $active_tab == 'dashboard') echo 'active';?>"><a data-id="dashboard" href="?post_type=qa&page=settings&tab=dashboard">Dashboard</a></li>
            <li class="tab-nav <?php if($active_tab == 'body') echo 'active';?>"><a data-id="body" href="?post_type=qa&page=settings&tab=body">Body</a></li>
            <li class="tab-nav <?php if($active_tab == 'heading') echo 'active';?>"><a data-id="heading" href="?post_type=qa&page=settings&tab=heading">Heading</a></li>
            <li class="tab-nav <?php if($active_tab == 'icon') echo 'active';?>"><a data-id="icon" href="?post_type=qa&page=settings&tab=icon">Icon</a></li>
            <li class="tab-nav <?php if($active_tab == 'content') echo 'active';?>"><a data-id="content" href="?post_type=qa&page=settings&tab=content">Content</a></li>
            <li class="tab-nav <?php if($active_tab == 'advanced') echo 'active';?>"><a data-id="advanced" href="?post_type=qa&page=settings&tab=advanced">Advanced CSS, JS</a></li>
        </ul>
        <form method="post">

        	<div id="mos-faq-dashboard" class="tab-con <?php if(!@$active_tab OR $active_tab == 'dashboard') echo 'active' ?>">
            	<h2>Dashboard</h2>
            	<div class="desc">
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
            				<tt>view</tt>
            			</dt>
						<dd>(string) - faq can be viewwd in like accordion, collapsible or block.</dd>
					</dl>
            		<!--  view="accordion/collapsible/block" -->
            	</div>
            </div>

        	<div id="mos-faq-body" class="tab-con <?php if($active_tab == 'body') echo 'active' ?>">
	            <h3>Body Styling</h3>
	            <table class="form-table">
	                <tbody>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_body_pbg">Primary Background</label></th>
	                        <td><input type="text" name="mos_faq_body_pbg" id="mos_faq_body_pbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_body_pbg']; ?>" data-format="rgb" data-opacity="1"></td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label>Font</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">
		                        		<div class="mos-form-group px-unit">
				                        	<label for="mos_faq_body_font_size">Font Size</label>
				                        	<input type="text" name="mos_faq_body_font_size" id="mos_faq_body_font_size" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_font_size']; ?>" placeholder="Font Size">		                        			
		                        		</div>	                        		
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<label for="mos_faq_body_font_height">Line Height</label>
				                        	<input type="text" name="mos_faq_body_font_height" id="mos_faq_body_font_height" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_font_height']; ?>" placeholder="Line Height">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_body_font_align">Text Align</label>
				                        	<select name="mos_faq_body_font_align" id="mos_faq_body_font_align" class="full-input">
				                        		<option value=""></option>
				                        	<?php foreach ($font_align as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_body_font_align'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
				                        	</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_body_font_weight">Font Weight &amp; Style</label>
											<select name="mos_faq_body_font_weight" id="mos_faq_body_font_weight" class="full-input">
												<option value=""></option>
				                        	<?php foreach ($font_weight as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_body_font_weight'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_body_font_color">Color</label>
											<input type="text" name="mos_faq_body_font_color" id="mos_faq_body_font_color" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_body_font_color']; ?>" data-format="rgb" placeholder="Color">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_body_measurements">Measurements</label></th>
	                        <td>
	                        	<div class="mos-row">		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_body_measurements_padding" id="mos_faq_body_measurements_padding" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_measurements_padding']; ?>" placeholder="Body Padding">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">
			                        		<input type="text" name="mos_faq_body_measurements_margin" id="mos_faq_body_measurements_margin" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_measurements_margin']; ?>" placeholder="Body Margin">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_body_border">Border</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_body_border_width" id="mos_faq_body_border_width" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_border_width']; ?>" placeholder="Border Width">
				                        </div>
		                        	</div>		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<select name="mos_faq_body_border_style" id="mos_faq_body_border_style" class="full-input">
											<?php foreach ($border_style as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_body_border_style'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_body_border_color" id="mos_faq_body_border_color" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_body_border_color']; ?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_body_border_radius" id="mos_faq_body_border_radius" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_body_border_radius']; ?>" placeholder="Border Radius">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                </tbody>
	            </table>
            </div>

        	<div id="mos-faq-heading" class="tab-con <?php if($active_tab == 'heading') echo 'active' ?>">
	            <h3>Heading Styling</h3>
	            <table class="form-table">
	                <tbody>
	                    <tr>
	                        <th scope="row"><label>Background</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_heading_pbg" id="mos_faq_heading_pbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_heading_pbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_heading_hbg" id="mos_faq_heading_hbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_heading_hbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_heading_abg" id="mos_faq_heading_abg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_heading_abg']; ?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
				                        </div>
		                        	</div>	                        		
	                        	</div>
	                        	
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label>Font</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">
		                        		<div class="mos-form-group px-unit">
				                        	<label for="mos_faq_heading_font_size">Font Size</label>
				                        	<input type="text" name="mos_faq_heading_font_size" id="mos_faq_heading_font_size" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_font_size']; ?>" placeholder="Font Size">		                        			
		                        		</div>	                        		
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<label for="mos_faq_heading_font_height">Line Height</label>
				                        	<input type="text" name="mos_faq_heading_font_height" id="mos_faq_heading_font_height" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_font_height']; ?>" placeholder="Line Height">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_heading_font_align">Text Align</label>
				                        	<select name="mos_faq_heading_font_align" id="mos_faq_heading_font_align" class="full-input">
				                        		<option value=""></option>
				                        	<?php foreach ($font_align as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_heading_font_align'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
				                        	</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_heading_font_weight">Font Weight &amp; Style</label>
											<select name="mos_faq_heading_font_weight" id="mos_faq_heading_font_weight" class="full-input">
												<option value=""></option>
				                        	<?php foreach ($font_weight as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_heading_font_weight'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        </div>
		                        <div class="mos-row">
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_heading_font_pcolor">Primary Color</label>
											<input type="text" name="mos_faq_heading_font_pcolor" id="mos_faq_heading_font_pcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_font_pcolor']; ?>" data-format="rgb" placeholder="Primary Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_heading_font_hcolor">Hover Color</label>
											<input type="text" name="mos_faq_heading_font_hcolor" id="mos_faq_heading_font_hcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_font_hcolor']; ?>" data-format="rgb" placeholder="Hover Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_heading_font_acolor">Active Color</label>
											<input type="text" name="mos_faq_heading_font_acolor" id="mos_faq_heading_font_acolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_font_acolor']; ?>" data-format="rgb" placeholder="Active Color">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                    <tr>
	                        <th scope="row"><label for="mos_faq_heading_measurements">Measurements</label></th>
	                        <td>
	                        	<div class="mos-row">		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_heading_measurements_padding" id="mos_faq_heading_measurements_padding" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_measurements_padding']; ?>" placeholder="Header Padding">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">
			                        		<input type="text" name="mos_faq_heading_measurements_margin" id="mos_faq_heading_measurements_margin" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_measurements_margin']; ?>" placeholder="Header Margin">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_heading_border">Border</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_heading_border_width" id="mos_faq_heading_border_width" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_border_width']; ?>" placeholder="Border Width">
				                        </div>
		                        	</div>		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<select name="mos_faq_heading_border_style" id="mos_faq_heading_border_style" class="full-input">
											<?php foreach ($border_style as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_heading_border_style'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_heading_border_color" id="mos_faq_heading_border_color" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_border_color']; ?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_heading_border_radius" id="mos_faq_heading_border_radius" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_heading_border_radius']; ?>" placeholder="Border Radius">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                </tbody>
	            </table>
            </div>
            <div id="mos-faq-icon" class="tab-con <?php if($active_tab == 'icon') echo 'active' ?>">
	            <h3>Icon Styling</h3>	            
	            <table class="form-table">
	                <tbody>
	                    <tr>
	                        <th scope="row"><label>Icon List</label></th>
	                        <td>
								<fieldset>
								<?php foreach ($icons as $key => $value) : ?>
									<?php $slices = explode(" ",$value) ?>
									<label><input type='radio' name='mos_faq_icon' value='<?php echo $key ?>'  <?php checked($mos_faq_option['mos_faq_icon'], $key) ?> /> <i class="fa <?php echo $slices[0]?>"></i> <i class="fa <?php echo $slices[1]?>"></i></label>
								<?php endforeach; ?>
									
								</fieldset>	                        	
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label>Font</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">
		                        		<div class="mos-form-group px-unit">
				                        	<label for="mos_faq_icon_font_size">Font Size</label>
				                        	<input type="text" name="mos_faq_icon_font_size" id="mos_faq_icon_font_size" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_font_size']; ?>" placeholder="Font Size">		                        			
		                        		</div>	                        		
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<label for="mos_faq_icon_font_height">Line Height</label>
				                        	<input type="text" name="mos_faq_icon_font_height" id="mos_faq_icon_font_height" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_font_height']; ?>" placeholder="Line Height">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_icon_font_align">Text Align</label>
				                        	<select name="mos_faq_icon_font_align" id="mos_faq_icon_font_align" class="full-input">
				                        		<option value=""></option>
				                        		<?php foreach ($font_align as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_icon_font_align'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
				                        	</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_icon_font_weight">Font Weight &amp; Style</label>
											<select name="mos_faq_icon_font_weight" id="mos_faq_icon_font_weight" class="full-input">
												<option value=""></option>
				                        	<?php foreach ($font_weight as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_icon_font_weight'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        </div>
		                        <div class="mos-row">
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_icon_font_pcolor">Primary Color</label>
											<input type="text" name="mos_faq_icon_font_pcolor" id="mos_faq_icon_font_pcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_font_pcolor']; ?>" data-format="rgb" placeholder="Primary Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_icon_font_hcolor">Hover Color</label>
											<input type="text" name="mos_faq_icon_font_hcolor" id="mos_faq_icon_font_hcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_font_hcolor']; ?>" data-format="rgb" placeholder="Hover Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_icon_font_acolor">Active Color</label>
											<input type="text" name="mos_faq_icon_font_acolor" id="mos_faq_icon_font_acolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_font_acolor']; ?>" data-format="rgb" placeholder="Active Color">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_icon_measurements">Measurements</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_icon_measurements_width" id="mos_faq_icon_measurements_width" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_measurements_width']; ?>" placeholder="Icon Width">
				                        </div>
		                        	</div>		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_icon_measurements_padding" id="mos_faq_icon_measurements_padding" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_measurements_padding']; ?>" placeholder="Icon Padding">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">
			                        		<input type="text" name="mos_faq_icon_measurements_margin" id="mos_faq_icon_measurements_margin" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_measurements_margin']; ?>" placeholder="Icon Margin">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_icon_border">Border</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_icon_border_width" id="mos_faq_icon_border_width" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_border_width']; ?>" placeholder="Border Width">
				                        </div>
		                        	</div>		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<select name="mos_faq_icon_border_style" id="mos_faq_icon_border_style" class="full-input">
											<?php foreach ($border_style as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_icon_border_style'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_icon_border_color" id="mos_faq_icon_border_color" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_border_color']; ?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_icon_border_radius" id="mos_faq_icon_border_radius" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_icon_border_radius']; ?>" placeholder="Border Radius">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                </tbody>
	            </table>
	        </div>

        	<div id="mos-faq-content" class="tab-con <?php if($active_tab == 'content') echo 'active' ?>">
	            <h3>Heading Styling</h3>
	            <table class="form-table">
	                <tbody>
	                    <tr>
	                        <th scope="row"><label>Background</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_content_pbg" id="mos_faq_content_pbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_content_pbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_content_hbg" id="mos_faq_content_hbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_content_hbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_content_abg" id="mos_faq_content_abg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_content_abg']; ?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
				                        </div>
		                        	</div>	                        		
	                        	</div>
	                        	
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label>Font</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">
		                        		<div class="mos-form-group px-unit">
				                        	<label for="mos_faq_content_font_size">Font Size</label>
				                        	<input type="text" name="mos_faq_content_font_size" id="mos_faq_content_font_size" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_font_size']; ?>" placeholder="Font Size">		                        			
		                        		</div>	                        		
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<label for="mos_faq_content_font_height">Line Height</label>
				                        	<input type="text" name="mos_faq_content_font_height" id="mos_faq_content_font_height" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_font_height']; ?>" placeholder="Line Height">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_content_font_align">Text Align</label>
				                        	<select name="mos_faq_content_font_align" id="mos_faq_content_font_align" class="full-input">
				                        		<option value=""></option>
				                        	<?php foreach ($font_align as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_content_font_align'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
				                        	</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_content_font_weight">Font Weight &amp; Style</label>
											<select name="mos_faq_content_font_weight" id="mos_faq_content_font_weight" class="full-input">
												<option value=""></option>
				                        	<?php foreach ($font_weight as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_content_font_weight'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        </div>
		                        <div class="mos-row">
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_content_font_pcolor">Primary Color</label>
											<input type="text" name="mos_faq_content_font_pcolor" id="mos_faq_content_font_pcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_content_font_pcolor']; ?>" data-format="rgb" placeholder="Primary Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_content_font_hcolor">Hover Color</label>
											<input type="text" name="mos_faq_content_font_hcolor" id="mos_faq_content_font_hcolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_content_font_hcolor']; ?>" data-format="rgb" placeholder="Hover Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
				                        	<label for="mos_faq_content_font_acolor">Active Color</label>
											<input type="text" name="mos_faq_content_font_acolor" id="mos_faq_content_font_acolor" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_content_font_acolor']; ?>" data-format="rgb" placeholder="Active Color">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                    <tr>
	                        <th scope="row"><label for="mos_faq_content_measurements">Measurements</label></th>
	                        <td>
	                        	<div class="mos-row">		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_content_measurements_padding" id="mos_faq_content_measurements_padding" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_measurements_padding']; ?>" placeholder="Header Padding">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">
			                        		<input type="text" name="mos_faq_content_measurements_margin" id="mos_faq_content_measurements_margin" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_measurements_margin']; ?>" placeholder="Header Margin">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_content_border">Border</label></th>
	                        <td>
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_content_border_width" id="mos_faq_content_border_width" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_border_width']; ?>" placeholder="Border Width">
				                        </div>
		                        	</div>		                        	
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<select name="mos_faq_content_border_style" id="mos_faq_content_border_style" class="full-input">
											<?php foreach ($border_style as $key => $value) : ?>
				                        		<option value="<?php echo $key ?>" <?php selected($mos_faq_option['mos_faq_content_border_style'], $key) ?>><?php echo $value ?></option>
				                        	<?php endforeach; ?>
											</select>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">                       		
											<input type="text" name="mos_faq_content_border_color" id="mos_faq_content_border_color" class="moscp full-input" value="<?php echo @$mos_faq_option['mos_faq_content_border_color']; ?>" data-format="rgb" data-opacity="1" placeholder="Border Color">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group px-unit">                      		
				                        	<input type="text" name="mos_faq_content_border_radius" id="mos_faq_content_border_radius" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_border_radius']; ?>" placeholder="Border Radius">
				                        </div>
		                        	</div>
		                        </div>
	                        </td>
	                    </tr>

	                </tbody>
	            </table>
            </div>
        
        	<div id="mos-faq-advanced" class="tab-con <?php if($active_tab == 'advanced') echo 'active' ?>">
	            <h3>Advanced Styling</h3>
	            <table class="form-table">
	                <tbody>
	                    <tr>
	                        <th scope="row">Font Awesome</th>
	                        <td>
	                            <fieldset>
	                                <legend class="screen-reader-text"><span>Font Awesome</span></legend>
	                                <label for="mos_faq_fontawesome">
	                                    <input name="mos_faq_fontawesome" type="checkbox" id="mos_faq_fontawesome" value="1" <?php checked($mos_faq_option['mos_faq_fontawesome'], 1) ?>>
	                                    Include additional Font Awesome CSS
	                                </label>
	                            </fieldset>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row">Jquery</th>
	                        <td>
	                            <fieldset>
	                                <legend class="screen-reader-text"><span>Jquery</span></legend>
	                                <label for="mos_faq_jquery">
	                                    <input name="mos_faq_jquery" type="checkbox" id="mos_faq_jquery" value="1" <?php checked($mos_faq_option['jquery'], 1) ?>>
	                                    Include additional Jquery JS
	                                </label>
	                            </fieldset>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_css">Custom Css</label></th>
	                        <td><textarea name="mos_faq_css" id="mos_faq_css" rows="10" class="regular-text"><?php echo @$mos_faq_option['mos_faq_css']; ?></textarea></td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_js">Custom JS</label></th>
	                        <td><textarea name="mos_faq_js" id="mos_faq_js" rows="10" class="regular-text"><?php echo @$mos_faq_option['mos_faq_js']; ?></textarea></td>
	                    </tr>
	                </tbody>
	            </table>
            </div>

        <p class="submit"><input type="submit" name="mos_faq_submit" id="submit" class="button button-primary" value="Save Changes"></p>
        </form>

    </div>
    <?php
}