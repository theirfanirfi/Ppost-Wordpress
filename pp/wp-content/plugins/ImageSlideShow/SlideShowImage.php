<?php 
function init_Slide_Show()
{
    $labels = array(
		'name' => _x('Slide Show Images','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Slide Show Image','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Slide Show Images','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Slide Show Images','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add Slide Show Image','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Slide Show Image','PPOST'),
		'new_item' => __('New Slide Show Images', 'PPOST'),
		'edit_item' => __('Edit Slide Show Image', 'PPOST'),
		'view_item' => __('View Slide Show Images', 'PPOST'),
		'all_items' => __('All Slide Show Images', 'PPOST'),
		'search_items' => __('Search Slide Show Images', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Slide Show Image:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Slide Show Image found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Slide Show Image in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'slideshowimage', $args );
    add_post_type_support('slideshowimage',array('comments'));
    flush_rewrite_rules();
}

?>