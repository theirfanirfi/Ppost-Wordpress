<?php 
function init_Currency_news()
{
    $labels = array(
		'name' => _x('Currency','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Currency','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Currency','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Currency','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Currency','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Currency','PPOST'),
		'new_item' => __('New Currency', 'PPOST'),
		'edit_item' => __('Edit Currency', 'PPOST'),
		'view_item' => __('View Currency', 'PPOST'),
		'all_items' => __('All Currencies', 'PPOST'),
		'search_items' => __('Search Currencies', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Currency:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Currency found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Currency found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'currency', $args );
    add_post_type_support('currency',array('comments'));
    flush_rewrite_rules();
}

?>