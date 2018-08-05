<div div class="col-md-12">

    <?php $args = array('post_type'=>"vd","posts_per_page"=>"6");
    query_posts($args);
    while(have_posts()){ the_post();
    
    ?>
<div style="float:right;margin:0px;margin-top:4px;" class="col-md-4">
    <?php the_content(); ?>
</div>
    <?php } ?>
	

			 
	</div>