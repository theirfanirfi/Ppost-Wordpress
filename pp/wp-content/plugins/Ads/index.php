<?php 
/*
Plugin Name: Ads

*/


//setup 


//includes
include 'activate.php';
include 'AdsInit.php';

//hooks
register_activation_hook(__FILE__,'activate_Ads_plugin');
add_action('init','init_ads_news');

?>