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

<section id="goldwinner-vita-d3-section">
	<div class="container"> 
		<div class="margin-top-60 margin-bottom-70">
			
			<div class="content-block">
				<?php
					$args = array( 'post_type' => 'Goldwinner Vita D3' );
					$custom_query = new WP_Query( $args ); 
					
					if ( $custom_query->have_posts() ) : 
					$count=0;	
						while ( $custom_query->have_posts() ) : $custom_query->the_post();
				?>
						<div class="row bottom-line margin-top-40 margin-bottom-40">
				<?php		
							if($count % 2 ==0){ 
				?>				<h1 class="side-heading color-red text-left side-heading-sm"><?php the_title(); ?></h1>
								<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
									<div class="disp-left"><?php the_content(); ?></div>
								</div>
								<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
									<?php if($count==0){ ?> <!-- this is for existing scenario -->
										<div class="post-thumbnail-image round">
											<?php 
												if(has_post_thumbnail()){
													the_post_thumbnail();
												}	
											?>
										</div><!-- end of post thumnail -->
									<?php }else{ ?> <!-- this is for gold winner vita d3 india's vegan -->
										<div class="post-thumbnail-image">
											<?php 
												if(has_post_thumbnail()){
													the_post_thumbnail();
												}	
											?>
										</div><!-- end of post thumnail -->
									<?php } ?>
								</div>
				<?php 
								$count++;
							}
							else{ $count++; // this is for what is fortification
				?>
								<h1 class="side-heading color-red text-right side-heading-sm"><?php the_title(); ?></h1>
								<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
									<div class="post-thumbnail-image round">
										<?php 
											if(has_post_thumbnail()){
												the_post_thumbnail();
											}	
										?>
									</div><!-- end of post thumnail -->
								</div>
								<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
									
									<div class="disp-right"><?php the_content(); ?></div>
								</div>
				<?php				
							}
				?>			
						</div><!-- end of inner row -->
				<?php
						endwhile;
					endif; 
				?>	
			</div><!-- end of content-block -->

		</div><!-- end of margins -->
	</div><!-- end of container -->
</section>

<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


