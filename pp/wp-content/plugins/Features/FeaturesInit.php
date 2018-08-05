<?php 
function init_feature_news()
{
    $labels = array(
		'name' => _x('Features','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Features','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Features','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Features','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Feature News','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Feature News','PPOST'),
		'new_item' => __('New Feature News', 'PPOST'),
		'edit_item' => __('Edit Feature News', 'PPOST'),
		'view_item' => __('View Feature News', 'PPOST'),
		'all_items' => __('All Features News', 'PPOST'),
		'search_items' => __('Search Features', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Feature News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Features found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Features found in Trash.', 'your-plugin-textdomain' )
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
		'hierarchical'       => true,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'trackbacks', 'custom-fields', 'revisions','attachments'),
		'taxonomies'  		 =>	array('category','post_tage')
	);

	register_post_type( 'feature', $args );
    add_post_type_support('feature',array('comments'));
    flush_rewrite_rules();
}

?>