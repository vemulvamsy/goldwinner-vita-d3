<?php

//short  code
function productlink( $atts, $content = null ) {
   return '<div class="product-buy"><a class="btn-6" target="_blank" href="'.do_shortcode($content).'"> Buy Now <span> </span> </a></div>';
}
add_shortcode('productlink', 'productlink');


function productdesc( $atts, $content = null ) {
   return '<div class="hairarticle-des">'.do_shortcode($content).'</div>';
}
add_shortcode('productdesc', 'productdesc');


function producttitle( $atts, $content = null ) {
   return '<p class="hairarticle-producttitle">'.do_shortcode($content).'</p>';
}
add_shortcode('producttitle', 'producttitle');


function sliderimg( $atts, $content = null ) {
   return '<div class="slider-img">'.do_shortcode($content).'</div>';
}
add_shortcode('sliderimg', 'sliderimg');

function paracontent( $atts, $content = null ) {
   return '<p class="content align-left color-black">'.do_shortcode($content).'</p>';
}
add_shortcode('paracontent', 'paracontent');

function sources_icon_bar_in( $atts, $content = null ) {
   return '<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"><div class="sources-icon-bar-in">'.do_shortcode($content).'</div></div>';
}
add_shortcode('sources_icon_bar_in', 'sources_icon_bar_in');

?>
