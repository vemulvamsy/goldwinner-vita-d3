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
<!-- end of banner section -->

<section class="home-body-section" id="">
	<div class="container">
		<div class="row"> 
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
				<div class="home-left-block">
					<?php
						$args = array( 'post_type' => 'homepagedata' );
						$custom_query = new WP_Query( $args ); 
						
						if ( $custom_query->have_posts() ) : 
							$count=1;
	
							while ( $custom_query->have_posts() ) : $custom_query->the_post();
						?>			
								<?php if($count==1){ $count++; ?>
									<h2 class="side-heading color-red margin-top-10 margin-bottom-10"><?php the_title(); ?></h2>
									<?php the_content(); ?>
									<?php
										$args=array(
										  'name' => 'vitamin-d',
										  'post_type' => 'page',
										  'post_status' => 'publish'
										);
										$vitad3 = get_posts($args);
										if( $vitad3 ) {
										?>
										<div class="margin-top-30 margin-bottom-20"><a href="<?php the_permalink($vitad3[0]->ID); ?>" id="<?php echo $vitad3[0]->ID; ?>" class="know-more-button">Know More</a></div>
										<?php
										}
									?>
								<?php }else{ $count++; ?>
									<h1 class="side-heading color-red margin-top-70 margin-bottom-10"><?php the_title(); ?></h1>
									<?php the_content(); ?>
									<?php
										$args=array(
										  'name' => 'gold-winner-vita-d3',
										  'post_type' => 'page',
										  'post_status' => 'publish'
										);
										$goldvitad3 = get_posts($args);
										if( $goldvitad3 ) {
										?>
										<div class="margin-top-30 margin-bottom-20"><a href="<?php the_permalink($goldvitad3[0]->ID); ?>" id="<?php echo $goldvitad3[0]->ID; ?>" class="know-more-button">Know More</a></div>
										<?php
										}
									?>
								<?php } ?>
					<?php 
							endwhile;

						endif; 
					?>	
				</div><!-- end of home-left-block -->
			</div><!-- end of cols -->
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
				<div class="home-right-block">
					<div >
						<div class="home-right-background" >
							<div class="home-right-content" >
								<h1 id="do-you-know">Do you know?</h1>
								<h1 id="prec-80">80<span>%</span></h1>
								<h2 id="indian-lack">of Indians lack vitamin D</h2>

								<?php
									$args=array(
									  'name' => 'quiz',
									  'post_type' => 'page',
									  'post_status' => 'publish'
									);
									$quiz = get_posts($args);
									if( $quiz ) {
									?>
									<div class="margin-top-80 margin-sm-top-80"><a href="<?php the_permalink($quiz[0]->ID); ?>" id="home-quiz">Check Your Vita D3 IQ here </a></div>
									<?php
									}
								?>
							</div><!-- end of home-right-content -->
						</div><!-- end of home-right-background -->
					</div>
				</div><!-- end of home-right-block -->
			</div><!-- end of cols -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section><!-- end of home-body-section -->

<section id="tvc-video-section">
	<div class="container-fluid">
		<div class='embed-container'><iframe width="100%" height="auto" src="https://www.youtube-nocookie.com/embed/sr9NXNtT3BY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div> 
		<!--<div class="video-container"><iframe width="100%" height="auto" src="https://www.youtube-nocookie.com/embed/U7f6gvTxwIU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div> -->
	</div><!-- end of container fluid -->
</section><!-- end of tvc-video-section -->

 

<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


