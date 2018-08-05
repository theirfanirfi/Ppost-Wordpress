<div div class="col-md-5">
    <style>
        iframe { width: 95%; height: 100px;float:right;}
    </style>

    <?php $args = array('post_type'=>"vd","posts_per_page"=>"4");
    query_posts($args);
    while(have_posts()){ the_post();
    
    ?>
<div style="float:right;margin:4px;margin-bottom:6px;" class="col-md-2">
    <?php the_content(); ?>
</div>
    <?php } ?>
	

			 
	</div>