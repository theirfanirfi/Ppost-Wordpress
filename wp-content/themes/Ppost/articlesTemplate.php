
<?php
/*
Template Name: Features News

*/
get_header(); ?>

		<!-- body -->






		<section id="body" class="container-fluid">
			<div class="row">
				<div class="col-md-3 same currencyrateandfacebook visible-desktop">
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
                        <?php include_once 'sidebar.php';?>

                    </div>

					<!-- Facebook ends here -->
				</div>

				<div class="col-md-9 same picturesvideosandletters">
                    <div class="row">
				<?php 
                    $args = array('post_type' => "feature", "orderby" => "ID", "order" => "DESC");
                    query_posts($args);
                    if(have_posts()){
                    while(have_posts()){ the_post();
                    ?>
					<a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-5" style="margin:12px;both;float:right;border:2px outset gray;padding:20px;height:175px;">
				<h5 style="float:right;"><?php echo get_the_date(); ?>&nbsp; <?php the_time(); ?></h5>

						 <?php the_post_thumbnail('small',["style" => "clear:both;width:80px;height:60px;float:right;"]); ?>
						<h4 style="clear:both;float:right;"><?php the_title(); ?></h4>
					

					</div></a>
                    <?php } } wp_reset_query(); ?>
					</div>
					
				</div>


				<!-- editor choice second column from the right - because the site is in urd -->



				<!-- editor choice second column from the right - ends here  -->


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
                        <?php include_once 'sidebarmob.php';?>

                    </div>

					<!-- Facebook ends here -->
				</div>

				
            
            
		</section>
		<!-- body ends here -->
	</header>


<section class="container-fluid three-sections-after-body visible-desktop">
	<div class="row">
		<!-- News letters -->
		<?php include_once'newsletters.php'; ?>
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
                    <?php $args = array("category_name"=> "pakistan","posts_per_page"=>4,"orderby"=>"ID", "order"=>"DESC");
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