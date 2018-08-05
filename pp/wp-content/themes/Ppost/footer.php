

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
    ...
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

<footer class="container-fluid">
		
</footer>



</body>
</html>