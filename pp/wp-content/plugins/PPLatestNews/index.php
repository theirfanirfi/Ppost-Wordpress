<?php 
/*
Plugin Name: LatestNews

*/


//setup 


//includes
include 'activate.php';
include 'LatestNewsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_latest_news_plugin');
add_action('init','init_latest_news');

?>