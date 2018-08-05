<?php 
function init_entertainment_news()
{
    $labels = array(
		'name' => _x('Entertainment News','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Entertainment News','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Entertainment News','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Entertainment News','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Entertainment News','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Entertainment News','PPOST'),
		'new_item' => __('New Entertainment News', 'PPOST'),
		'edit_item' => __('Edit Entertainment News', 'PPOST'),
		'view_item' => __('View Entertainment News', 'PPOST'),
		'all_items' => __('All Entertainment News', 'PPOST'),
		'search_items' => __('Search Entertainment News', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Entertainment News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Entertainment News found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Entertainment News found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'entertainment', $args );
    add_post_type_support('entertainment',array('comments'));
    flush_rewrite_rules();
}

?>