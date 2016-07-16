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

<section id="vita-d3-section">
	<div class="container"> 
		<div class="margin-top-80 margin-bottom-40 margin-sm-top-30">
			<div class="content-block">
				<?php
					$args = array( 'post_type' => 'Vita D3' );
					$custom_query = new WP_Query( $args ); 
					
					if ( $custom_query->have_posts() ) : 
					$count=0;	
						echo '<div class="row">';
						while ( $custom_query->have_posts() ) : $custom_query->the_post();
				?>
							<?php if($count==0 || $count==1){ $count++; ?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-sm-top-40">
								<?php the_content(); ?>
							</div><!-- end of cols -->
							<?php }else{ ?>
							</div><!-- end of row -->
							<div class="row">
								<div class="margin-top-60 margin-sm-top-40">
									<?php the_content(); ?>
								</div>
							</div><!-- end of row-->
							<?php } ?>
				<?php		
						endwhile;
					endif; 
				?>	
			</div><!-- end of content block -->	
		</div><!-- end of margins -->
	</div><!-- end of container -->
</section><!-- end of vita d3 section -->

<section id="knowmore-section">
	<div class="container">
		<div class="margin-top-40 margin-bottom-20">	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="<?php echo get_template_directory_uri(); ?>/image/vitad3-bottom-img.png" alt="goldwinner vita d3" title="goldwinner vita d3" id="gw-vita-d3" />
				</div><!-- end of cols -->
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php
						$args=array(
						  'name' => 'gold-winner-vita-d3',
						  'post_type' => 'page',
						  'post_status' => 'publish'
						);
						$goldvitad3 = get_posts($args);
						if( $goldvitad3 ) {
						?>
						<div class="margin-top-30 margin-bottom-20 " ><a href="<?php the_permalink($goldvitad3[0]->ID); ?>" id="<?php echo $goldvitad3[0]->ID; ?>" class="know-more-button-vitad3">Know More</a></div>
						<?php
						}
					?>
				</div><!-- end of cols -->
			</div><!-- end of row -->
		</div><!-- end of margins -->
	</div><!-- end of container -->
</section><!-- end of knowmore-section -->
<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>