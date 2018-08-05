<?php 
/*
Plugin Name: Ad Videos Plugin

*/


//setup 


//includes
include 'activate.php';
include 'AdvideosInit.php';

//hooks
register_activation_hook(__FILE__,'activate_Advideo_plugin');
add_action('init','init_Advideos');

?>