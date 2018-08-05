<?php 
/*
Plugin Name: News Letters

*/


//setup 


//includes
include 'activate.php';
include 'pakistanNewsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_NewsLetters');
add_action('init','init_letter_news');

?>