<?php get_header(); ?>
<!-- banner section begin -->
<section class="wrapper-section">
	<div class="container-fluid" >
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				/*if(has_post_thumbnail()){
					the_post_thumbnail('full');
				}
				*/
				the_content();

				endwhile; else : ?>

				<p><?php _e( 'Sorry, no results found.'); ?></p>

			<?php endif; ?>
			
	</div><!-- end of container fluid -->
</section><!-- end of wrapper section -->

<section id="knowmore-page-kaleesuwari">
	<div class="container"> 
		<div class="top-margin-50 bottom-margin-50">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
					
							<?php
								$args = array( 'post_type' => 'Goldwinner Vita D3' );
								$custom_query = new WP_Query( $args ); 
								
								if ( $custom_query->have_posts() ) : 
									
									while ( $custom_query->have_posts() ) : $custom_query->the_post();
							?>			
										<h2><?php the_title(); ?></h2>
										<p><?php the_content(); ?></p>
							<?php 
									endwhile;
								endif; 
							?>	
						</div><!-- end of accordion group -->	
					</div><!-- end of demo_wrap -->
				</div><!-- end of cols -->
			</div><!-- end of row -->
		</div><!-- end of margins -->
	</div><!-- end of container -->
</section>

<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


