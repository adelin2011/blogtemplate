<?php get_header(); ?>

	<section class="row">
		<div class="nine columns">
			<?php 
				if (have_posts()){
					while (have_posts()){
						the_post();?>
						<h3> <?php the_title (); ?></h3>
						<?php if ( has_post_thumbnail() ) {
               			 the_post_thumbnail('thumbnail');
           		 		} ?>
						<?php the_excerpt();?>
						<a href="<?php the_permalink(); ?>" Read More... </a>						
					<?php }//end while
				}//end if
				?>
		</div>	
		<div class="three columns"> 
			<h4>Sidebar </h4>
			<p>Sidebar </p>
		</div>
	</section>	

<?php get_footer(); ?>
