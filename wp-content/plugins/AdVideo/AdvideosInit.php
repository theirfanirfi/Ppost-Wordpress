<?php 
function init_Advideos()
{
    $labels = array(
		'name' => _x('Ad Videos','post type general name', 'PPLATESTNEWS'),
		'singular_name' => _x('Ad Video','post type singular_name', 'PPLATESTNEWS'),
		'menu_name' => _x('Ad Videos','Admin menu', 'PPOST'),
		'name_admin_bar' => _x('Ad Videos','add new on admin bar', 'PPOST'),
		'add_new' => _x('Add New Ad Video','MAXTECH LIBs','PPOST'),
		'add_new_item' => __('Add New Ad Video','PPOST'),
		'new_item' => __('New Ad Video', 'PPOST'),
		'edit_item' => __('Edit Ad Video', 'PPOST'),
		'view_item' => __('View Ad Video', 'PPOST'),
		'all_items' => __('All Ad Videos', 'PPOST'),
		'search_items' => __('Search Videos', 'PPOST'),
		'parent_item_colon'  => __( 'Parent Video:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Ad Video found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Ad Video found in Trash.', 'your-plugin-textdomain' )
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

	register_post_type( 'advd', $args );
    add_post_type_support('advd',array('comments'));
    flush_rewrite_rules();
}

?>