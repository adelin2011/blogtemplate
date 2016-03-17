<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('Web Interactivity and Engagement');?> </title>
	<?php wp_head(); ?>
	<link rel= "stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">

</head>
<body>
<div class="header-wrapper">
	<div class="container">
		<header class="row">
			<div class="five columns"> 
				<h1 class="site-title"> 
					<a href="http://aridelin.com/WIE/"> Web Interactivity and Engagement</a></h1>
			</div> 
			<div class="two columns">
	        	<?php get_search_form(); ?>
	    	</div>
		</header>

		<nav class="navigation">
		<ul>
			<li class="current_page"> <a href="index.html"> Home </a> </li>
			<li> <a href="posts.html"> Posts </a> </li>
			<li> <a href="contact.html"> Contact </a> </li>
		</ul>
	</nav>
		
		<div class="row">
	    	<div class="five columns">
	        	<?php wp_nav_menu(array(
	            	'sort_column' => 'menu_order', 
	            	'container_class' => 'blank-menu-header'
	            	));?>
	    	</div>
		</div>
	</div>
</div>	
<!--END HEADER-->


















