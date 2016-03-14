<?php get_header(); ?>

	<section class="row">
		<div class="two columns">
			<?php
				$mood = get_post_meta($post-->ID, 'mood', true);
				if ($mood){
					echo $mood;
				} else { ?>
					<br/>
					<?php }
			?>
			<?php
				$activity = get_post_meta($post-->ID, 'activity_while_writing', true);
				if ($activity){
					echo $activity;
				} else { ?>
					<br/>
					<?php }
			?>
		</div>
		<div class="eight columns">
			<?php 
			if (have_posts()){
				while (have_posts()){
					the_post();?>
					<h3> <?php the_title (); ?></h3>
					<?php the_date("Y-m-d.", "<h4>", "</h4>"):?>
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