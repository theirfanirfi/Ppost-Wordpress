<?php 
/*
Plugin Name: ScienceAndTechnology

*/


//setup 


//includes
include 'activate.php';
include 'ScienceAndTechnologyInit.php';

//hooks
register_activation_hook(__FILE__,'activate_scienceandtechnology_news_plugin');
add_action('init','init_scienceandtechnology_news');

?>