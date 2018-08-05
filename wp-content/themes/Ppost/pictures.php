<?php 
/*
Template Name: Images

*/
get_header();
?>
    <div id="gallery" style="display:none;">
<?php 
    wp_reset_query();
    $args = array("post_type"=>'slideshowimage','orderby'=> 'ID','order'=>'DESC');
    
    query_posts($args);
    while(have_posts()){ the_post(); 
                        
                       $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
    ?>
		<a href="#">
		<img alt="<?php the_title(); ?>"
		     src=" <?php echo $thumbnail[0]; ?>"
		     data-image=" <?php echo $thumbnail[0]; ?>"
		     data-image-mobile="<?php echo $thumbnail[0]; ?>"
		     data-thumb-mobile=" <?php echo $thumbnail[0]; ?>"
		     data-description="<?php the_title(); ?>"
		     style="display:none">
		</a>
<?php } wp_reset_query(); ?>
	
</div>


<?php get_footer(); ?>