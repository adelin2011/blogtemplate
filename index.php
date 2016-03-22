<?php get_header(); ?>
	<div class="row">
		<div class="twelve columns">
			<figure="image" id="image">
				<img src="img/photo1.jpg" alt="image"/>
			</figure>
		</div>
	</div>

<section class="row">
			<div class="nine columns white-bg">
				<?php 
				if ( have_posts() ) {
				    while ( have_posts() ) {
				        the_post();?>

					<div class="row">
						<div class="three columns">
							<div class="circular-image">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail');} ?>
							</div>
						</div>
						<div class="nine columns">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt();?>
							<a href="<?php the_permalink(); ?>">Read More...</a>
						</div>
					</div>

				  <?php  } // end while
				} // end if
				?>
			</div>
			<div class="three columns">
				<?php dynamic_sidebar('front-page'); ?>
			</div>
		</section>

<?php get_footer(); ?>