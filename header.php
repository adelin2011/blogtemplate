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
				<h1 class="title"> 
					<a href="http://aridelin.com/WIE/"> Web Interactivity and Engagement</a></h1>
			</div> 
			<div class="two columns">
	        	<?php get_search_form(); ?>
	    	</div>
		</header>

		<!-- Add Menu Here -->
		
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


















