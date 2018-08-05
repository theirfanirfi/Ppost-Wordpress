<?php 
/*
Plugin Name: EntertainmentNews

*/


//setup 


//includes
include 'activate.php';
include 'EntertainmentInit.php';

//hooks
register_activation_hook(__FILE__,'activate_entertainment_news_plugin');
add_action('init','init_entertainment_news');

?>