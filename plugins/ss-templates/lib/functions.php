<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function ss_custom_project() {

	$labels = array(
		'name'               => __( 'Projects', 'text-domain' ),
		'singular_name'      => __( 'Project', 'text-domain' ),
		'add_new'            => __( 'Add New Project', 'text-domain', 'text-domain' ),
		'add_new_item'       => __( 'Add New Project', 'text-domain' ),
		'edit_item'          => __( 'Edit Project', 'text-domain' ),
		'new_item'           => __( 'New Project', 'text-domain' ),
		'view_item'          => __( 'View Project', 'text-domain' ),
		'search_items'       => __( 'Search Projects', 'text-domain' ),
		'not_found'          => __( 'No Projects found', 'text-domain' ),
		'not_found_in_trash' => __( 'No Projects found in Trash', 'text-domain' ),
		'parent_item_colon'  => __( 'Parent Project:', 'text-domain' ),
		'menu_name'          => __( 'Projects', 'text-domain' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'Create Custom Projects',
		'taxonomies'          => array('category','post_tag'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 2,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'projects', $args );
	flush_rewrite_rules(  );
}

add_action( 'init', 'ss_custom_project' );

?>