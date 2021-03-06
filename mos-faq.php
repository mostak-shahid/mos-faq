<?php
/*
Plugin Name: Mos FAQs
Plugin URI: http://mostak.belocal.today/plugins/mos-faq/
Description: Mos FAQs plugin that lets you easily create, order and publicize FAQs using shortcodes.
Version: 2.0.1
Author: Md. Mostak Shahid
Author URI: http://mostak.belocal.today/
License: GPL2
*/

require_once ( plugin_dir_path( __FILE__ ) . 'mos-faq-array.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'mos-faq-functions.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'mos-faq-settings.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'mos-faq-post-types.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'mos-faq-taxonomy.php' );

require_once('plugins/update/plugin-update-checker.php');
$pluginInit = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/mostak-shahid/update/master/mos-faq.json',
	__FILE__,
	'mos-faq'
);
