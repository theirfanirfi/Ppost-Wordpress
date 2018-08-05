<?php 
/*
Plugin Name: About Us

*/


//setup 


//includes
include 'activate.php';
include 'aboutUsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_aboutus_plugin');
add_action('init','init_About_us');

?>