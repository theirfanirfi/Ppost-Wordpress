<?php 
/*
Template Name: VideoGallery

*/
get_header();
?>
<div div class="col-md-12">
<style>
    iframe {width: 100%;height: 200px;}    
</style>
    <?php $args = array('post_type'=>"vd","posts_per_page"=>"50");
    query_posts($args);
    while(have_posts()){ the_post();
    
    ?>
<div style="" class="col-md-4">
    <p style="float:right;font-weight:bold;font-size:18px;"><?php the_title(); ?></p>
    <?php the_content(); ?>
</div>
    <?php } ?>
	

			 
	</div>


<?php get_footer(); ?>