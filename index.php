<?php get_header(); ?>
<div class="row" id="slider">
	<div class="twelve columns">
		<ul class="bxslider">
			<li><img src="/img/photo1.jpg" /></li>
			<li><img src="/img/photo2.jpg" /></li>
			<li><img src="/img/photo3.jpg" /></li>
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
			<div class="three columns" id="sidebar">
				<?php dynamic_sidebar('front-page'); ?>
			</div>
		</section>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/lib/jquery.bxslider.css" rel="stylesheet" />

<?php get_footer(); ?>