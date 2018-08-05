<?php 
/*
Plugin Name: sm

*/


//setup 


//includes
include 'activate.php';
include 'smInit.php';

//hooks
register_activation_hook(__FILE__,'activate_socialMedia_plugin');
add_action('init','init_sm');

?>