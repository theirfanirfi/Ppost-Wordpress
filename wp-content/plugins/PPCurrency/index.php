<?php 
/*
Plugin Name: Currency

*/


//setup 


//includes
include 'activate.php';
include 'CurrencyInit.php';

//hooks
register_activation_hook(__FILE__,'activate_currency_plugin');
add_action('init','init_Currency_news');

?>