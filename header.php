<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('Web Interactivity and Engagement');?> </title>
	<?php wp_head(); ?>
	<link rel= "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

	<!-- jQuery library (served from Google) -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="<?php echo get_template_directory_uri() . '/js/jquery.bxslider.min.js'; ?>"></script>
	<!-- bxSlider CSS file -->
	<link href="<?php echo get_template_directory_uri() . '/css/jquery.bxslider.css'; ?>" rel="stylesheet" />

</head>
<body>
<div class="header-wrapper">
	<div class="container">
		<header class="row">
			<div class="four columns"> 
				<h1 class="site-title"> 
					<a href="http://aridelin.com/WIE/"> Web Interactivity and Engagement</a></h1>
			</div> 
				<div class="four columns">
					<nav class="navigation">
						<ul>
							<li class="current_page"> <a href="index.html"> HOME </a> </li>
							<li> <a href="posts.html"> POSTS </a> </li>
							<li> <a href="contact.html"> CONTACT </a> </li>
						</ul>
					</nav>
				</div>	

			<div class="four columns">
	        	<?php get_search_form(); ?>
	    	</div>
		</header>
		
		<!--Wordpress menu
		<div class="row">
	    	<div class="five columns">
	        	<?php wp_nav_menu(array(
	            	'sort_column' => 'menu_order', 
	            	'container_class' => 'navigation'
	            	));?>
	    	</div>
		</div>
		-->
		
	</div>
</div>	

<div class="container">
<!--END HEADER-->


















