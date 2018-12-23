<?php
function mos_faq_admin_enqueue_scripts(){
	global $pagenow, $typenow;
	// var_dump($pagenow); //edit.php
	// var_dump($typenow); //qa
	if ($pagenow == 'edit.php' AND $typenow == 'qa') {
		wp_enqueue_style( 'jquery.minicolors', plugins_url( 'plugins/colorpicker/jquery.minicolors.css', __FILE__ ) );
		wp_enqueue_style( 'font-awesome.min', plugins_url( 'fonts/font-awesome-4.7.0/css/font-awesome.min.css', __FILE__ ) );
		wp_enqueue_style( 'mos-faq-admin', plugins_url( 'css/mos-faq-admin.css', __FILE__ ) );

		//wp_enqueue_media();

		wp_enqueue_script( 'jquery' );		
		/*Editor*/
		//wp_enqueue_style( 'docs', plugins_url( 'plugins/CodeMirror/doc/docs.css', __FILE__ ) );
		wp_enqueue_style( 'codemirror', plugins_url( 'plugins/CodeMirror/lib/codemirror.css', __FILE__ ) );
		wp_enqueue_style( 'show-hint', plugins_url( 'plugins/CodeMirror/addon/hint/show-hint.css', __FILE__ ) );

		wp_enqueue_script( 'codemirror', plugins_url( 'plugins/CodeMirror/lib/codemirror.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'css', plugins_url( 'plugins/CodeMirror/mode/css/css.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'javascript', plugins_url( 'plugins/CodeMirror/mode/javascript/javascript.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'show-hint', plugins_url( 'plugins/CodeMirror/addon/hint/show-hint.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'css-hint', plugins_url( 'plugins/CodeMirror/addon/hint/css-hint.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'javascript-hint', plugins_url( 'plugins/CodeMirror/addon/hint/javascript-hint.js', __FILE__ ), array('jquery') );
		/*Editor*/
		wp_enqueue_script( 'jquery.minicolors', plugins_url( 'plugins/colorpicker/jquery.minicolors.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'mos-faq-functions', plugins_url( 'js/mos-faq-functions.js', __FILE__ ), array('jquery') );
		wp_enqueue_script( 'mos-faq-admin', plugins_url( 'js/mos-faq-admin.js', __FILE__ ), array('jquery') );
	}
}
add_action( 'admin_enqueue_scripts', 'mos_faq_admin_enqueue_scripts' );
function mos_faq_enqueue_scripts(){
	$mos_faq_option = get_option( 'mos_faq_option' );
	if ($mos_faq_option['mos_faq_jquery'] == 1) {
		//echo 'mos_faq_jquery';
		wp_enqueue_script( 'jquery' );
	}
	if ($mos_faq_option['mos_faq_fontawesome'] == 1) {
		wp_enqueue_style( 'font-awesome.min', plugins_url( 'fonts/font-awesome-4.7.0/css/font-awesome.min.css', __FILE__ ) );
	}
	wp_enqueue_style( 'mos-faq.min', plugins_url( 'css/mos-faq.min.css', __FILE__ ) );
	wp_enqueue_script( 'mos-faq.min', plugins_url( 'js/mos-faq.min.js', __FILE__ ), array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'mos_faq_enqueue_scripts' );
function mos_faq_func( $atts = array(), $content = '' ) {
	global $icons;
	$mos_faq_option = get_option( 'mos_faq_option' ); //mos_faq_icon
	$index = $mos_faq_option['mos_faq_icon'];
	$slices = explode(" ",$icons[$index]);
	$html = '';
	$atts = shortcode_atts( array(
		'limit'				=> '-1',
		'offset'			=> 0,
		'category'			=> '',
		'tag'				=> '',
		'orderby'			=> '',
		'order'				=> '',
		'container'			=> 0,
		'container_class'	=> '',
		'class'				=> '',
		'grid'				=> 1,
		'singular'			=> 0,
		'pagination'		=> 0,
		'view'				=> 'accordion', //accordion, collapsible, block
	), $atts, 'mos_faq' );

	$cat = ($atts['category']) ? preg_replace('/\s+/', '', $atts['category']) : '';
	$tag = ($atts['tag']) ? preg_replace('/\s+/', '', $atts['tag']) : '';

	$args = array( 
		'post_type' 		=> 'qa',
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
	);
	$args['posts_per_page'] = $atts['limit'];
	if ($atts['offset']) $args['offset'] = $atts['offset'];

	if ($atts['category'] OR $atts['tag']) {
		$args['tax_query'] = array();
		if ($atts['category'] AND $atts['tag']) {
			$args['tax_query']['relation'] = 'OR';
		}
		if ($atts['category']) {
			$args['tax_query'][] = array(
					'taxonomy' => 'faq-category',
					'field'    => 'term_id',
					'terms'    => explode(',', $cat),
				);
		}
		if ($atts['tag']) {
			$args['tax_query'][] = array(
					'taxonomy' => 'faq-tag',
					'field'    => 'term_id',
					'terms'    => explode(',', $tag),
				);
		}
	}
	if ($atts['orderby']) $args['orderby'] = $atts['orderby'];
	if ($atts['order']) $args['order'] = $atts['order'];
	if (@$atts['author']) $args['author'] = $atts['author'];
	if ($atts['grid'] > 5 ) $atts['grid'] = 5;
	elseif ($atts['grid'] < 1 ) $atts['grid'] = 1;
	// var_dump($args);
	// die();

	$query = new WP_Query( $args );
	$total_post = $query->post_count;
	$single_col = round( $total_post / $atts['grid'] );
	if ( $query->have_posts() ) :
		$idenfier = rand(10,1000);
		$n = 0;
		$html .= '<div id="mos-faq-'.$idenfier.'" class="mos-faq-'.$atts['view'].' mos-faq-container ' . $atts['container_class'] . '">';
		$html .= '<div class="mos-faq-col-'.$atts['grid'] . '">';
		while ( $query->have_posts() ) : $query->the_post();
			
			$html .= '<div class="mos-faq-unit ' . $atts['class'] . '">';
				$html .= '<div class="mos-faq-heading">';
					$html .= '<h4 class="mos-faq-title">';
						if ($atts['view'] == 'accordion') $data_parent = 'data-parent="#mos-faq-'.$idenfier.'"';
						//if ($atts['view'] != 'block') $href = 'href="#collapse'.$idenfier.$n.'"';
						//$href = 'href="'.get_the_permalink().'"';
						$href = 'href="javascript:void(0)"';
						$html .= '<a data-toggle="collapse" '.$data_parent.' '.$href.'>'.get_the_title().'</a>';
						if ($index)	$html .= '<span class="mos-faq-icon-con"><i class="fa '.$slices[0].'"></i> <i class="fa '.$slices[1].'"></i></span>';
					$html .= '</h4>';
				$html .= '</div>';
				if ($atts['view'] != 'block') $html .= '<div id="collapse'.$idenfier.$n.'" class="mos-faq-collapse">'; // in
					$html .= '<div class="mos-faq-body">';
						$html .= mos_faq_get_the_content_with_formatting();
						//$html .= get_the_content();
						if ($atts['singular']) $html = '<a href="'.get_the_permalink().'">Details</a>';
					$html .= '</div>';
				if ($atts['view'] != 'block') $html .= '</div>';				
			$html .= '</div><!--/.mos-faq-unit-->';
			$in = '';
			$n++;
			if ($n % $single_col == 0 AND $n < $total_post) $html .= '</div><!--/.mos-faq-col-'.$atts['grid'] . '-->' . '<div class="mos-faq-col-'.$atts['grid'] . '">';
		endwhile;
		$html .= '</div><!--/.mos-faq-col-'.$atts['grid'] . '-->';
		$html .= '</div><!--/.mos-faq-container-->';
		wp_reset_postdata();
		if ($atts['pagination']) :
		    $html .= '<div class="pagination-wrapper faq-pagination">'; 
		        $html .= '<nav class="navigation pagination" role="navigation">';
		            $html .= '<div class="nav-links">'; 
		            $big = 999999999; // need an unlikely integer
		            $html .= paginate_links( array(
		                'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		                'format' => '?paged=%#%',
		                'current' => max( 1, get_query_var('paged') ),
		                'total' => $query->max_num_pages,
		                'prev_text'          => __('Prev'),
		                'next_text'          => __('Next')
		            ) );
		            $html .= '</div>';
		        $html .= '</nav>';
		    $html .= '</div>';
		endif;
	endif;
	return $html;
}
add_shortcode( 'mos_faq', 'mos_faq_func' );

function mos_faq_get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}
function mos_faq_admin_notice__success() {
	global $pagenow, $typenow;
	//var_dump($pagenow); //edit.php
	//var_dump($typenow); //qa
	if ($pagenow == 'edit.php' AND $typenow == 'qa') :
    ?>
    <div class="notice notice-success is-dismissible">
        <p><strong>For using faqs in your post or page use this shortcode</strong><br />[mos_faq limit="-1/any_number" offset="0/any_number" category="blank/category ids seperate by ," tag="blank/category ids seperate by ," order="blank/DESC,ASC" orderby="blank/ID,author,title,name,type,date,modified,parent,rand,comment_count" author="1/any_number" container="1/0" container_class="blank/any_string" class="blank/any_string" singular="0/1" pagination="0/1" grid="1-5" view="accordion/collapsible/block"]</p>
    </div>
    <?php endif;
}
add_action( 'admin_notices', 'mos_faq_admin_notice__success' );
add_action( 'wp_footer', 'mos_faq_custom_script' );
function mos_faq_custom_script () {	
	$mos_faq_option = get_option( 'mos_faq_option' );
	?>
	<style>
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit {
		<?php if ($mos_faq_option['mos_faq_body_pbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_body_pbg'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_font_size']) : ?>
		font-size: <?php echo $mos_faq_option['mos_faq_body_font_size'] ?>px;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_font_height']) : ?>
		line-height: <?php echo $mos_faq_option['mos_faq_body_font_height'] ?>px;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_font_align']) : ?>
		text-align: <?php echo $mos_faq_option['mos_faq_body_font_align'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_font_weight']) : ?>
		font-weight: <?php echo $mos_faq_option['mos_faq_body_font_weight'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_font_color']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_body_font_color'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_measurements_padding']) : ?>
		padding: <?php echo $mos_faq_option['mos_faq_body_measurements_padding'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_measurements_margin']) : ?>
		margin: <?php echo $mos_faq_option['mos_faq_body_measurements_margin'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_body_border_width'] AND $mos_faq_option['mos_faq_body_border_style'] AND $mos_faq_option['mos_faq_body_border_color'] ) : ?>
		border: <?php echo $mos_faq_option['mos_faq_body_border_width'] ?>px <?php echo $mos_faq_option['mos_faq_body_border_style'] ?> <?php echo $mos_faq_option['mos_faq_body_border_color'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_body_border_radius']) : ?>
		-webkit-border-radius: <?php echo $mos_faq_option['mos_faq_body_border_radius'] ?>px;
		-moz-border-radius: <?php echo $mos_faq_option['mos_faq_body_border_radius'] ?>px;
		-o-border-radius: <?php echo $mos_faq_option['mos_faq_body_border_radius'] ?>px;
		border-radius: <?php echo $mos_faq_option['mos_faq_body_border_radius'] ?>px;
		<?php endif; ?>
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit:hover {
		<?php if ($mos_faq_option['mos_faq_body_hbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_body_hbg'] ?>;
		<?php endif; ?>
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit.opened {
		<?php if ($mos_faq_option['mos_faq_body_abg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_body_abg'] ?>;
		<?php endif; ?>		
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-title > a {
		<?php if ($mos_faq_option['mos_faq_heading_font_pcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_heading_font_pcolor'] ?>;
		<?php endif; ?>		
		<?php if ($mos_faq_option['mos_faq_heading_pbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_heading_pbg'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_heading_font_size']) : ?>
		font-size: <?php echo $mos_faq_option['mos_faq_heading_font_size'] ?>px;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_heading_font_height']) : ?>
		line-height: <?php echo $mos_faq_option['mos_faq_heading_font_height'] ?>px;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_heading_font_align']) : ?>
		text-align: <?php echo $mos_faq_option['mos_faq_heading_font_align'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_heading_font_weight']) : ?>
		font-weight: <?php echo $mos_faq_option['mos_faq_heading_font_weight'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_heading_measurements_padding']) : ?>
		padding: <?php echo $mos_faq_option['mos_faq_heading_measurements_padding'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_heading_measurements_margin']) : ?>
		margin: <?php echo $mos_faq_option['mos_faq_heading_measurements_margin'] ?>;
		<?php endif; ?>	

		<?php if ($mos_faq_option['mos_faq_heading_border_width'] AND $mos_faq_option['mos_faq_heading_border_style'] AND $mos_faq_option['mos_faq_heading_border_color'] ) : ?>
		border: <?php echo $mos_faq_option['mos_faq_heading_border_width'] ?>px <?php echo $mos_faq_option['mos_faq_heading_border_style'] ?> <?php echo $mos_faq_option['mos_faq_heading_border_color'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_heading_border_radius']) : ?>
		-webkit-border-radius: <?php echo $mos_faq_option['mos_faq_heading_border_radius'] ?>px;
		-moz-border-radius: <?php echo $mos_faq_option['mos_faq_heading_border_radius'] ?>px;
		-o-border-radius: <?php echo $mos_faq_option['mos_faq_heading_border_radius'] ?>px;
		border-radius: <?php echo $mos_faq_option['mos_faq_heading_border_radius'] ?>px;
		<?php endif; ?>	
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit:hover .mos-faq-title > a {
		<?php if ($mos_faq_option['mos_faq_heading_font_hcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_heading_font_hcolor'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_heading_hbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_heading_hbg'] ?>;
		<?php endif; ?>		
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit.opened .mos-faq-title > a {	
		<?php if ($mos_faq_option['mos_faq_heading_font_acolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_heading_font_acolor'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_heading_abg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_heading_abg'] ?>;
		<?php endif; ?>	
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-title .mos-faq-icon-con {
		<?php if ($mos_faq_option['mos_faq_icon_pbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_icon_pbg'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_pcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_icon_font_pcolor'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_size']) : ?>
		font-size: <?php echo $mos_faq_option['mos_faq_icon_font_size'] ?>px;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_height']) : ?>
		line-height: <?php echo $mos_faq_option['mos_faq_icon_font_height'] ?>px;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_align']) : ?>
		text-align: <?php echo $mos_faq_option['mos_faq_icon_font_align'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_weight']) : ?>
		font-weight: <?php echo $mos_faq_option['mos_faq_icon_font_weight'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_measurements_width']) : ?>
		width: <?php echo $mos_faq_option['mos_faq_icon_measurements_width'] ?>px;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_measurements_padding']) : ?>
		padding: <?php echo $mos_faq_option['mos_faq_icon_measurements_padding'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_measurements_margin']) : ?>
		margin: <?php echo $mos_faq_option['mos_faq_icon_measurements_margin'] ?>;
		<?php endif; ?>

		<?php if ($mos_faq_option['mos_faq_icon_border_width'] AND $mos_faq_option['mos_faq_icon_border_style'] AND $mos_faq_option['mos_faq_icon_border_color'] ) : ?>
		border: <?php echo $mos_faq_option['mos_faq_icon_border_width'] ?>px <?php echo $mos_faq_option['mos_faq_icon_border_style'] ?> <?php echo $mos_faq_option['mos_faq_icon_border_color'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_border_radius']) : ?>
		-webkit-border-radius: <?php echo $mos_faq_option['mos_faq_icon_border_radius'] ?>px;
		-moz-border-radius: <?php echo $mos_faq_option['mos_faq_icon_border_radius'] ?>px;
		-o-border-radius: <?php echo $mos_faq_option['mos_faq_icon_border_radius'] ?>px;
		border-radius: <?php echo $mos_faq_option['mos_faq_icon_border_radius'] ?>px;
		<?php endif; ?>
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit:hover .mos-faq-title .mos-faq-icon-con {
		<?php if ($mos_faq_option['mos_faq_icon_hbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_icon_hbg'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_hcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_icon_font_hcolor'] ?>;
		<?php endif; ?>
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit.opened .mos-faq-title .mos-faq-icon-con {
		<?php if ($mos_faq_option['mos_faq_icon_abg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_icon_abg'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_icon_font_acolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_icon_font_acolor'] ?>;
		<?php endif; ?>
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-body {
		<?php if ($mos_faq_option['mos_faq_content_font_pcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_content_font_pcolor'] ?>;
		<?php endif; ?>		
		<?php if ($mos_faq_option['mos_faq_content_pbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_content_pbg'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_content_font_size']) : ?>
		font-size: <?php echo $mos_faq_option['mos_faq_content_font_size'] ?>px;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_content_font_height']) : ?>
		line-height: <?php echo $mos_faq_option['mos_faq_content_font_height'] ?>px;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_content_font_align']) : ?>
		text-align: <?php echo $mos_faq_option['mos_faq_content_font_align'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_content_font_weight']) : ?>
		font-weight: <?php echo $mos_faq_option['mos_faq_content_font_weight'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_content_measurements_padding']) : ?>
		padding: <?php echo $mos_faq_option['mos_faq_content_measurements_padding'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_content_measurements_margin']) : ?>
		margin: <?php echo $mos_faq_option['mos_faq_content_measurements_margin'] ?>;
		<?php endif; ?>	

		<?php if ($mos_faq_option['mos_faq_content_border_width'] AND $mos_faq_option['mos_faq_content_border_style'] AND $mos_faq_option['mos_faq_content_border_color'] ) : ?>
		border: <?php echo $mos_faq_option['mos_faq_content_border_width'] ?>px <?php echo $mos_faq_option['mos_faq_content_border_style'] ?> <?php echo $mos_faq_option['mos_faq_content_border_color'] ?>;
		<?php endif; ?>
		<?php if ($mos_faq_option['mos_faq_content_border_radius']) : ?>
		-webkit-border-radius: <?php echo $mos_faq_option['mos_faq_content_border_radius'] ?>px;
		-moz-border-radius: <?php echo $mos_faq_option['mos_faq_content_border_radius'] ?>px;
		-o-border-radius: <?php echo $mos_faq_option['mos_faq_content_border_radius'] ?>px;
		border-radius: <?php echo $mos_faq_option['mos_faq_content_border_radius'] ?>px;
		<?php endif; ?>	
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit:hover .mos-faq-body {
		<?php if ($mos_faq_option['mos_faq_content_font_hcolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_content_font_hcolor'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_content_hbg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_content_hbg'] ?>;
		<?php endif; ?>		
	}
	[id^="mos-faq-"].mos-faq-container .mos-faq-unit.opened .mos-faq-body {	
		<?php if ($mos_faq_option['mos_faq_content_font_acolor']) : ?>
		color: <?php echo $mos_faq_option['mos_faq_content_font_acolor'] ?>;
		<?php endif; ?>	
		<?php if ($mos_faq_option['mos_faq_content_abg']) : ?>
		background-color: <?php echo $mos_faq_option['mos_faq_content_abg'] ?>;
		<?php endif; ?>	
	}
	<?php echo $mos_faq_option['mos_faq_css']; ?>
	</style>
	<script>
		<?php echo $mos_faq_option['mos_faq_js']; ?>
	</script>
	<?php
}