<?php 
/*
Template Name: Sport News
Template Post Type: sport
*/
get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 visible-desktop">
        
        <?php  $args = array('post_type' => 'sport','posts_per_page'=> 7, 'orderby' => 'ID', 'order' => 'DESC');
                    
                    query_posts($args);
                    $x = 1;
                    while(have_posts()){ the_post(); if($x == 1) { $x++; continue;}
                    ?>
            <div clas="row">
                <div class="col-md-12 single-small-stories">
					<a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-6 small-story">
                        <?php the_post_thumbnail('small',['style'=>'width:100px;height:75px;']); ?>
                        <?php $a = get_the_excerpt(); ?>
						<p><?php echo wp_trim_words($a,25,null); ?></p>
                        </div></a>
        </div>
                </div>
                    <?php }  wp_reset_query(); ?>
        </div>

    <div class="col-md-8">
						<!-- <p class="latestbanner">تازہ ترین</p> -->
                    <?php the_post(); ?>
						<a class="leadstory-title" href="<?php the_permalink();  ?>"><p ><?php the_title(); ?></p></a>
                        <?php the_post_thumbnail('large',['style' => "clear:both;height:260px;width:80%;float:right;"]); ?>
        
        						<p class="story-time" style="clear:both;float:right;margin-right:10px;"><?php  echo get_the_date(); ?>&nbsp; <?php the_time(); ?></p>

						<p class="leadstoryshortdescription" style="clear:both;font-weight:500px;font-size:22px;margin-bottom:40px;">
                            <?php
                            $a = get_the_content();
                            echo $a; ?>
						</p>
        
        <?php comments_template();
        ?>
					</div>

    </div>
</div>


<?php get_footer(); ?>
?>