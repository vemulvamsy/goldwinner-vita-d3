<?php get_header(); ?>
<?php ob_start(); ?>
<!-- banner section begin -->
<!-- banner section begin -->
<section class="wrapper-section">
	<div class="container-fluid" >
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				/*if(has_post_thumbnail()){
					the_post_thumbnail('full');
				}
				*/

				the_content();

				endwhile;  endif; ?>
			
	</div><!-- end of container fluid -->
</section><!-- end of wrapper section -->
<!-- end of banner section -->

<section id="quiz-section">
	<div class="container"> 
		<div class="margin-bottom-50 ">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
					<div class="quiz-block">

						<?php

						if(isset($_SESS['extuser'])) // this code is for existing user $_COOKIE['first_name']!=''
						{
							
								$args = array( 'post_type' => 'Quiz Error Message' );
								$custom_query = new WP_Query( $args ); 
								
								if ( $custom_query->have_posts() ) : 
									$count=1;
									while ( $custom_query->have_posts() ) : $custom_query->the_post();
										 the_content(); 
									endwhile;
								endif; 
						}
						else{

							$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'order', 'sort_order' => 'desc' ) );
							foreach( $mypages as $page ) {		
								$content = $page->post_content;
								if ( ! $content ) // Check for empty page
									continue;
								$content = apply_filters( 'the_content', $content );
							 	echo $content; 
							}	
						}
						

						//unset($_SESSION['extuser']);
/*
						if(isset($_GET[err]))
						{
						    echo "<h2 class='color-black'>".$_GET[err]."</h2>";
						    echo "<h2 class='color-black'>session is working</h2>";
						}
*/


						?>						
					</div><!-- end of quiz block -->
				</div><!-- end of cols -->
			</div><!-- end of row -->
		</div><!-- end of margins -->
	</div><!-- end of container -->
</section><!-- end of quiz-section -->

<?php ob_flush(); ?>
<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


