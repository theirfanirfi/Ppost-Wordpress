<?php 
/*
Plugin Name: SlideShow

*/


//setup 


//includes
include 'activate.php';
include 'SlideShowImage.php';

//hooks
register_activation_hook(__FILE__,'activate_latest_newss_plugin');
add_action('init','init_Slide_Show');

?>