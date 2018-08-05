<?php 
function activate_entertainment_news_plugin()
{
    if(version_compare(get_bloginfo('version'),4.2,'<'))
    {
        wp_die(__("Update your WordPress"));
    }
}


?>