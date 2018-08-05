<?php
/**
 * Created by PhpStorm.
 * User: Irfan Ullah
 * Date: 28/11/2017
 * Time: 7:40 AM
 */
wp_reset_query();
$args = array("post_type"=>"advd","posts_per_page"=>1, "orderby" => "ID", "order"=>"DESC");

query_posts($args);
if(have_posts())
{
    the_post();
    the_content();
}
?>