<?php 
/*
Plugin Name: world News

*/


//setup 


//includes
include 'activate.php';
include 'worldNewsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_world_news_plugin');
add_action('init','init_world_news');

?>