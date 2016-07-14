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

				endwhile; endif; ?>
			
	</div><!-- end of container fluid -->
</section><!-- end of wrapper section -->
<!-- end of banner section -->

<!-- FAQs Block -->
<section id="faqs-section">
	<div class="container"> 
		<div class="margin-top-50 margin-bottom-50 ">
			<div class="row">
				<h1 class="side-heading-big text-center color-black">FAQ's</h1>
				<div class="red-under-line-center"></div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
					<div id="demo_wrap">
            			<div class="accordion1-group" data-behavior="accordion">
							<?php
								$args = array( 'post_type' => 'FAQs' );
								$custom_query = new WP_Query( $args ); 
								
								if ( $custom_query->have_posts() ) : 
									$count=1;
									while ( $custom_query->have_posts() ) : $custom_query->the_post();
							?>			
										<?php if($count==1){ $count++; ?>
											<p class="accordion1-header default-open"><?php the_title(); ?></p>
											<div class="accordion1-body"><?php the_content(); ?></div>
										<?php }else{ $count++; ?>
											<p class="accordion1-header"><?php the_title(); ?></p>
											<div class="accordion1-body"><?php the_content(); ?></div>
										<?php } ?>
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
</section><!-- end of faqs-section -->

<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


