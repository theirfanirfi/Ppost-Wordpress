<?php 
function init_scienceandtechnology_news()
{
    $labels = array(
		'name' => _x('Science And Tech','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Science And Tech','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Science And Tech','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Science And Tech','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Science And Tech News','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Science And Tech News','PPOST'),
		'new_item' => __('New Science And Tech News', 'PPOST'),
		'edit_item' => __('Edit Science And Tech News', 'PPOST'),
		'view_item' => __('View Science And Tech News', 'PPOST'),
		'all_items' => __('All Science And Tech News', 'PPOST'),
		'search_items' => __('Search Science And Tech News', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Science And Tech News:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Science And Tech News found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Science And Tech News found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'science', $args );
    add_post_type_support('science',array('comments'));
    flush_rewrite_rules();
}

?>