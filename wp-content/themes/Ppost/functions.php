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
function wpse240352_filter_content ($post_excerpt) { 
  $post_excerpt = '<p style="clear:both;font-weight:500px;font-size:22px;margin-bottom:80px;">' . $post_excerpt . '</p>';
  return $post_excerpt;
  }
add_filter ('get_the_excerpt','wpse240352_filter_excerpt');
add_filter ('get_the_content','wpse240352_filter_content');

add_filter('get_the_title','filter_title_for_marque');


//add_filter( 'comment_form_defaults', function ( $args ) {
//    $args['class_form'] = 'myformclass';
//    return $args;
//});

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            clear: both;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/Images/mylogo.png);
		      height:160px;
		      width:160px;
		      background-size: 160px 160px;
		background-repeat: no-repeat;
        	
        }
        
        #wp-submit {background-color:green;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//add_action('admin_init','register_main_menu');
add_theme_support('post-thumbnails');

/// registering widget

function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );
?>