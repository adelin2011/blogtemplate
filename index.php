<?php get_header(); ?>
<div class="row">
	<div class="twelve columns">
		<ul class="bxslider">
			<img src="<?php echo get_template_directory_uri() . '/img/photo1.jpg'; ?>" width="100%" height="60%">
		</ul>
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
						<div class="nine-columns">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt();?>
							<a href="<?php the_permalink(); ?>">Read More...</a>
						</div>
					</div>

				  <?php  } // end while
				} // end if
				?>
			</div>

				<figure= id="profile">
					<img src="<?php echo get_template_directory_uri() . '/img/me.png'; ?>">
				</figure>

			<div class="three columns" id="sidebar">
				<?php dynamic_sidebar('front-page'); ?>
			</div>
		</section>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/css/jquery.bxslider.css" rel="stylesheet" />

<?php get_footer(); ?>