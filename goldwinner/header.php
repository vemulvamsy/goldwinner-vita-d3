<?php
session_start(); 
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 *
 * @package Wordpress
 * @subpackage Base
 * @since  Base v1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/image/icon.png" type="image/x-icon">
	<meta http-equiv="content-type" content="text/html;" charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content=" <?php $user_info = get_userdata(1); echo '' . $user_info->user_login; ?> "/>
	<meta name="contact" content=" <?php $user_info = get_userdata(1); echo '' . $user_info->user_email; ?> "/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	 <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	  <?php endif; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
<!-- start of goolge analitics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81159647-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end of goolge analitics code -->	
	
<?php wp_head(); ?>
</head>

<body <?php body_class(( array( "pushmenu-push") )); ?>>

<?php if (is_page("faqs") || is_page("faq-s")) { ?>
	<header class="header header-style" >
<?php } else { ?>
	<header class="header">
<?php } ?>
	<div class="container" id="menu-container">
		<div id="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/logo.png"
					class="img-reponsive header-image"
					alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) );?>"  title="Logo"
				/>
			</a>
		</div>
		<nav class="main-nav" >
			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
		</nav>
		<div class="i-nav" onclick="myFunction(this)">
		  <div class="bar1"></div>
		  <div class="bar2"></div>
		  <div class="bar3"></div>
		</div><!-- end of i-nav -->
	</div><!-- end of container -->
	
</header>
<div class="body-block">
<?php
$args=array(
  'name' => 'quiz',
  'post_type' => 'page',
  'post_status' => 'publish'
);
$quiz = get_posts($args);
if( $quiz and !is_page("quiz")) {
?>
<a href="<?php the_permalink($quiz[0]->ID); ?>" id="float-but">Check Your Vita D3 IQ here </a>
<?php } ?>