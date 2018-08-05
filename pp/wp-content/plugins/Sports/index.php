<?php 
/*
Plugin Name: SportsNews

*/


//setup 


//includes
include 'activate.php';
include 'SportsNewsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_sports_news_plugin');
add_action('init','init_sports_news');

?>