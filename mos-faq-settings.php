<?php
if (isset($_POST['mos_faq_submit']) AND $_POST['mos_faq_submit'] == 'Save Changes') {  

	    $mos_faq_option = array();
		// foreach ($_POST as $field => $value) {
	    // 	$mos_faq_option[$field] = trim($value);
	    // }
	    $color_pat = '/^(\#[\da-f]{3}|\#[\da-f]{6}|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)\)|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/';
	    $number_pat = '/^[0-9]+$/';
	    $alpnumber_pat = '/^[a-zA-Z0-9 ]+$/';
	    $alpha_pat = '/^[a-zA-Z ]+$/';

	    if (isset ($_POST['mos_faq_body_pbg']) AND !empty ($_POST['mos_faq_body_pbg']) AND preg_match($color_pat, $_POST['mos_faq_body_pbg'])) {
	    	$mos_faq_option['mos_faq_body_pbg'] = sanitize_text_field($_POST['mos_faq_body_pbg']);
	    }
	    if (isset ($_POST['mos_faq_body_hbg']) AND !empty ($_POST['mos_faq_body_hbg']) AND preg_match($color_pat, $_POST['mos_faq_body_hbg'])) {
	    	$mos_faq_option['mos_faq_body_hbg'] = sanitize_text_field($_POST['mos_faq_body_hbg']);
	    }
	    if (isset ($_POST['mos_faq_body_abg']) AND !empty ($_POST['mos_faq_body_abg']) AND preg_match($color_pat, $_POST['mos_faq_body_abg'])) {
	    	$mos_faq_option['mos_faq_body_abg'] = sanitize_text_field($_POST['mos_faq_body_abg']);
	    }
	    if (isset ($_POST['mos_faq_body_font_size']) AND !empty ($_POST['mos_faq_body_font_size']) AND preg_match($number_pat, $_POST['mos_faq_body_font_size'])) {
	    	$mos_faq_option['mos_faq_body_font_size'] = sanitize_text_field($_POST['mos_faq_body_font_size']);
	    }
	    if (isset ($_POST['mos_faq_body_font_height']) AND !empty ($_POST['mos_faq_body_font_height']) AND preg_match($number_pat, $_POST['mos_faq_body_font_height'])) {
	    	$mos_faq_option['mos_faq_body_font_height'] = sanitize_text_field($_POST['mos_faq_body_font_height']);
	    }
	    if (isset ($_POST['mos_faq_body_font_align']) AND !empty ($_POST['mos_faq_body_font_align']) AND preg_match($alpha_pat, $_POST['mos_faq_body_font_align'])) {
	    	$mos_faq_option['mos_faq_body_font_align'] = sanitize_text_field($_POST['mos_faq_body_font_align']);
	    }
	    if (isset ($_POST['mos_faq_body_font_weight']) AND !empty ($_POST['mos_faq_body_font_weight']) AND preg_match($number_pat, $_POST['mos_faq_body_font_weight'])) {
	    	$mos_faq_option['mos_faq_body_font_weight'] = sanitize_text_field($_POST['mos_faq_body_font_weight']);
	    }
	    if (isset ($_POST['mos_faq_body_font_color']) AND !empty ($_POST['mos_faq_body_font_color']) AND preg_match($color_pat, $_POST['mos_faq_body_font_color'])) {
	    	$mos_faq_option['mos_faq_body_font_color'] = sanitize_text_field($_POST['mos_faq_body_font_color']);
	    }
	    if (isset ($_POST['mos_faq_body_measurements_padding']) AND !empty ($_POST['mos_faq_body_measurements_padding']) AND preg_match($alpnumber_pat, $_POST['mos_faq_body_measurements_padding'])) {
	    	$mos_faq_option['mos_faq_body_measurements_padding'] = sanitize_text_field($_POST['mos_faq_body_measurements_padding']);
	    }
	    if (isset ($_POST['mos_faq_body_measurements_margin']) AND !empty ($_POST['mos_faq_body_measurements_margin']) AND preg_match($alpnumber_pat, $_POST['mos_faq_body_measurements_margin'])) {
	    	$mos_faq_option['mos_faq_body_measurements_margin'] = sanitize_text_field($_POST['mos_faq_body_measurements_margin']);
	    }
	    if (isset ($_POST['mos_faq_body_border_width']) AND !empty ($_POST['mos_faq_body_border_width']) AND preg_match($number_pat, $_POST['mos_faq_body_border_width'])) {
	    	$mos_faq_option['mos_faq_body_border_width'] = sanitize_text_field($_POST['mos_faq_body_border_width']);
	    }
	    if (isset ($_POST['mos_faq_body_border_style']) AND !empty ($_POST['mos_faq_body_border_style']) AND preg_match($alpha_pat, $_POST['mos_faq_body_border_style'])) {
	    	$mos_faq_option['mos_faq_body_border_style'] = sanitize_text_field($_POST['mos_faq_body_border_style']);
	    }
	    if (isset ($_POST['mos_faq_body_border_color']) AND !empty ($_POST['mos_faq_body_border_color']) AND preg_match($color_pat, $_POST['mos_faq_body_border_color'])) {
	    	$mos_faq_option['mos_faq_body_border_color'] = sanitize_text_field($_POST['mos_faq_body_border_color']);
	    }
	    if (isset ($_POST['mos_faq_body_border_radius']) AND !empty ($_POST['mos_faq_body_border_radius']) AND preg_match($number_pat, $_POST['mos_faq_body_border_radius'])) {
	    	$mos_faq_option['mos_faq_body_border_radius'] = sanitize_text_field($_POST['mos_faq_body_border_radius']);
	    }
	    if (isset ($_POST['mos_faq_heading_pbg']) AND !empty ($_POST['mos_faq_heading_pbg']) AND preg_match($color_pat, $_POST['mos_faq_heading_pbg'])) {
	    	$mos_faq_option['mos_faq_heading_pbg'] = sanitize_text_field($_POST['mos_faq_heading_pbg']);
	    }
	    if (isset ($_POST['mos_faq_heading_hbg']) AND !empty ($_POST['mos_faq_heading_hbg']) AND preg_match($color_pat, $_POST['mos_faq_heading_hbg'])) {
	    	$mos_faq_option['mos_faq_heading_hbg'] = sanitize_text_field($_POST['mos_faq_heading_hbg']);
	    }
	    if (isset ($_POST['mos_faq_heading_abg']) AND !empty ($_POST['mos_faq_heading_abg']) AND preg_match($color_pat, $_POST['mos_faq_heading_abg'])) {
	    	$mos_faq_option['mos_faq_heading_abg'] = sanitize_text_field($_POST['mos_faq_heading_abg']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_size']) AND !empty ($_POST['mos_faq_heading_font_size']) AND preg_match($number_pat, $_POST['mos_faq_heading_font_size'])) {
	    	$mos_faq_option['mos_faq_heading_font_size'] = sanitize_text_field($_POST['mos_faq_heading_font_size']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_height']) AND !empty ($_POST['mos_faq_heading_font_height']) AND preg_match($number_pat, $_POST['mos_faq_heading_font_height'])) {
	    	$mos_faq_option['mos_faq_heading_font_height'] = sanitize_text_field($_POST['mos_faq_heading_font_height']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_align']) AND !empty ($_POST['mos_faq_heading_font_align']) AND preg_match($alpha_pat, $_POST['mos_faq_heading_font_align'])) {
	    	$mos_faq_option['mos_faq_heading_font_align'] = sanitize_text_field($_POST['mos_faq_heading_font_align']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_weight']) AND !empty ($_POST['mos_faq_heading_font_weight']) AND preg_match($number_pat, $_POST['mos_faq_heading_font_weight'])) {
	    	$mos_faq_option['mos_faq_heading_font_weight'] = sanitize_text_field($_POST['mos_faq_heading_font_weight']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_pcolor']) AND !empty ($_POST['mos_faq_heading_font_pcolor']) AND preg_match($color_pat, $_POST['mos_faq_heading_font_pcolor'])) {
	    	$mos_faq_option['mos_faq_heading_font_pcolor'] = sanitize_text_field($_POST['mos_faq_heading_font_pcolor']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_hcolor']) AND !empty ($_POST['mos_faq_heading_font_hcolor']) AND preg_match($color_pat, $_POST['mos_faq_heading_font_hcolor'])) {
	    	$mos_faq_option['mos_faq_heading_font_hcolor'] = sanitize_text_field($_POST['mos_faq_heading_font_hcolor']);
	    }
	    if (isset ($_POST['mos_faq_heading_font_acolor']) AND !empty ($_POST['mos_faq_heading_font_acolor']) AND preg_match($color_pat, $_POST['mos_faq_heading_font_acolor'])) {
	    	$mos_faq_option['mos_faq_heading_font_acolor'] = sanitize_text_field($_POST['mos_faq_heading_font_acolor']);
	    }
	    if (isset ($_POST['mos_faq_heading_measurements_padding']) AND !empty ($_POST['mos_faq_heading_measurements_padding']) AND preg_match($alpnumber_pat, $_POST['mos_faq_heading_measurements_padding'])) {
	    	$mos_faq_option['mos_faq_heading_measurements_padding'] = sanitize_text_field($_POST['mos_faq_heading_measurements_padding']);
	    }
	    if (isset ($_POST['mos_faq_heading_measurements_margin']) AND !empty ($_POST['mos_faq_heading_measurements_margin']) AND preg_match($alpnumber_pat, $_POST['mos_faq_heading_measurements_margin'])) {
	    	$mos_faq_option['mos_faq_heading_measurements_margin'] = sanitize_text_field($_POST['mos_faq_heading_measurements_margin']);
	    }
	    if (isset ($_POST['mos_faq_heading_border_width']) AND !empty ($_POST['mos_faq_heading_border_width']) AND preg_match($number_pat, $_POST['mos_faq_heading_border_width'])) {
	    	$mos_faq_option['mos_faq_heading_border_width'] = sanitize_text_field($_POST['mos_faq_heading_border_width']);
	    }
	    if (isset ($_POST['mos_faq_heading_border_style']) AND !empty ($_POST['mos_faq_heading_border_style']) AND preg_match($alpha_pat, $_POST['mos_faq_heading_border_style'])) {
	    	$mos_faq_option['mos_faq_heading_border_style'] = sanitize_text_field($_POST['mos_faq_heading_border_style']);
	    }
	    if (isset ($_POST['mos_faq_heading_border_color']) AND !empty ($_POST['mos_faq_heading_border_color']) AND preg_match($color_pat, $_POST['mos_faq_heading_border_color'])) {
	    	$mos_faq_option['mos_faq_heading_border_color'] = sanitize_text_field($_POST['mos_faq_heading_border_color']);
	    }
	    if (isset ($_POST['mos_faq_heading_border_radius']) AND !empty ($_POST['mos_faq_heading_border_radius']) AND preg_match($number_pat, $_POST['mos_faq_heading_border_radius'])) {
	    	$mos_faq_option['mos_faq_heading_border_radius'] = sanitize_text_field($_POST['mos_faq_heading_border_radius']);
	    }
	    if (isset ($_POST['mos_faq_icon_pbg']) AND !empty ($_POST['mos_faq_icon_pbg']) AND preg_match($color_pat, $_POST['mos_faq_icon_pbg'])) {
	    	$mos_faq_option['mos_faq_icon_pbg'] = sanitize_text_field($_POST['mos_faq_icon_pbg']);
	    }
	    if (isset ($_POST['mos_faq_icon_hbg']) AND !empty ($_POST['mos_faq_icon_hbg']) AND preg_match($color_pat, $_POST['mos_faq_icon_hbg'])) {
	    	$mos_faq_option['mos_faq_icon_hbg'] = sanitize_text_field($_POST['mos_faq_icon_hbg']);
	    }
	    if (isset ($_POST['mos_faq_icon_abg']) AND !empty ($_POST['mos_faq_icon_abg']) AND preg_match($color_pat, $_POST['mos_faq_icon_abg'])) {
	    	$mos_faq_option['mos_faq_icon_abg'] = sanitize_text_field($_POST['mos_faq_icon_abg']);
	    }
	    if (isset ($_POST['mos_faq_icon']) AND !empty ($_POST['mos_faq_icon']) AND preg_match($alpha_pat, $_POST['mos_faq_icon'])) {
	    	$mos_faq_option['mos_faq_icon'] = sanitize_text_field($_POST['mos_faq_icon']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_size']) AND !empty ($_POST['mos_faq_icon_font_size']) AND preg_match($number_pat, $_POST['mos_faq_icon_font_size'])) {
	    	$mos_faq_option['mos_faq_icon_font_size'] = sanitize_text_field($_POST['mos_faq_icon_font_size']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_height']) AND !empty ($_POST['mos_faq_icon_font_height']) AND preg_match($number_pat, $_POST['mos_faq_icon_font_height'])) {
	    	$mos_faq_option['mos_faq_icon_font_height'] = sanitize_text_field($_POST['mos_faq_icon_font_height']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_align']) AND !empty ($_POST['mos_faq_icon_font_align']) AND preg_match($alpha_pat, $_POST['mos_faq_icon_font_align'])) {
	    	$mos_faq_option['mos_faq_icon_font_align'] = sanitize_text_field($_POST['mos_faq_icon_font_align']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_weight']) AND !empty ($_POST['mos_faq_icon_font_weight']) AND preg_match($number_pat, $_POST['mos_faq_icon_font_weight'])) {
	    	$mos_faq_option['mos_faq_icon_font_weight'] = sanitize_text_field($_POST['mos_faq_icon_font_weight']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_pcolor']) AND !empty ($_POST['mos_faq_icon_font_pcolor']) AND preg_match($color_pat, $_POST['mos_faq_icon_font_pcolor'])) {
	    	$mos_faq_option['mos_faq_icon_font_pcolor'] = sanitize_text_field($_POST['mos_faq_icon_font_pcolor']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_hcolor']) AND !empty ($_POST['mos_faq_icon_font_hcolor']) AND preg_match($color_pat, $_POST['mos_faq_icon_font_hcolor'])) {
	    	$mos_faq_option['mos_faq_icon_font_hcolor'] = sanitize_text_field($_POST['mos_faq_icon_font_hcolor']);
	    }
	    if (isset ($_POST['mos_faq_icon_font_acolor']) AND !empty ($_POST['mos_faq_icon_font_acolor']) AND preg_match($color_pat, $_POST['mos_faq_icon_font_acolor'])) {
	    	$mos_faq_option['mos_faq_icon_font_acolor'] = sanitize_text_field($_POST['mos_faq_icon_font_acolor']);
	    }
	    if (isset ($_POST['mos_faq_icon_measurements_width']) AND !empty ($_POST['mos_faq_icon_measurements_width']) AND preg_match($number_pat, $_POST['mos_faq_icon_measurements_width'])) {
	    	$mos_faq_option['mos_faq_icon_measurements_width'] = sanitize_text_field($_POST['mos_faq_icon_measurements_width']);
	    }
	    if (isset ($_POST['mos_faq_icon_measurements_padding']) AND !empty ($_POST['mos_faq_icon_measurements_padding']) AND preg_match($alpnumber_pat, $_POST['mos_faq_icon_measurements_padding'])) {
	    	$mos_faq_option['mos_faq_icon_measurements_padding'] = sanitize_text_field($_POST['mos_faq_icon_measurements_padding']);
	    }
	    if (isset ($_POST['mos_faq_icon_measurements_margin']) AND !empty ($_POST['mos_faq_icon_measurements_margin']) AND preg_match($alpnumber_pat, $_POST['mos_faq_icon_measurements_margin'])) {
	    	$mos_faq_option['mos_faq_icon_measurements_margin'] = sanitize_text_field($_POST['mos_faq_icon_measurements_margin']);
	    }
	    if (isset ($_POST['mos_faq_icon_border_width']) AND !empty ($_POST['mos_faq_icon_border_width']) AND preg_match($number_pat, $_POST['mos_faq_icon_border_width'])) {
	    	$mos_faq_option['mos_faq_icon_border_width'] = sanitize_text_field($_POST['mos_faq_icon_border_width']);
	    }
	    if (isset ($_POST['mos_faq_icon_border_style']) AND !empty ($_POST['mos_faq_icon_border_style']) AND preg_match($alpha_pat, $_POST['mos_faq_icon_border_style'])) {
	    	$mos_faq_option['mos_faq_icon_border_style'] = sanitize_text_field($_POST['mos_faq_icon_border_style']);
	    }
	    if (isset ($_POST['mos_faq_icon_border_color']) AND !empty ($_POST['mos_faq_icon_border_color']) AND preg_match($color_pat, $_POST['mos_faq_icon_border_color'])) {
	    	$mos_faq_option['mos_faq_icon_border_color'] = sanitize_text_field($_POST['mos_faq_icon_border_color']);
	    }
	    if (isset ($_POST['mos_faq_icon_border_radius']) AND !empty ($_POST['mos_faq_icon_border_radius']) AND preg_match($number_pat, $_POST['mos_faq_icon_border_radius'])) {
	    	$mos_faq_option['mos_faq_icon_border_radius'] = sanitize_text_field($_POST['mos_faq_icon_border_radius']);
	    }
	    if (isset ($_POST['mos_faq_icon_border_radius']) AND !empty ($_POST['mos_faq_icon_border_radius']) AND preg_match($number_pat, $_POST['mos_faq_icon_border_radius'])) {
	    	$mos_faq_option['mos_faq_icon_border_radius'] = sanitize_text_field($_POST['mos_faq_icon_border_radius']);
	    }
	    if (isset ($_POST['mos_faq_content_pbg']) AND !empty ($_POST['mos_faq_content_pbg']) AND preg_match($color_pat, $_POST['mos_faq_content_pbg'])) {
	    	$mos_faq_option['mos_faq_content_pbg'] = sanitize_text_field($_POST['mos_faq_content_pbg']);
	    }
	    if (isset ($_POST['mos_faq_content_hbg']) AND !empty ($_POST['mos_faq_content_hbg']) AND preg_match($color_pat, $_POST['mos_faq_content_hbg'])) {
	    	$mos_faq_option['mos_faq_content_hbg'] = sanitize_text_field($_POST['mos_faq_content_hbg']);
	    }
	    if (isset ($_POST['mos_faq_content_abg']) AND !empty ($_POST['mos_faq_content_abg']) AND preg_match($color_pat, $_POST['mos_faq_content_abg'])) {
	    	$mos_faq_option['mos_faq_content_abg'] = sanitize_text_field($_POST['mos_faq_content_abg']);
	    }
	    if (isset ($_POST['mos_faq_content_abg']) AND !empty ($_POST['mos_faq_content_abg']) AND preg_match($color_pat, $_POST['mos_faq_content_abg'])) {
	    	$mos_faq_option['mos_faq_content_abg'] = sanitize_text_field($_POST['mos_faq_content_abg']);
	    }
	    if (isset ($_POST['mos_faq_content_font_size']) AND !empty ($_POST['mos_faq_content_font_size']) AND preg_match($number_pat, $_POST['mos_faq_content_font_size'])) {
	    	$mos_faq_option['mos_faq_content_font_size'] = sanitize_text_field($_POST['mos_faq_content_font_size']);
	    }
	    if (isset ($_POST['mos_faq_content_font_height']) AND !empty ($_POST['mos_faq_content_font_height']) AND preg_match($number_pat, $_POST['mos_faq_content_font_height'])) {
	    	$mos_faq_option['mos_faq_content_font_height'] = sanitize_text_field($_POST['mos_faq_content_font_height']);
	    }
	    if (isset ($_POST['mos_faq_content_font_align']) AND !empty ($_POST['mos_faq_content_font_align']) AND preg_match($alpha_pat, $_POST['mos_faq_content_font_align'])) {
	    	$mos_faq_option['mos_faq_content_font_align'] = sanitize_text_field($_POST['mos_faq_content_font_align']);
	    }
	    if (isset ($_POST['mos_faq_content_font_weight']) AND !empty ($_POST['mos_faq_content_font_weight']) AND preg_match($number_pat, $_POST['mos_faq_content_font_weight'])) {
	    	$mos_faq_option['mos_faq_content_font_weight'] = sanitize_text_field($_POST['mos_faq_content_font_weight']);
	    }
	    if (isset ($_POST['mos_faq_content_font_weight']) AND !empty ($_POST['mos_faq_content_font_weight']) AND preg_match($number_pat, $_POST['mos_faq_content_font_weight'])) {
	    	$mos_faq_option['mos_faq_content_font_weight'] = sanitize_text_field($_POST['mos_faq_content_font_weight']);
	    }
	    if (isset ($_POST['mos_faq_content_font_pcolor']) AND !empty ($_POST['mos_faq_content_font_pcolor']) AND preg_match($color_pat, $_POST['mos_faq_content_font_pcolor'])) {
	    	$mos_faq_option['mos_faq_content_font_pcolor'] = sanitize_text_field($_POST['mos_faq_content_font_pcolor']);
	    }
	    if (isset ($_POST['mos_faq_content_font_hcolor']) AND !empty ($_POST['mos_faq_content_font_hcolor']) AND preg_match($color_pat, $_POST['mos_faq_content_font_hcolor'])) {
	    	$mos_faq_option['mos_faq_content_font_hcolor'] = sanitize_text_field($_POST['mos_faq_content_font_hcolor']);
	    }
	    if (isset ($_POST['mos_faq_content_font_acolor']) AND !empty ($_POST['mos_faq_content_font_acolor']) AND preg_match($color_pat, $_POST['mos_faq_content_font_acolor'])) {
	    	$mos_faq_option['mos_faq_content_font_acolor'] = sanitize_text_field($_POST['mos_faq_content_font_acolor']);
	    }
	    if (isset ($_POST['mos_faq_content_measurements_padding']) AND !empty ($_POST['mos_faq_content_measurements_padding']) AND preg_match($alpnumber_pat, $_POST['mos_faq_content_measurements_padding'])) {
	    	$mos_faq_option['mos_faq_content_measurements_padding'] = sanitize_text_field($_POST['mos_faq_content_measurements_padding']);
	    }
	    if (isset ($_POST['mos_faq_content_measurements_margin']) AND !empty ($_POST['mos_faq_content_measurements_margin']) AND preg_match($alpnumber_pat, $_POST['mos_faq_content_measurements_margin'])) {
	    	$mos_faq_option['mos_faq_content_measurements_margin'] = sanitize_text_field($_POST['mos_faq_content_measurements_margin']);
	    }
	    if (isset ($_POST['mos_faq_content_border_width']) AND !empty ($_POST['mos_faq_content_border_width']) AND preg_match($number_pat, $_POST['mos_faq_content_border_width'])) {
	    	$mos_faq_option['mos_faq_content_border_width'] = sanitize_text_field($_POST['mos_faq_content_border_width']);
	    }
	    if (isset ($_POST['mos_faq_content_border_style']) AND !empty ($_POST['mos_faq_content_border_style']) AND preg_match($alpha_pat, $_POST['mos_faq_content_border_style'])) {
	    	$mos_faq_option['mos_faq_content_border_style'] = sanitize_text_field($_POST['mos_faq_content_border_style']);
	    }
	    if (isset ($_POST['mos_faq_content_border_color']) AND !empty ($_POST['mos_faq_content_border_color']) AND preg_match($color_pat, $_POST['mos_faq_content_border_color'])) {
	    	$mos_faq_option['mos_faq_content_border_color'] = sanitize_text_field($_POST['mos_faq_content_border_color']);
	    }
	    if (isset ($_POST['mos_faq_content_border_radius']) AND !empty ($_POST['mos_faq_content_border_radius']) AND preg_match($number_pat, $_POST['mos_faq_content_border_radius'])) {
	    	$mos_faq_option['mos_faq_content_border_radius'] = sanitize_text_field($_POST['mos_faq_content_border_radius']);
	    }
	    if (isset ($_POST['mos_faq_fontawesome']) AND !empty ($_POST['mos_faq_fontawesome']) AND preg_match($number_pat, $_POST['mos_faq_fontawesome'])) {
	    	$mos_faq_option['mos_faq_fontawesome'] = sanitize_text_field($_POST['mos_faq_fontawesome']);
	    }
	    if (isset ($_POST['mos_faq_jquery']) AND !empty ($_POST['mos_faq_jquery']) AND preg_match($number_pat, $_POST['mos_faq_jquery'])) {
	    	$mos_faq_option['mos_faq_jquery'] = sanitize_text_field($_POST['mos_faq_jquery']);
	    }
	    if (isset ($_POST['mos_faq_css']) AND !empty ($_POST['mos_faq_css'])) {
	    	$mos_faq_option['mos_faq_css'] = sanitize_text_field($_POST['mos_faq_css']);
	    }
	    if (isset ($_POST['mos_faq_js']) AND !empty ($_POST['mos_faq_js'])) {
	    	$mos_faq_option['mos_faq_js'] = sanitize_text_field($_POST['mos_faq_js']);
	    }	    
	    update_option( 'mos_faq_option', $mos_faq_option, false );

}


function mos_faq_admin_menu () {
    add_submenu_page( 'edit.php?post_type=qa', 'Mos FAQ Settings', 'Settings', 'manage_options', 'faq_settings', 'mos_faq_admin_page' );
}
add_action("admin_menu", "mos_faq_admin_menu");


function mos_faq_admin_page () {
	if (@$_GET['tab']) $active_tab = $_GET['tab'];
	elseif (@$_COOKIE['faq_active_tab']) $active_tab = $_COOKIE['faq_active_tab'];
	else $active_tab = 'dashboard';
    $mos_faq_option = get_option( 'mos_faq_option' );
    global $font_align, $font_weight, $border_style, $icons;
    //var_dump($mos_faq_option);
    ?>
    <div class="wrap mos-faq-wrapper">
        <h1><?php _e("Mos FAQ Settings") ?></h1>
        <ul class="nav nav-tabs">
            <li class="tab-nav <?php if($active_tab == 'dashboard') echo 'active';?>"><a data-id="dashboard" href="?post_type=qa&page=faq_settings&tab=dashboard">Dashboard</a></li>
            <li class="tab-nav <?php if($active_tab == 'body') echo 'active';?>"><a data-id="body" href="?post_type=qa&page=faq_settings&tab=body">Body</a></li>
            <li class="tab-nav <?php if($active_tab == 'heading') echo 'active';?>"><a data-id="heading" href="?post_type=qa&page=faq_settings&tab=heading">Heading</a></li>
            <li class="tab-nav <?php if($active_tab == 'icon') echo 'active';?>"><a data-id="icon" href="?post_type=qa&page=faq_settings&tab=icon">Icon</a></li>
            <li class="tab-nav <?php if($active_tab == 'content') echo 'active';?>"><a data-id="content" href="?post_type=qa&page=faq_settings&tab=content">Content</a></li>
            <li class="tab-nav <?php if($active_tab == 'advanced') echo 'active';?>"><a data-id="advanced" href="?post_type=qa&page=faq_settings&tab=advanced">Advanced CSS, JS</a></li>
        </ul>
        <form method="post">
        	<div id="mos-faq-dashboard" class="tab-con <?php if($active_tab == 'dashboard') echo 'active' ?>">
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
            				<tt>grid</tt>
            			</dt>
						<dd>(string) - Range from 1 to 5.</dd>
											
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
	                        <th scope="row"><label for="mos_faq_body_pbg">Background</label></th>
	                        <td>	                        	
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_body_pbg" id="mos_faq_body_pbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_body_pbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_body_hbg" id="mos_faq_body_hbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_body_hbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_body_abg" id="mos_faq_body_abg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_body_abg']; ?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
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
	                        <th scope="row"><label for="mos_faq_icon_pbg">Background</label></th>
	                        <td>	                        	
	                        	<div class="mos-row">
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_icon_pbg" id="mos_faq_icon_pbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_icon_pbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Primary Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_icon_hbg" id="mos_faq_icon_hbg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_icon_hbg']; ?>" data-format="rgb" data-opacity="1" placeholder="Hover Background"/>
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	  
			                        	<div class="mos-form-group">                      		
				                        	<input type="text" name="mos_faq_icon_abg" id="mos_faq_icon_abg" class="moscp" value="<?php echo @$mos_faq_option['mos_faq_icon_abg']; ?>" data-format="rgb" data-opacity="1" placeholder="Active Background"/>
				                        </div>
		                        	</div>	                        		
	                        	</div>
	                        </td>
	                    </tr>
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
	            <h3>Content Styling</h3>
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
											<input type="text" name="mos_faq_content_measurements_padding" id="mos_faq_content_measurements_padding" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_measurements_padding']; ?>" placeholder="Content Padding">
				                        </div>
		                        	</div>
		                        	<div class="mos-form-con">	 
			                        	<div class="mos-form-group">
			                        		<input type="text" name="mos_faq_content_measurements_margin" id="mos_faq_content_measurements_margin" class="full-input" value="<?php echo @$mos_faq_option['mos_faq_content_measurements_margin']; ?>" placeholder="Content Margin">
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
	                        <td>
	                        	<textarea name="mos_faq_css" id="mos_faq_css" rows="10" class="regular-text"><?php echo @$mos_faq_option['mos_faq_css']; ?></textarea>
								<script>
		                        var editor = CodeMirror.fromTextArea(document.getElementById("mos_faq_css"), {
		                          lineNumbers: true,
		                          mode: "text/css",
		                          extraKeys: {"Ctrl-Space": "autocomplete"}
		                        });
								</script>
	                        </td>
	                    </tr>
	                    <tr>
	                        <th scope="row"><label for="mos_faq_js">Custom JS</label></th>
	                        <td>
	                        	<textarea name="mos_faq_js" id="mos_faq_js" rows="10" class="regular-text"><?php echo @$mos_faq_option['mos_faq_js']; ?></textarea>
								<script>
		                        var editor = CodeMirror.fromTextArea(document.getElementById("mos_faq_js"), {
		                          lineNumbers: true,
		                          mode: "text/css",
		                          extraKeys: {"Ctrl-Space": "autocomplete"}
		                        });
								</script>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
            </div>

        <p class="submit"><input type="submit" name="mos_faq_submit" id="submit" class="button button-primary" value="Save Changes"></p>
        </form>

    </div>
    <?php
}