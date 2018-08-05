<?php
if(function_exists('register_nav_menus'))
{
	register_nav_menus(
		array(
			'main_nav' => 'main_menu'
			)
	);

}

function filter_title_for_marque($post_title)
{
    $post_title .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    return $post_title;
}

function wpse240352_filter_excerpt ($post_excerpt) { 
  $post_excerpt = '<p class="leadstoryshortdescription">' . $post_excerpt . '</p>';
  return $post_excerpt;
  }  
add_filter ('get_the_excerpt','wpse240352_filter_excerpt');
add_filter('get_the_title','filter_title_for_marque');
//add_action('admin_init','register_main_menu');
add_theme_support('post-thumbnails');
?>