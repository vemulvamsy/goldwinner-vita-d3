<?php get_header(); ?>
<!-- banner section begin -->
<section class="wrapper-section">
	<div class="container-fluid" >
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

<?php
if(isset($_GET['scoreval'])){
?>
<div id="gauge3" class="gauge" data-title="Your Score" data-value="50" data-counter="true"></div>
<?php
}
?>

<div id="gauge3" class="gauge" data-title="Your Score" data-value="50" data-counter="true"></div>



<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


