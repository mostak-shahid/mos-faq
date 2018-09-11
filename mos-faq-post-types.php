<?php
//FAQs
add_action( 'init', 'mos_faq_init' );
function mos_faq_init() {
	$labels = array(
		'name'               => _x( 'FAQs', 'post type general name', 'excavator-template' ),
		'singular_name'      => _x( 'FAQ', 'post type singular name', 'excavator-template' ),
		'menu_name'          => _x( 'FAQs', 'admin menu', 'excavator-template' ),
		'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'excavator-template' ),
		'add_new'            => _x( 'Add New', 'faq', 'excavator-template' ),
		'add_new_item'       => __( 'Add New FAQ', 'excavator-template' ),
		'new_item'           => __( 'New FAQ', 'excavator-template' ),
		'edit_item'          => __( 'Edit FAQ', 'excavator-template' ),
		'view_item'          => __( 'View FAQ', 'excavator-template' ),
		'all_items'          => __( 'All FAQs', 'excavator-template' ),
		'search_items'       => __( 'Search FAQs', 'excavator-template' ),
		'parent_item_colon'  => __( 'Parent FAQs:', 'excavator-template' ),
		'not_found'          => __( 'No FAQs found.', 'excavator-template' ),
		'not_found_in_trash' => __( 'No FAQs found in Trash.', 'excavator-template' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'excavator-template' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qa' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'menu_icon' => 'dashicons-editor-help',
		'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
	);

	register_post_type( 'qa', $args );
}


add_action( 'after_switch_theme', 'flush_rewrite_rules' );
