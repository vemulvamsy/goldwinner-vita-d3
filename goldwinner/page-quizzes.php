<?php get_header(); ?>
<!-- banner section begin -->
<section class="wrapper-section">
	<div class="container" >
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				/*if(has_post_thumbnail()){
					the_post_thumbnail('full');
				}
				*/
			?>
				<h2><?php the_title(); ?></h2>
			<?php
				the_content();

				endwhile; endif; ?>
			
	</div><!-- end of container fluid -->
</section><!-- end of wrapper section -->
<!-- end of banner section -->



<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


