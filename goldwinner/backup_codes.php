 <?php
$slug_to_get_vitad3 = 'vita-d3';
$args=array(
  'name' => $slug_to_get_vitad3,
  'post_type' => 'page',
  'post_status' => 'publish',
  'showposts' => 1,
  'caller_get_posts'=> 1
);
$vitad3 = get_posts($args);
if( $vitad3 ) {
?>
<a href="<?php the_permalink($vitad3[0]->ID); ?>" >Vita D3</a>
<?php
}
else{
	echo "not found..";
}
?>
