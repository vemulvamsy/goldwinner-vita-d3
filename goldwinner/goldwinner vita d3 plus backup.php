<?php get_header(); ?>
<!-- banner section begin -->
<section class="wrapper-section">
	<div class="container-fluid" >
		<div class="banner">
			<img src="<?php echo get_template_directory_uri(); ?>/image/banner1.jpg" alt="" title="" />
		</div>
	</div><!-- end of container fluid -->
</section><!-- end of wrapper section -->
<!-- end of banner section -->

<!-- ====================================
here Symptoms of deficiency code start
======================================-->	
<!-- content section begin-->
<section class="wrapper-section ">
	<div class="container">
	<div class="margin-top-100 margin-bottom-30">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="heading-text text-center margin-bottom-30">Symptoms of Deficiency</h1>
			</div><!-- end of cols -->
		</div><!-- end of row -->
	
		<?php 
		$custom_args = array(
		'post_type' => 'Symptoms of Deficiency'
		);

		$custom_query = new WP_Query( $custom_args ); 

		if ( $custom_query->have_posts() ) : 
		$count=0;
			while ( $custom_query->have_posts() ) : $custom_query->the_post();
		?>
		<?php 
		if($count%2==0){
		?>
				<div class="row artcle">
					<h2 class="side-heading"><?php the_title(); ?></h2>
						<div class="under-line float-left" style="margin-top:10px;"></div>
						<br style="clear:both;" />
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 cols-block" >
						<div class="content"><?php the_content(); ?></div>
					</div><!-- end of cols -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 cols-block" >
						<div class="image-block float-right" >
							<?php 
								if(has_post_thumbnail()){
									the_post_thumbnail();
								}	
							?>
							
						</div>
						<br style="clear:both;" />
					</div><!-- end of cols -->
				</div><!-- end of row -->
		<?php 
		}else{
		?>
				<div class="row artcle">
					<h2 class="side-heading text-right"><?php the_title(); ?></h2>
						<div class="under-line float-right" style="margin-top:10px;"></div>
						<br style="clear:both;" />
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 cols-block" >
						<div class="image-block float-left" >
							<?php 
								if(has_post_thumbnail()){
									the_post_thumbnail();
								}	
							?>
							
						</div>
						<br style="clear:both;" />
					</div><!-- end of cols -->
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 cols-block" >
						<div class="content text-right"><?php the_content(); ?></div>
					</div><!-- end of cols -->
				</div><!-- end of row -->

		<?php	
				} 
				$count++;
			endwhile;
		else:  
		?>
			<p class="no-posts-found"><?php echo( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php 
		endif; 
		?>	
	</div><!-- end of container -->
</section><!-- end of section -->
<!-- ====================================
here Symptooms of deficiency code end 
======================================-->

<!-- ====================================
here Causes of deficiency code start 
======================================-->
<section class="wrapper-section ">
	<div class="container">
	<div class="margin-top-50 margin-bottom-30">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="heading-text text-center margin-bottom-20">Causes of Deficiency</h1>
			</div><!-- end of cols -->
		</div><!-- end of row -->
	
		<div class="row">
			<div class="margin-top-20 overall-block">
				<?php 
				$custom_args = array(
				'post_type' => 'Causes of Deficiency'
				);

				$custom_query = new WP_Query( $custom_args ); 

				if ( $custom_query->have_posts() ) : 
					while ( $custom_query->have_posts() ) : $custom_query->the_post();
				?>
				

					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
						<div class="vertical-blocks vertical-white vblock-3 ">
							<div class="center-top-image" >
								<?php 
									if(has_post_thumbnail()){
										the_post_thumbnail();
									}	
								?>
							</div><!-- end of image block -->
							<div class="vertical-text-block">
								<h2><?php the_title(); ?></h2>
								<div class="content"><?php the_content(); ?></div>
							</div><!-- end of vertical text-block -->
						</div><!-- end of vertical block -->
					</div><!-- end of cols -->
				<?php
					endwhile;
				else:  
				?>
					<p class="no-posts-found"><?php echo( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php 
				endif; 
				?>
			</div><!-- end of margins -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section><!-- end of section -->
<!-- ====================================
here Causes of deficiency code end 
======================================-->

<!-- ====================================
here Remedies code start 
======================================-->
<section class="wrapper-section ">
	<div class="container">
	<div class="margin-top-50 margin-bottom-100">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="heading-text text-center margin-bottom-30">Remedies</h1>
			</div><!-- end of cols -->
		</div><!-- end of row -->
	
		<?php 
		$custom_args = array(
		'post_type' => 'Remedies'
		);

		$custom_query = new WP_Query( $custom_args ); 

		if ( $custom_query->have_posts() ) : 
		$count=0;
			while ( $custom_query->have_posts() ) : $custom_query->the_post();
		?>
		<?php 
		if($count%2==0){
		?>
				<div class="row artcle">
					<h2 class="side-heading"><?php the_title(); ?></h2>
						<div class="under-line float-left" style="margin-top:10px;"></div>
						<br style="clear:both;" />
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 cols-block" >
						<div class="content"><?php the_content(); ?></div>
					</div><!-- end of cols -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 cols-block" >
						<div class="image-block float-right" >
							<?php 
								if(has_post_thumbnail()){
									the_post_thumbnail();
								}	
							?>
							
						</div>
						<br style="clear:both;" />
					</div><!-- end of cols -->
				</div><!-- end of row -->
		<?php 
		}else{
		?>
				<div class="row artcle">
					<h2 class="side-heading text-right"><?php the_title(); ?></h2>
						<div class="under-line float-right" style="margin-top:10px;"></div>
						<br style="clear:both;" />
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 cols-block" >
						<div class="image-block float-left" >
							<?php 
								if(has_post_thumbnail()){
									the_post_thumbnail();
								}	
							?>
							
						</div>
						<br style="clear:both;" />
					</div><!-- end of cols -->
					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 cols-block" >
						<div class="content text-right"><?php the_content(); ?></div>
					</div><!-- end of cols -->
				</div><!-- end of row -->

		<?php	
				} 
				$count++;
			endwhile;
		else:  
		?>
			<p class="no-posts-found"><?php echo( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php 
		endif; 
		?>	
	</div><!-- end of container -->
</section><!-- end of section -->
<!-- ====================================
here Remedies code end 
======================================-->

<?php echo get_page_template_slug( $post->ID ); ?>
<?php get_footer(); ?>


