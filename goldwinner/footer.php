<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Wordpress
 * @subpackage Base
 * @since  Base v1.0
 */

?>



</div><!-- end of body block -->

<!-- Footer -->
<footer>
	<div class="container">
		<div class="margin-top-30 margin-bottom-20">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div id="footer-data" >
						<div id="social-links" align="center">
							<a href="#" id="fb"><img src="<?php echo get_template_directory_uri(); ?>/image/fb.png"  class="social" alt="social" title="social" /></a>
							<a href="#" id="tw"><img src="<?php echo get_template_directory_uri(); ?>/image/twitter.png"  class="social" alt="social" title="social" /></a>
							<a href="#" id="yt"><img src="<?php echo get_template_directory_uri(); ?>/image/yt.png"  class="social" alt="social" title="social" /></a>
						</div>
						<p class="small center-small text-center"> Kaleesuwari Refineries Pvt. Ltd. &copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
						<p class=" small text-center text-bold center-small">Developed by <a href="http://digitallyinspiredmedia.com/" target="_blank">Digitally Inspired Media</a></p>
					</div>
				</div>
			</div><!-- end of row-->
		</div><!-- end of margins -->
	</div><!-- end of container -->
</footer>
<!-- Footer -->
<script type="text/javascript">
jQuery(function($){
    $('.matchheight').matchHeight();
    $('.secondfs').matchHeight();
    $('.secondary-mini-wrapper').matchHeight();
});
</script>
<!-- set options before less.js script -->
<script>
less = {
env: "development",
async: false,
fileAsync: false,
poll: 1000,
functions: {},
dumpLineNumbers: "comments",
relativeUrls: false,
rootpath: ":/a.com/"
};
</script>
<!-- this is code is for header and menu resize -->
<script>
function init() {
window.addEventListener('scroll', function(e){
	var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = (window.innerHeight )/4,
		header = document.querySelector("header");
	if (distanceY > shrinkOn) {
		classie.add(header,"smaller");
	} else {
		if (classie.has(header,"smaller")) {
			classie.remove(header,"smaller");
		}
	}
});
}
window.onload = init();

//-------------------------------------
</script>

<?php wp_footer(); ?>
</body>
</html>
