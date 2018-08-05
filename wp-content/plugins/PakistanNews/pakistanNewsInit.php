<?php 
function init_letter_news()
{
    $labels = array(
		'name' => _x('News Letters','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('News Letter','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('News Letters','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('News Letters','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New News Letter','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New News Letter','PPOST'),
		'new_item' => __('New News Letter', 'PPOST'),
		'edit_item' => __('Edit News Letter', 'PPOST'),
		'view_item' => __('View News Letter', 'PPOST'),
		'all_items' => __('All News Letters', 'PPOST'),
		'search_items' => __('Search News Letters', 'PPOST'),
		'parent_item_colon'  => __( 'Parent News Letters:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No News Letter found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No News Letter found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'nl', $args );
    add_post_type_support('nl',array('comments'));
    flush_rewrite_rules();
}

?>