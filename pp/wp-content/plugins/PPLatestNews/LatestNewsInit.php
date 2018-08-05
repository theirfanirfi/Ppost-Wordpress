<?php 
function init_latest_news()
{
    $labels = array(
		'name' => _x('LatestNews','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('LatestNews','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('LatestNews','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('LatestNews','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New LatestNews','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New LatestNews','PPOST'),
		'new_item' => __('New LatestNews', 'PPOST'),
		'edit_item' => __('Edit LatestNews', 'PPOST'),
		'view_item' => __('View LatestNews', 'PPOST'),
		'all_items' => __('All LatestNews', 'PPOST'),
		'search_items' => __('Search LatestNews', 'PPOST'),
		'parent_item_colon'  => __( 'Parent LatestNews:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No LatestNews found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No LatestNews found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'latest', $args );
    add_post_type_support('latest',array('comments'));
    flush_rewrite_rules();
}

?>