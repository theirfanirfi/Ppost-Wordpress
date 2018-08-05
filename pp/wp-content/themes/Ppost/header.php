<!DOCTYPE html>
<html>
<head>
	<title>Ppost</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/jquery19.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/myscript.js"></script>


</head>
<body>

	<header class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<img id="logo" src="<?php bloginfo('template_url'); ?>/Images/logo.jpg" class="img-responsive logo-img" style="float: left;">
				<h2 class="first-header-title visible-phone visible-tablet" style="float: right;"><?php bloginfo('description'); ?></h2>

			</div>

			<div class="col-md-3">
				<h2 class="first-header-title visible-desktop"><?php bloginfo('description'); ?></h2>
			</div>

				<div class="col-md-4">
				<h2 class="second-header-title visible-desktop"><?php bloginfo('site_title'); ?></h2>
				</div>

			<div class="col-md-3 socialMedia">
				<div class="row"><p style="float: right;display: block;font-weight: bold;margin-right: 20px;">18 ستمبر ، 2017 </p></div>
				<div class="row">
					
				<a href="#"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/gp.png" style="margin-right: 26px;"></a>
				<a href="#"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/y.png"></a>
				<a href="#"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/t.png"></a>
				<a href="#"><img class="soc soc-logo" src="<?php bloginfo('template_url'); ?>/Images/f.png"></a>
			</div>


			<div class="row">
				<input type="search" name="search" class="soc socc" placeholder="Search">
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
    
    
      <!-- <ul class="nav navbar-nav navbar-right "> -->
  <!--     	<li><a href="#" >تصویریں</a></li>
      	<li><a href="#" >ویڈیوز</a></li>
      	<li><a href="#" >خصوصیات اور تبصرے</a></li>
      	<li><a href="#" >انٹرٹینمنٹ</a></li>
      	<li><a href="#" >کھیلوں کی خبریں</a></li>
      	<li><a href="#" >دنیا</a></li>
      	<li><a href="#" >پاکستان</a></li>
        <li><a href="#">صفحہ اول</a></li> -->
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
			<div class="row">
				<div class="col-md-11  displaynews">
					
				</div>
				<div class="red visible-desktop" style="float: right;width: 9%;color:white;">تازہ ترین</div>
				<!-- <div class="red visible-phone visible-tablet" style="float: right;width: 15%;"></div> -->
				
			</div>
		</div>


		<!-- Lates News bar ended -->

