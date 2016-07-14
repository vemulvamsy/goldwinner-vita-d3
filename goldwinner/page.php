<?php get_header(); ?>

<section class="wrapper-section ">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 margin-top-100 margin-bottom-100">
				<h1 class="heading-text text-center">Survey</h1>
				<?php if(have_posts()): while(have_posts()): the_post();?>
					<div class="row posts-block">
						<?php
						if(has_post_thumbnail()){
						?>
							<div class="col-md-3 post-thumb"> 
								<?php if(has_post_thumbnail()){
											the_post_thumbnail();
									}	
								?>
							</div>
							<div class="col-md-9">
								<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php the_content(); ?></p>
							</div>
						<?php } else{ ?>
							<div class="col-md-12">
								<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php the_content(); ?></p>
							</div>
						<?php } ?>
					</div>
					
				<?php endwhile; else: ?>
					<p> no posts found... </p>
				<?php endif; ?>
			</div><!-- end of cols -->
		</div><!-- end of row -->
	</div><!-- end of container -->
</section><!-- end of section -->

<?php get_footer(); ?>