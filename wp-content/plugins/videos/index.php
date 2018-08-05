<?php 
/*
Plugin Name: Videos Plugin

*/


//setup 


//includes
include 'activate.php';
include 'videosInit.php';

//hooks
register_activation_hook(__FILE__,'activate_video_plugin');
add_action('init','init_videos');

?>