<?php 
function init_world_news()
{
    $labels = array(
		'name' => _x('World News','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('World News','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('World News','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('World News','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New World News','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New World News','PPOST'),
		'new_item' => __('New World News', 'PPOST'),
		'edit_item' => __('Edit World News', 'PPOST'),
		'view_item' => __('View World News', 'PPOST'),
		'all_items' => __('All World News', 'PPOST'),
		'search_items' => __('Search World News', 'PPOST'),
		'parent_item_colon'  => __( 'Parent World News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No World News found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No World News found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'world', $args );
    add_post_type_support('world',array('comments'));
    flush_rewrite_rules();
}

?>