<?php
/******************************************************************/
// Define Constants
/******************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');
/******************************************************************/
// Add Menus 
/******************************************************************/
function register_my_menus() {
	register_nav_menus(array(
		'main-menu' => 'Main Menu' ,
		'category-menu' =>'Category Menu'
		));
}

add_action('init', 'register_my_menus');

//Add Support For Posts Thumbnails

if(function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails', array('post', 'portfolio'));
	set_post_thumbnail_size(362, 209); 
}

/******************************************************************/
// Add HTML5 Shim
/******************************************************************/
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');

/******************************************************************/
// Add Custom Posts for Portfolio Projects 
/******************************************************************/

function portfolio_register() {

	$labels = array(
		'name' => _x('Portfolio Showcase', 'post type general name'),
		'singular_name' => _x('Portfolio Item', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search Portfolio'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''	
		);

	$args = array(
		'labels' => $labels, 
		'descritption' => 'Add new portfolio items for our portfolio page',
		'public' =>  true, 
		'query_var' => true,
		'capability_type' => 'post',  
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'has_archive' => true, 
		);
		register_post_type( 'portfolio', $args );	

}
add_action( 'init', 'portfolio_register' );

/******************************************************************/
// Adding Custom Taxonomies for Portfolio page
/******************************************************************/

add_action( 'init', 'create_portfolio_tax', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_tax() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Project Types', 'taxonomy general name' ),
		'singular_name'     => _x( 'Project Type', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Projects' ),
		'all_items'         => __( 'All Portfolio Projects' ),
		'parent_item'       => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item'         => __( 'Edit Project Type' ),
		'update_item'       => __( 'Update Project Type' ),
		'add_new_item'      => __( 'Add New Project Type' ),
		'new_item_name'     => __( 'New Project Type Name' ),
		'menu_name'         => __( 'Project Type' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'project_type' ),
	);

	register_taxonomy( 'project_type', 'portfolio', $args );



/******************************************************************/
//Add Meta Boxes to the Portfolio Projects Post Page
/******************************************************************/

add_action('add_meta_boxes', 'custom_add_meta_box');

function custom_add_meta_box() {
	add_meta_box(
		'portfolio details', 
		'Portfolio Entry Details', 
		'custom_display_meta_box', //callback
		'portfolio',
		'normal'
		);
}

function custom_display_meta_box($post) {
	// Displaying fields and populating them from db 
	$portfolio_description = get_post_meta($post -> ID, 'portfolio_description', true);
	$portfolio_link = get_post_meta($post -> ID, 'portfolio_link', true);
	$portfolio_quote = get_post_meta($post -> ID, 'portfolio_quote', true);
	$portfolio_quote_author = get_post_meta($post -> ID, 'portfolio_quote_author', true);
	


	// Security Check 
	wp_nonce_field('portfolio_meta_nonce', 'portfolio_nonce');

	// Display Fields
	?>

	<p>
		<label for="portfolio_description">Project Description</label> <br />
		<textarea class="widefat" name="portfolio_description" id="portfolio_description" cols="30" rows="10"><?php echo $portfolio_description; ?></textarea>
	</p>
	<p>
		<label for='portfolio_link'>Project Link</label> <br />
		<input type="text" name="portfolio_link" id="portfolio_link" value="<?php echo $portfolio_link; ?>">
	</p>
	<p>
		<label for="portfolio_quote">Testimonial</label> <br />
		<textarea  class='widefat' type="text" name="portfolio_quote" id="portfolio_quote"  cols="30" rows="10"> <?php echo $portfolio_quote; ?></textarea>
	</p>
	<p>
		<label for="portfolio_quote_author">Testimonial Author</label> <br />
	<input type="text" name="portfolio_quote_author" id="portfolio_quote_author" value="<?php echo $portfolio_quote_author; ?>">	
	</p>

	<?php
}

add_action('save_post', 'custom_save_portfolio_details');

function custom_save_portfolio_details($post_id) {
	// autosave, return
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

	//If nonce is invalid
	if(!isset($_POST['portfolio_nonce']) || !wp_verify_nonce($_POST['portfolio_nonce'], 'portfolio_meta_nonce')) return;

	// Save/Update Data
	if(isset($_POST['portfolio_description']) && $_POST['portfolio_link'] != '') {
		update_post_meta($post_id, 'portfolio_link', esc_url($_POST['portfolio_link']));
	}
	if(isset($_POST['portfolio_quote']) && $_POST['portfolio_quote'] != '') {
		update_post_meta($post_id, 'portfolio_quote', esc_html($_POST['portfolio_quote']));
	}
	if(isset($_POST['portfolio_quote_author']) && $_POST['portfolio_description'] != '') {
		update_post_meta($post_id, 'portfolio_quote_author', esc_html($_POST['portfolio_quote_author']));
	}
}}
