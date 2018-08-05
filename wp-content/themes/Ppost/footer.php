

<section class="container-fluid ads-section" style="margin:4px;height: 200px;">
	<div class="row">
        <div class="col-md-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:198px;width:100%;">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
      <?php $args = array('post_type' => 'ads','posts_per_page'=>1,'orderby'=> 'ID','order'=> 'DESC');
      query_posts($args);
      
      if(have_posts()){ the_post();
      ?>
    <div class="item active">
        <?php the_post_thumbnail('large',['style'=> "height:198px;width:100%;"]); ?>
      <div class="carousel-caption">
        <h4><?php the_title(); ?></h4>
      </div>
    </div>
      <?php } wp_reset_query(); ?>
      
      
      
      
       <?php $args = array('post_type' => 'ads','posts_per_page'=>4,'orderby'=> 'ID','order'=> 'DESC');
      query_posts($args);
      $x = 1;
      while(have_posts()){ the_post(); if($x == 1){ $x++; continue; }
      ?>
    <div class="item">
       <?php the_post_thumbnail('large',['style'=> "height:198px;width:100%;"]); ?>
      <div class="carousel-caption">
       <h4><?php the_title(); ?></h4>
      </div>
    </div>
      <?php } ?>
  </div>

  <!-- Controls 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
        </div>
	</div>
</section>

<footer class="container-fluid" style="margin-bottom: 12px;">
<div class="row">
<div  class="col-md-4">
    <img id="logo" src="<?php bloginfo('template_url'); ?>/Images/logo.jpg" class="img-responsive visible-desktop" style="float: left;width: 150px;">
</div>
<div  class="col-md-4" style="padding: 30px;">
    <div class="row">
        <?php $args = array('post_type'=> "sm","posts_per_page"=> '1',"orderby"=> "ID","order"=>"DESC");
        query_posts($args);
        if(have_posts()){ the_post();
            ?>

            <a href="<?php echo get_post_meta($post->ID,"gp",true); ?>" target="_blank"><img style="width: 40px;" class="" src="<?php bloginfo('template_url'); ?>/Images/gp.png"></a>
            <a href="<?php echo get_post_meta($post->ID,"youtube",true); ?>" target="_blank"><img style="width: 40px;"  class="" src="<?php bloginfo('template_url'); ?>/Images/y.png"></a>
            <a href="<?php echo get_post_meta($post->ID,"twitter",true); ?>" target="_blank"><img style="width: 40px;" class="" src="<?php bloginfo('template_url'); ?>/Images/t.png"></a>
            <a href="<?php echo get_post_meta($post->ID,"fb",true); ?>" target="_blank"><img style="width: 40px;" class="" src="<?php bloginfo('template_url'); ?>/Images/f.png"></a>
        <?php } ?>
    </div>
    <div class="row">
        <h5 style="margin-left: 12px;">Copyright <?php echo date('Y'); ?></h5>
        <h6>All Rights are reserved with ppost.pk</h6>
    </div>
</div>
<div  class="col-md-4">

<!--<div class="row"><div class="col-md-8 aboutUsu">ہمارے بارے میں</div></div>-->

<div class="row"><div class="col-md-8 aboutUsu">+923461234567  :رابطہ</div></div>
</div>    
    
</div>		          
</footer>


	<script type="text/javascript">

		jQuery(document).ready(function(){

			jQuery("#gallery").unitegallery();

		});
		
	</script>

</body>
</html>