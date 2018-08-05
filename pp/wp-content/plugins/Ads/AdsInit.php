<?php 
function init_ads_news()
{
    $labels = array(
		'name' => _x('Ads','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Ads','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Advertisement','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Ads','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Advertisement','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Advertisement','PPOST'),
		'new_item' => __('New Advertisement', 'PPOST'),
		'edit_item' => __('Edit Advertisement', 'PPOST'),
		'view_item' => __('View Advertisement', 'PPOST'),
		'all_items' => __('All Ads', 'PPOST'),
		'search_items' => __('Search Advertisements', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Advertisements:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Advertisement found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Advertisement found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'ads', $args );
    add_post_type_support('ads',array('comments'));
    flush_rewrite_rules();
}

?>