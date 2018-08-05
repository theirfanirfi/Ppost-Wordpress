<?php 
function init_sports_news()
{
    $labels = array(
		'name' => _x('Sports News','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Sports News','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Sports News','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Sports News','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Sports News','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Sports News','PPOST'),
		'new_item' => __('New Sports News', 'PPOST'),
		'edit_item' => __('Edit Sports News', 'PPOST'),
		'view_item' => __('View Sports News', 'PPOST'),
		'all_items' => __('All Sports News', 'PPOST'),
		'search_items' => __('Search Entertainment News', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Sports News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Sports Newsfound.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Sports News found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'sport', $args );
    add_post_type_support('sport',array('comments'));
    flush_rewrite_rules();
}

?>