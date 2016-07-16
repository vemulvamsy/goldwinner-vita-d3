<?php get_header(); ?>
<!-- banner section begin -->
<section id="quiz-section">
	<div class="container" >
	<div class="min-height-600">
		<div class="quiz-block">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				the_content();

			endwhile; endif; ?>
		</div>
	</div>
	<div class="margin-bottom-100"></div>
	</div><!-- end of container fluid -->
</section><!-- end of quiz-section section -->
<!-- end of banner section -->



<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


