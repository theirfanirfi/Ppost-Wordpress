<?php 
function init_videos()
{
    $labels = array(
		'name' => _x('Videos','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Video','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Videos','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Videos','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Video','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Video','PPOST'),
		'new_item' => __('New Video', 'PPOST'),
		'edit_item' => __('Edit Video', 'PPOST'),
		'view_item' => __('View Video', 'PPOST'),
		'all_items' => __('All Videos', 'PPOST'),
		'search_items' => __('Search Videos', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Video:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Video found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Video found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'vd', $args );
    add_post_type_support('vd',array('comments'));
    flush_rewrite_rules();
}

?>