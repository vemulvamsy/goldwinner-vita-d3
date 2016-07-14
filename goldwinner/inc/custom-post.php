<?php
/*
// Register Custom Post Type symptoms of deficiency
function symptoms_of_deficiency() {
	$labels = array(
		'name'                  => _x( 'Symptoms of Deficiency', 'Post Type General Name', 'goldwinner' ),
		'singular_name'         => _x( 'Symptom of Deficiency', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'             => __( 'Symptom of Deficiency', 'goldwinner' ),
		'name_admin_bar'        => __( 'Symptom of Deficiency', 'goldwinner' ),
		'archives'              => __( 'Symptom of Deficiency Archives', 'goldwinner' ),
		'parent_item_colon'     => __( 'Parent Symptom of Deficiency:', 'goldwinner' ),
		'all_items'             => __( 'All Symptoms of Deficiency', 'goldwinner' ),
		'add_new_item'          => __( 'Add New Symptoms of Deficiency', 'goldwinner' ),
		'add_new'               => __( 'Add New Symptoms of Deficiency', 'goldwinner' ),
		'new_item'              => __( 'New Symptom of Deficiency', 'goldwinner' ),
		'edit_item'             => __( 'Edit Symptom of Deficiency', 'goldwinner' ),
		'update_item'           => __( 'Update Symptom of Deficiency', 'goldwinner' ),
		'view_item'             => __( 'View Symptom of Deficiency', 'goldwinner' ),
		'search_items'          => __( 'Search Symptom of Deficiency', 'goldwinner' ),
		'not_found'             => __( 'Not found', 'goldwinner' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'goldwinner' ),
		'featured_image'        => __( 'Featured Image', 'goldwinner' ),
		'set_featured_image'    => __( 'Set featured image', 'goldwinner' ),
		'remove_featured_image' => __( 'Remove featured image', 'goldwinner' ),
		'use_featured_image'    => __( 'Use as featured image', 'goldwinner' ),
		'insert_into_item'      => __( 'Insert into Symptom of Deficiency', 'goldwinner' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Symptom of Deficiency', 'goldwinner' ),
		'items_list'            => __( 'Symptoms of Deficiency list', 'goldwinner' ),
		'items_list_navigation' => __( 'Symptoms of Deficiency list navigation', 'goldwinner' ),
		'filter_items_list'     => __( 'Filter Symptoms of Deficiency list', 'goldwinner' ),
	);
 $rewrite = array(
		'slug'                  => 'symptoms-of-deficiency',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Symptom of Deficiency', 'goldwinner' ),
		'description'           => __( 'List of Symptoms of Deficiency', 'goldwinner' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
  'rewrite'               => $rewrite,
  'capability_type'       => 'post',
	);
 register_post_type( 'symptoms_of_deficiency', $args );

  //test
add_action( 'init', 'symptomsofdeficiency' );
function symptomsofdeficiency() {
	register_taxonomy(
		'symptoms_of_deficiency',
		'symptoms_of_deficiency',
		array(
   'label'                 => __( 'Symptoms of Deficiency', 'goldwinner' ),
			'rewrite' => array( 'slug' => 'symptomsofdeficiency' ),
			'hierarchical' => true,
		)
	);
}
	// url re-wright for getting template file
		flush_rewrite_rules( true );
	//test


}
add_action( 'init', 'symptoms_of_deficiency', 0 );

*/




/*
* Creating a function to create our CPT (Symptoms of Defeciency)
*/

function vita_d3() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Vita D3', 'Post Type General Name', 'goldwinner' ),
		'singular_name'       => _x( 'Vita D3', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'           => __( 'Vita D3', 'goldwinner' ),
		'parent_item_colon'   => __( 'Parent Vita D3', 'goldwinner' ),
		'all_items'           => __( 'All Vita D3', 'goldwinner' ),
		'view_item'           => __( 'View Vita D3', 'goldwinner' ),
		'add_new_item'        => __( 'Add New Vita D3', 'goldwinner' ),
		'add_new'             => __( 'Add New', 'goldwinner' ),
		'edit_item'           => __( 'Edit Vita D3', 'goldwinner' ),
		'update_item'         => __( 'Update Vita D3', 'goldwinner' ),
		'search_items'        => __( 'Search Vita D3', 'goldwinner' ),
		'not_found'           => __( 'Not Found', 'goldwinner' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'goldwinner' ),
		'featured_image'        => __( 'Featured Image', 'goldwinner' ),
		'set_featured_image'    => __( 'Set featured image', 'goldwinner' ),
		'remove_featured_image' => __( 'Remove featured image', 'goldwinner' ),
		'use_featured_image'    => __( 'Use as featured image', 'goldwinner' ),
		'insert_into_item'      => __( 'Insert into Vita D3', 'goldwinner' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Vita D3', 'goldwinner' ),
		'items_list'            => __( 'Vita D3 list', 'goldwinner' ),
		'items_list_navigation' => __( 'Vita D3 list navigation', 'goldwinner' ),
		'filter_items_list'     => __( 'Filter Vita D3 list', 'goldwinner' ),
	);


	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Vita D3', 'goldwinner' ),
		'description'         => __( 'Vita D3 news and reviews', 'goldwinner' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor   title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Vita D3', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'vita_d3', 0 );



/*
* Creating a function to create our CPT (Causes of Deficiency)
*/

function goldwinner_vita_d3() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Goldwinner Vita D3', 'Post Type General Name', 'goldwinner' ),
		'singular_name'       => _x( 'Goldwinner Vita D3', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'           => __( 'Goldwinner Vita D3', 'goldwinner' ),
		'parent_item_colon'   => __( 'Parent Goldwinner Vita D3', 'goldwinner' ),
		'all_items'           => __( 'All Goldwinner Vita D3', 'goldwinner' ),
		'view_item'           => __( 'View Goldwinner Vita D3', 'goldwinner' ),
		'add_new_item'        => __( 'Add New Goldwinner Vita D3', 'goldwinner' ),
		'add_new'             => __( 'Add New', 'goldwinner' ),
		'edit_item'           => __( 'Edit Goldwinner Vita D3', 'goldwinner' ),
		'update_item'         => __( 'Update Goldwinner Vita D3', 'goldwinner' ),
		'search_items'        => __( 'Search Goldwinner Vita D3', 'goldwinner' ),
		'not_found'           => __( 'Not Found', 'goldwinner' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'goldwinner' ),
		'featured_image'        => __( 'Featured Image', 'goldwinner' ),
		'set_featured_image'    => __( 'Set featured image', 'goldwinner' ),
		'remove_featured_image' => __( 'Remove featured image', 'goldwinner' ),
		'use_featured_image'    => __( 'Use as featured image', 'goldwinner' ),
		'insert_into_item'      => __( 'Insert into Goldwinner Vita D3', 'goldwinner' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Goldwinner Vita D3', 'goldwinner' ),
		'items_list'            => __( 'Goldwinner Vita D3 list', 'goldwinner' ),
		'items_list_navigation' => __( 'Goldwinner Vita D3 list navigation', 'goldwinner' ),
		'filter_items_list'     => __( 'Filter Goldwinner Vita D3 list', 'goldwinner' ),
	);


	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Goldwinner Vita D3', 'goldwinner' ),
		'description'         => __( 'Goldwinner Vita D3 news and reviews', 'goldwinner' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor   title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Goldwinner Vita D3', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'goldwinner_vita_d3', 0 );



//slider
// Register Custom Post Type
function goldwinner_slider() {

	$labels = array(
		'name'                  => _x( 'Sliders', 'Post Type General Name', 'goldwinner' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'             => __( 'Slider', 'goldwinner' ),
		'name_admin_bar'        => __( 'Slider', 'goldwinner' ),
		'archives'              => __( 'Slider Archives', 'goldwinner' ),
		'parent_item_colon'     => __( 'Parent Slider:', 'goldwinner' ),
		'all_items'             => __( 'All Sliders', 'goldwinner' ),
		'add_new_item'          => __( 'Add New Slider', 'goldwinner' ),
		'add_new'               => __( 'Add New Slider', 'goldwinner' ),
		'new_item'              => __( 'New Hair Slider', 'goldwinner' ),
		'edit_item'             => __( 'Edit Hair Slider', 'goldwinner' ),
		'update_item'           => __( 'Update Slider', 'goldwinner' ),
		'view_item'             => __( 'View Slider', 'goldwinner' ),
		'search_items'          => __( 'Search Slider', 'goldwinner' ),
		'not_found'             => __( 'Not found', 'goldwinner' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'goldwinner' ),
		'featured_image'        => __( 'Featured Image', 'goldwinner' ),
		'set_featured_image'    => __( 'Set featured image', 'goldwinner' ),
		'remove_featured_image' => __( 'Remove featured image', 'goldwinner' ),
		'use_featured_image'    => __( 'Use as featured image', 'goldwinner' ),
		'insert_into_item'      => __( 'Insert into Slider', 'goldwinner' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'goldwinner' ),
		'items_list'            => __( 'Slider list', 'goldwinner' ),
		'items_list_navigation' => __( 'Slider list navigation', 'goldwinner' ),
		'filter_items_list'     => __( 'Filter Slider list', 'goldwinner' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'goldwinner' ),
		'description'           => __( 'Home page slider', 'goldwinner' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => false,
		'rewrite'               => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'home_slider', $args );

}
add_action( 'init', 'goldwinner_slider', 0 );

/*
// Register Custom Taxonomy
function goldwinner_producttype() {
//test
add_action( 'init', 'hair_producttype' );
function hair_producttype() {
register_taxonomy(
'type',
'product',
array(
	'label'                 => __( 'Type', 'goldwinner' ),
	'hierarchical' => true,
)
);
}
}
add_action( 'init', 'goldwinner_producttype', 0 );
*/

/*
* Creating a function to create our CPT (FAQS)
*/

function custom_post_faqs() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'FAQs', 'Post Type General Name', 'goldwinner' ),
		'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'           => __( 'FAQs', 'goldwinner' ),
		'parent_item_colon'   => __( 'Parent FAQ', 'goldwinner' ),
		'all_items'           => __( 'All FAQs', 'goldwinner' ),
		'view_item'           => __( 'View FAQ', 'goldwinner' ),
		'add_new_item'        => __( 'Add New FAQ', 'goldwinner' ),
		'add_new'             => __( 'Add New', 'goldwinner' ),
		'edit_item'           => __( 'Edit FAQ', 'goldwinner' ),
		'update_item'         => __( 'Update FAQ', 'goldwinner' ),
		'search_items'        => __( 'Search FAQ', 'goldwinner' ),
		'not_found'           => __( 'Not Found', 'goldwinner' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'goldwinner' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'FAQs', 'goldwinner' ),
		'description'         => __( 'FAQs news and reviews', 'goldwinner' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'FAQs', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_faqs', 0 );


/*
* Creating a function to create our CPT (FAQS)
*/

function custom_post_homepage_data() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'homepagedata', 'Post Type General Name', 'goldwinner' ),
		'singular_name'       => _x( 'homepagedata', 'Post Type Singular Name', 'goldwinner' ),
		'menu_name'           => __( 'homepagedata', 'goldwinner' ),
		'parent_item_colon'   => __( 'Parent homepagedata', 'goldwinner' ),
		'all_items'           => __( 'All homepagedata', 'goldwinner' ),
		'view_item'           => __( 'View homepagedata', 'goldwinner' ),
		'add_new_item'        => __( 'Add New homepagedata', 'goldwinner' ),
		'add_new'             => __( 'Add New', 'goldwinner' ),
		'edit_item'           => __( 'Edit homepagedata', 'goldwinner' ),
		'update_item'         => __( 'Update homepagedata', 'goldwinner' ),
		'search_items'        => __( 'Search homepagedata', 'goldwinner' ),
		'not_found'           => __( 'Not Found', 'goldwinner' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'goldwinner' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'homepagedata', 'goldwinner' ),
		'description'         => __( 'homepagedata news and reviews', 'goldwinner' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'homepagedata', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_homepage_data', 0 );

 ?>
