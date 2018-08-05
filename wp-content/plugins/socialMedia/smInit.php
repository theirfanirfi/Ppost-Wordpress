<?php 
function init_sm()
{
    $labels = array(
		'name' => _x('Social Media','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Social Media','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Social Media','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Social Media','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add Social Media','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add Social Media','PPOST'),
		'new_item' => __('New Social Media', 'PPOST'),
		'edit_item' => __('Edit Social Media', 'PPOST'),
		'view_item' => __('View Social Media', 'PPOST'),
		'all_items' => __('All Social Media', 'PPOST'),
		'search_items' => __('Search Social Media', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Social Media:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Social Media found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Social Media found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'sm', $args );
    add_post_type_support('sm',array('comments'));
    flush_rewrite_rules();
}

?>