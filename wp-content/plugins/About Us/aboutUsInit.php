<?php 
function init_About_us()
{
    $labels = array(
		'name' => _x('About Us','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('About Us','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('About Us','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('About Us','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New About Us','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New About Us','PPOST'),
		'new_item' => __('New About Us', 'PPOST'),
		'edit_item' => __('Edit About Us', 'PPOST'),
		'view_item' => __('View About Us', 'PPOST'),
		'all_items' => __('All About Us', 'PPOST'),
		'search_items' => __('Search About Us', 'PPOST'),
		'parent_item_colon'  => __( 'Parent About Us:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No About Us found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No About Us found in Trash.', 'your-plugin-textdomain' )
		);
		
		


	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is plugin', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'custom-fields','revisions','attachments'),
		'taxonomies'  		 =>	array('category','post_tage')
	);

	register_post_type( 'au', $args );
    add_post_type_support('au',array('comments'));
    flush_rewrite_rules();
}

?>