<!DOCTYPE html>
<html>
<head>
	<title>Ppost</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

    <?php if(is_page_template('pictures.php')){ ?>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/bootstrap/unitegallery/package/unitegallery/js/jquery-11.0.min.js'></script>
	<?php } else { ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/jquery19.min.js"></script>
    <?php } ?>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/bootstrap/unitegallery/package/unitegallery/js/unitegallery.min.js'></script>

	<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/bootstrap/unitegallery/package/unitegallery/css/unite-gallery.css' type='text/css' />
	
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/bootstrap/unitegallery/package/unitegallery/themes/carousel/ug-theme-carousel.js'></script>	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/bootstrap/unitegallery/package/unitegallery/themes/tiles/ug-theme-tiles.js'></script>


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/myscript.js"></script>



</head>
<body>

	<header class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<img id="logo" src="<?php bloginfo('template_url'); ?>/Images/plogo.jpg" class="img-responsive logo-img" style="float: left;">
				<h2 class="first-header-title visible-phone visible-tablet" style="float: right;"><?php bloginfo('description'); ?></h2>

			</div>

			<div class="col-md-3">
				<h2 class="first-header-title visible-desktop"><?php bloginfo('description'); ?></h2>
			</div>

				<div class="col-md-4">
				<h2 class="second-header-title visible-desktop"><?php bloginfo('site_title'); ?></h2>
				</div>

			<div class="col-md-3 socialMedia">
				<div class="row"><p style="float: right;display: block;font-weight: bold;margin-right: 20px;"><?php date_default_timezone_set("Asia/Karachi"); echo date('d M Y'); ?></p></div>
				<div class="row">
                    <?php $args = array('post_type'=> "sm","posts_per_page"=> '1',"orderby"=> "ID","order"=>"DESC");
                    query_posts($args);
                    if(have_posts()){ the_post();
                    ?>
					
				<a href="<?php echo get_post_meta($post->ID,"gp",true); ?>" target="_blank"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/gp.png" style="margin-right: 26px;"></a>
				<a href="<?php echo get_post_meta($post->ID,"youtube",true); ?>" target="_blank"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/y.png"></a>
				<a href="<?php echo get_post_meta($post->ID,"twitter",true); ?>" target="_blank"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/t.png"></a>
				<a href="<?php echo get_post_meta($post->ID,"fb",true); ?>" target="_blank"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/f.png"></a>
                    <?php } ?>
			</div>


			<div class="row">
<!--				<input type="search" name="search" class="soc socc" placeholder="Search">-->
                <style>
                .screen-reader-text {display: none !important;}
                </style>
                <?php get_search_form(); ?>
			</div>

			</div>
		</div>



		<!-- menu bar -->

<nav class="navbar navbar-default menu-bar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-phone visible-tablet" href="#">PPOST.PK</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
        <?php 
        wp_nav_menu(array('menu' => 'main_menu','menu_class' => 'nav navbar-nav navbar-right '));
        ?>
        
      
      <!-- </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		<!-- menu bar ended -->
		




		<!-- Latest news started -->


		<div class="container-fluid latestnews-bar visible-desktop">
<!--                <table class="row table">-->
<!--                    <tr>-->
<!--                        <td class="col-md-9" style="text-align: center;float: left;clear:both; ">-->
<!--                            news go here-->
<!--                        </td>-->
<!--                        <td class="col-md-1 visible-desktop red" style="clear:both;text-align: right;float:right;" >-->
<!--				        تازہ ترین-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </table>-->
            <div class="row">
            <div class="col-md-11" style="padding:6px;text-align: center;">
                <?php
                $args = array(
                  "post_type" => "latest",
                  "posts_per_page" => 5,
                  "orderby" => "ID",
                  "order" => "DESC"
                );
                wp_reset_query();
                query_posts($args);
                $x = 1;
                $p = ""; ?>

                <marquee style="font-size:24px;word-spacing: 6px;" scrollamount="5" loop="inifinite" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php
                    $m = "&nbsp;";
                    while(have_posts()){ the_post();
                        $m .= filter_title_for_marque(get_the_title());

                    }
                    wp_reset_query();
                    ?>
                    <?php echo $m; ?></marquee>

            </div>
                <div class="col-md-1 red"><span style="color:white;">

                    تازہ ترین
                </span>
                </div>
            </div>


		</div>


		<!-- Lates News bar ended -->

