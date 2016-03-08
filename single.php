<?php get_header(); ?>

	<section class="row">
		<div class="two columns">
			&nbsp;
		</div>
		<div class="eight columns">
			<?php 
			if (have_posts()){
				while (have_posts()){
					the_post();?>
					<h3> <?php the_title (); ?></h3>
					<?php if (has_post_thumbnail ()) {
						?> 					
						<?php the_post_thumbnail('large'); 
					} ?>
					<?php the_content();
				}//end while
			}//end if
			?>
		</div>	
		<div class="two columns">
			&nbsp;
		</div>
	</section>	

<?php get_footer(); ?>