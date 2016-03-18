<?php get_header(); ?>

	<section class="row">

		<div class="container" id="image">
			<figure="image">
				<img src="img/beach.jpg" alt="image"/>
			</figure> 
		</div> 	

		<div class="nine columns">
			<?php 
				if (have_posts()){
					while (have_posts()){
						the_post();?>

		<div class="row">
			<div class="three columns">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail');
		         } ?>
		   </div> 
		   <div class= "nine columns">        		 		
				<h3> <a href="<?php the_permalink(); ?>">
					<?php
					the_title (); ?></h3>
				<?php the_excerpt();?>
				<a href="<?php the_permalink(); ?>"> Read More... </a>	
			</div> 	

				<?php }//end while
				}//end if
				?>
		</div>
		<div class="three columns">
			<?php dynamic_sidebar('front-page') ?>
		</div>	
	</section>	

<?php get_footer(); ?>
