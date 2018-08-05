<?php 
/*
Plugin Name: Features

*/


//setup 


//includes
include 'activate.php';
include 'FeaturesInit.php';

//hooks
register_activation_hook(__FILE__,'activate_features_news_plugin');
add_action('init','init_feature_news');

?>