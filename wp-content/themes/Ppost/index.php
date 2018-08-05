
<?php
/*
Template Name: HomePage

*/
get_header(); ?>

		<!-- body -->






		<section id="body" class="container-fluid">
			<div class="row">
				<div class="col-md-2 same currencyrateandfacebook visible-desktop">
					<div class="row red-row">
						کرنسی کی شرح
					</div>
	<!-- currency diplaying table -->
					<div class="row">
					<table class="table table-bordered">
						<th>قیمت فروخت</th>
						<th>قیمت خرید</th>
						<th>کرنسی</th>
                            <?php
                        $args = array("post_type"=>"currency","posts_per_page"=>6,"orderby"=>"ID","order"=>"DESC");
                        query_posts($args); 
                        
                        if(have_posts()){
                            while(have_posts()){ the_post();
                        ?>
						<tr>
                            <td><?php echo get_post_meta($post->ID,"sellingPrice",true); ?></td>
							<td><?php echo get_post_meta($post->ID,"buyingPrice",true); ?></td>
							
							<td align="right"><?php the_title(); ?></td>
						</tr>
                        <?php } } wp_reset_query(); ?>
                        
                        
					</table>
					</div>

					<!-- currency displaying table ends here -->

					<!-- Facebook -->

					<div class="row row-facebook">
						<?php include_once'sidebar.php'; ?>
					</div>

					<!-- Facebook ends here -->
				</div>

				<div class="col-md-5 same picturesvideosandletters visible-desktop">
				
					<div class="row mycarouzel" style="">
							<div class="row" style="margin:3px;color:white;background-color: #1d744a;height: 40px;text-align: center;font-weight: 700;font-size: 20px;padding-top: 8px;"><p>تصویریں</p>
							</div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin:3px;height: 200px;">


							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox" style="height: 200px;">
                                  
                                  <?php
                                  $args = array('post_type' => 'world','posts_per_page'=> 1, 'orderby' => "ID", 'order' => 'DESC');
                                  query_posts($args);
                                  $x = 1;
                                  if(have_posts()){ the_post(); ///if($x == 1){ $x++; continue; }
                                                   
                                  ?>
                                  
							    <div class="item active">
                                    
<!--							      <img src="Images/leadstory.jpg" alt="" style="height: 200px;width: 100%;">-->
                                    <?php the_post_thumbnail('large',['style' => "height: 200px;width: 100%;"]); ?>
							      <div class="carousel-caption">
							        <?php the_title(); ?>
							      </div>
							    </div>
                                  
                                <?php }  wp_reset_query(); ?> 
                                  
                                  
                                   <?php
                                  $args = array('post_type' => 'world','posts_per_page'=> 5, 'orderby' => "ID", 'order' => 'DESC');
                                  query_posts($args);
                                  $x = 1;
                                while(have_posts()){ the_post(); if($x == 1){ $x++; continue; }
                                                   
                                  ?>
							    <div class="item">
<!--							      <img src="Images/result.jpg" alt="" style="height: 200px;width: 100%;">-->
                                    <?php the_post_thumbnail('large',['style' => "height: 200px;width: 100%;"]); ?>
							      <div class="carousel-caption">
							       <?php the_title(); ?>
							      </div>
							    </div>
							    <?php } ?>
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
					</div>
					</div>

					
					<div class="row videos">
						<div class="row title-row">ویڈیوز</div>

						<div class="row">
							<?php include_once 'frontvideogallery.php'; ?>
						</div>
					</div>

				</div>


				<!-- editor choice second column from the right - because the site is in urd -->



				<!-- editor choice second column from the right - ends here  -->




				<div class="col-md-5 same leadstoryandreadleadstories ">
					<!-- leadtopstory -->
				<div class="row">
                    <?php $args = array('post_type' => 'latest','posts_per_page'=> 1, 'orderby' => 'ID', 'order' => 'DESC');
                    
                    query_posts($args);
                    if(have_posts()){ the_post();
                    ?>
                    
                    
					<div class="col-md-12 leadstory">
						<!-- <p class="latestbanner">تازہ ترین</p> -->
						<a href="<?php the_permalink(); ?>"><p class="leadstory-title"><?php the_title(); ?></p></a>
                       
						<p class="story-time" style="clear:both;float:right;"><?php the_date(); ?>&nbsp; <?php the_time(); ?></p>
<!--						<img src="Images/leadstory.jpg" class="img-responsive leadstoryImage" />-->
                        <?php the_post_thumbnail('large',['style' => "height:260px;"]); ?>
						<p class="leadstoryshortdescription" style="float: right;">
                            <?php $a = get_the_excerpt(); echo wp_trim_words($a,50,null); ?>
						</p>
					</div>
                    <?php } wp_reset_query(); ?>
				</div>
				<!-- leadtopstory ends here -->

				<!-- lead remaining stories -->

				<div class="row leadremainingsotries visible-desktop" >
                    <?php  $args = array('post_type' => 'latest','posts_per_page'=> 5, 'orderby' => 'ID', 'order' => 'DESC');
                    
                    query_posts($args);
                    $x = 1;
                    while(have_posts()){ the_post(); if($x == 1) { $x++; continue;}
                    ?>
					<a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-6 small-story">
						
<!--						<img src="Images/result.jpg" class="img-responsive"/>-->
                        <?php the_post_thumbnail('small'); ?>
                        <?php $a = get_the_excerpt(); ?>
						<p><?php echo wp_trim_words($a,15,null); ?></p>
                        </div></a>
                    <?php } ?>

				</div>
				<!-- lead remianing stories end here -->





			<!-- leadremainingsotries for mobile and tablet -->

					<div class="row visible-phone visible-tablet">
                        
                <?php  $args = array('post_type' => 'latest','posts_per_page'=> 5, 'orderby' => 'ID', 'order' => 'DESC');
                    
                    query_posts($args);
                    $x = 1;
                    while(have_posts()){ the_post(); if($x == 1) { $x++; continue;}
                    ?>

                        <a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-12" style="margin-top:30px;">
						  <?php the_post_thumbnail('small',["style" => "clear:both;width:80px;height:60px;float:right;"]); ?>
                        <?php $a = get_the_excerpt(); ?>
						<p><?php echo wp_trim_words($a,15,null); ?></p>
                            </div></a>
                        <?php } ?>

                            </div>

				<!-- leadremainingsotries for mobile and tablet end here -->


				</div>
			</div>
            
            <div class="col-md-5 same picturesvideosandletters visible-phone visible-tablet">
				
					<div class="row mycarouzel" style="clear:both;">
							<div class="row" style="margin:3px;color:white;background-color: #1d744a;height: 40px;text-align: center;font-weight: 700;font-size: 20px;padding-top: 8px;"><p>تصویریں</p>
							</div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin:3px;height: 150px;">
                                
                            <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox" style="height: 150px;">
                                  
                                  <?php
                                  $args = array('post_type' => 'slideshowimage','posts_per_page'=> 1, 'orderby' => "ID", 'order' => 'DESC');
                                  query_posts($args);
                                  $x = 1;
                                  if(have_posts()){ the_post(); ///if($x == 1){ $x++; continue; }
                                                   
                                  ?>
                                  
							    <div class="item active">
                                    
<!--							      <img src="Images/leadstory.jpg" alt="" style="height: 200px;width: 100%;">-->
                                    <?php the_post_thumbnail('large',['style' => "height: 150px;width: 100%;"]); ?>
							      <div class="carousel-caption">
							        <?php the_title(); ?>
							      </div>
							    </div>
                                  
                                <?php }  wp_reset_query(); ?> 
                                  
                                  
                                   <?php
                                  $args = array('post_type' => 'slideshowimage','posts_per_page'=> 5, 'orderby' => "ID", 'order' => 'DESC');
                                  query_posts($args);
                                  $x = 1;
                                while(have_posts()){ the_post(); if($x == 1){ $x++; continue; }
                                                   
                                  ?>
							    <div class="item">
<!--							      <img src="Images/result.jpg" alt="" style="height: 200px;width: 100%;">-->
                                    <?php the_post_thumbnail('large',['style' => "height: 150px;width: 100%;"]); ?>
							      <div class="carousel-caption">
							       <?php the_title(); ?>
							      </div>
							    </div>
							    <?php } ?>
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
					</div>
					</div>

					
					<div class="row videos">
						<div class="row title-row">ویڈیوز</div>

						<div class="row">
							<?php include_once'frontvideogallerymob.php'; ?>
						</div>
					</div>

				</div>
            <div class="col-md-2 same currencyrateandfacebook visible-phone visible-tablet">
					<div class="row red-row">
						کرنسی کی شرح
					</div>

						<!-- currency diplaying table -->
					<div class="row">
					<table class="table table-bordered">
						<th>قیمت فروخت</th>
						<th>قیمت خرید</th>
						<th>کرنسی</th>
                            <?php
                        $args = array("post_type"=>"currency","posts_per_page"=>6,"orderby"=>"ID","order"=>"DESC");
                        query_posts($args); 
                        
                        if(have_posts()){
                            while(have_posts()){ the_post();
                        ?>
						<tr>
                            <td><?php echo get_post_meta($post->ID,"sellingPrice",true); ?></td>
							<td><?php echo get_post_meta($post->ID,"buyingPrice",true); ?></td>
							
							<td align="right"><?php the_title(); ?></td>
						</tr>
                        <?php } } wp_reset_query(); ?>
                        
                        
					</table>
					</div>

					<!-- currency displaying table ends here -->

					<!-- Facebook -->

					<div class="row row-facebook">
						<?php include_once'sidebarmob.php'; ?>
					</div>

					<!-- Facebook ends here -->
				</div>

				
            
            
		</section>
		<!-- body ends here -->
	</header>


<section class="container-fluid three-sections-after-body visible-desktop">
	<div class="row">
		<!-- News letters -->
<?php include_once 'newsletters.php'; ?>
		<!-- News letters end here -->


		<!-- Most read News -->
		<div class="col-md-4">
            <style>
                .advideo iframe {height: 200px;width: 100%;}
            </style>
			<div class="row" style="text-align: center;font-weight: 700;font-size: 24px;"></div>
			<div class="row advideo leadremainingsotries visible-desktop">
             
                <?php include_once 'advideo.php'; ?>



				</div>
		</div>



		<!-- Most read News end here -->


		<!-- Editors choice here -->
		<div class="col-md-4">
			<div class="row" style="text-align: center;font-weight: 700;font-size: 24px;">ایڈیٹر کی پسند</div>

			<div class="row leadremainingsotries visible-desktop">
					
                     <?php $args = array( 'posts_per_page' => 4,'post_type'=>array('feature','entertainment','latest','sport','science','world'), 'cat' => 1 );

    $myposts = get_posts( $args );
    //var_dump($myposts);
    foreach ( $myposts as $post ) { setup_postdata( $post ); ?>

					<a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-6 small-story">
						
						<?php the_post_thumbnail('small'); ?>
						<p><?php the_title(); ?></p>
					</div></a>
                <?php } ?>

				</div>


		</div>

		<!-- Editors choice end here -->

	</div>

</section>


<section class="container-fluid after-three-sections visible-desktop">
	<div class="row">
		
		<div class="col-md-4">
			<table class="table table-bordered news-lines-column">
			<tr>
                <td>
                    <marquee scrollamount="5" loop="inifinite" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "entertainment","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title());  
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">انٹرٹینمنٹ</td>
			</tr>
			<tr>
				<td>
                    <marquee scrollamount="5" direction="right" loop="inifinite" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "feature","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title());  
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php  echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">فیچرز</td>
			</tr>
			<tr>
				 <td>
                    <marquee scrollamount="5" loop="inifinite" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "sport","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title()); 
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php  echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">کھیل</td>
			</tr>
				
			</table>
		</div>
		<div class="col-md-4"></div>


		<div class="col-md-4">
			<table class="table table-bordered news-lines-column">
			<tr>
				<td>
                    <marquee scrollamount="5" loop="inifinite" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "latest","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title()); 
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">پاکستان</td>
			</tr>
			<tr>
				
				<td>
                    <marquee scrollamount="5" direction="right" loop="inifinite" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "world","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title()); 
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">دنیا</td>
			</tr>
			<tr>
			 <td>
                    <marquee scrollamount="5" loop="inifinite" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $args = array("post_type"=> "sport","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
                    query_posts($args);
                    $m = "&nbsp;";
                    while(have_posts()){ the_post(); 
                       $m .= filter_title_for_marque(get_the_title()); 
                                       
                    }
                    wp_reset_query();
                    ?>
                    <?php echo $m; ?></marquee>
                </td>
				<td class="header-column" align="right">کھیل</td>
			</tr>
				
			</table>
		</div>


	</div>
</section>

<?php get_footer(); ?>