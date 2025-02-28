<?php

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Mandarinhotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mandarinhotel
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mandarinhotel_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mandarinhotel, use a find and replace
		* to change 'mandarinhotel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mandarinhotel', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	function register_my_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu' ),
				'footer-menu' => __( 'Footer Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );
	

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mandarinhotel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'mandarinhotel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mandarinhotel_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mandarinhotel_content_width', 640);
}
add_action('after_setup_theme', 'mandarinhotel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mandarinhotel_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mandarinhotel'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mandarinhotel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mandarinhotel_widgets_init');

/**
 * Enqueue styles.
 */

function enqueue_custom_styles()
{

	wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');

	if (is_front_page()) {
		wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
		wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.1', 'all');
	}

	if (is_page(26)) {
		wp_enqueue_style('hebergement-style', get_template_directory_uri() . '/assets/css/hebergement.css', array(), '1.1', 'all');
	}

	if (is_page(51)) {
		wp_enqueue_style('nightlounge-style', get_template_directory_uri() . '/assets/css/nightloung.css', array(), '1.1', 'all');
	}

	if (is_page(55)) {
		wp_enqueue_style('nightlounge-style', get_template_directory_uri() . '/assets/css/conciergie.css', array(), '1.1', 'all');
	}

	if (is_page(58)) {
		wp_enqueue_style('organisation-style', get_template_directory_uri() . '/assets/css/organisation.css', array(), '1.1', 'all');
	}

	if (is_page(71)) {
		wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.1', 'all');
		wp_enqueue_style('rooms-style', get_template_directory_uri() . '/assets/css/rooms.css', array(), '1.1', 'all');
	}

	if (is_page(95)) {
		wp_enqueue_style('offer-style', get_template_directory_uri() . '/assets/css/offers.css', array(), '1.1', 'all');
	}

	if (get_post_type() === 'offers'){
		wp_enqueue_style('details-style', get_template_directory_uri() . '/assets/css/detailsoffers.css', array(), '1.1', 'all');
	}

	if (is_page(107)) {
		wp_enqueue_style('job-style', get_template_directory_uri() . '/assets/css/jobs.css', array(), '1.1', 'all');
	}

	if (is_page(110)) {
		wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.1', 'all');
	}

	if (is_page(114)) {
		wp_enqueue_style('turqouise-style', get_template_directory_uri() . '/assets/css/turquoise.css', array(), '1.1', 'all');
	}

	if (is_page(140)) {
		wp_enqueue_style('restaurant-style', get_template_directory_uri() . '/assets/css/restaurant.css', array(), '1.1', 'all');
	}

	

	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');

}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


/**
 * Enqueue script
 */
function enqueue_custom_scripts()
{

	wp_enqueue_script('bundle-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', 'all');
	wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array(), '5.3.3', 'all');
	wp_enqueue_script('popper-script', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', 'all');
	wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', 'all');

	if (is_front_page()) {
		wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.1', 'all');
		wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/home.js', array(), '1.1', 'all');
	}

	if (is_page(71)) {
		wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.1', 'all');
		wp_enqueue_script('room-script', get_template_directory_uri() . '/assets/js/rooms.js', array(), '1.2', 'all');
	}	
	if (is_page(107)) {
        wp_enqueue_script('swal-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), '1.1', 'all');
        wp_enqueue_script( 'job-script',get_template_directory_uri() . '/assets/js/job.js', array(), '1.2', 'all');
		wp_localize_script('job-script', 'ajax_object', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'security' => wp_create_nonce('job_form_nonce') // Add nonce
		));
	}
    if (is_page(110)) {
        wp_enqueue_script('swal-alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), '1.1', 'all');
        wp_enqueue_script( 'contact-script',get_template_directory_uri() . '/assets/js/contact.js', array(), '1.2', 'all');
		wp_localize_script('contact-script', 'ajax_object', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'security' => wp_create_nonce('contact_form_nonce') // Add nonce
		));
	}
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

 
/*
* Creating a function to create our CPT
*/
  
function offers_post_type() {
  
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Offers', 'Post Type General Name', 'twentytwentyone' ),
			'singular_name'       => _x( 'Offer', 'Post Type Singular Name', 'twentytwentyone' ),
			'menu_name'           => __( 'Offers', 'twentytwentyone' ),
			'parent_item_colon'   => __( 'Parent Offer', 'twentytwentyone' ),
			'all_items'           => __( 'All Offers', 'twentytwentyone' ),
			'view_item'           => __( 'View Offer', 'twentytwentyone' ),
			'add_new_item'        => __( 'Add New Offer', 'twentytwentyone' ),
			'add_new'             => __( 'Add New', 'twentytwentyone' ),
			'edit_item'           => __( 'Edit Offer', 'twentytwentyone' ),
			'update_item'         => __( 'Update Offer', 'twentytwentyone' ),
			'search_items'        => __( 'Search Offer', 'twentytwentyone' ),
			'not_found'           => __( 'Not Found', 'twentytwentyone' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
		);
		  
	// Set other options for Custom Post Type
		  
		$args = array(
			'label'               => __( 'offers', 'twentytwentyone' ),
			'description'         => __( 'Offer news and reviews', 'twentytwentyone' ),
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
			'capability_type'     => 'post',
			'show_in_rest' => true,
	  
		);
		  
		// Registering your Custom Post Type
		register_post_type('offers', array(
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail')
		));
	  
	}
function handle_job_form_submission() {
    check_ajax_referer('job_form_nonce', 'security');

    $data = [
        'name'    => sanitize_text_field($_POST['name']),
        'email'   => sanitize_email($_POST['email']),
        'phone'   => sanitize_text_field($_POST['phone']),
        'post'    => sanitize_text_field($_POST['post']),
        'message' => sanitize_textarea_field($_POST['message'])
    ];

    $cv = $_FILES['cv'];
    $upload_dir = wp_upload_dir();
    $file_path = $upload_dir['path'] . '/' . basename($cv['name']);

    if (move_uploaded_file($cv['tmp_name'], $file_path)) {
        $to = 'youssef@interaktagency.com';
        $subject = "New Application for {$data['post']}";
        $headers = [
            'Content-Type: text/html; charset=UTF-8',
            'From: ' . $data['name'] . ' <' . $data['email'] . '>'
        ];

        $body = "<h2>New Job Application</h2>
            <p><strong>Name:</strong> {$data['name']}</p>
            <p><strong>Email:</strong> {$data['email']}</p>
            <p><strong>Phone:</strong> {$data['phone']}</p>
            <p><strong>Position:</strong> {$data['post']}</p>
            <p><strong>Message:</strong><br>{$data['message']}</p>
            <p>CV attached: <a href='" . esc_url($upload_dir['url'] . '/' . basename($file_path)) . "'>" . basename($file_path) ."</a></p>";

        add_filter('wp_mail_content_type', function() { return 'text/html'; });
        $sent = wp_mail($to, $subject, $body, $headers, [$file_path]);
        remove_filter('wp_mail_content_type', 'set_html_content_type');

        if ($sent) {
            wp_send_json_success('Your application has been submitted successfully!');
        } else {
            wp_send_json_error('Failed to send application. Please try again.');
        }
    } else {
        wp_send_json_error('Error uploading CV file.');
    }
}


add_action('wp_ajax_handle_job_form', 'handle_job_form_submission');
add_action('wp_ajax_nopriv_handle_job_form', 'handle_job_form_submission');
function handle_contact_form_submission() {
    // Verify nonce for security
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'contact_form_nonce')) {
        wp_send_json_error('Invalid nonce');
        return;
    }

    // Sanitize form data
    $subject = sanitize_text_field($_POST['subject']);
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Basic validation
    if (empty($subject) || empty($name) || empty($email)) {
        wp_send_json_error('All fields are required.');
        return;
    }

    // Prepare email
    $to = 'youssef@interaktagency.com'; 
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
    ];
    $email_body = "<h2>New Message from Contact Form</h2>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$message</p>";

    // Send email
    $mail_sent = wp_mail($to, $subject, $email_body, $headers);

    if ($mail_sent) {
        wp_send_json_success('Your message has been sent successfully!');
    } else {
        wp_send_json_error('Failed to send your message.');
    }
}

// Hook into WordPress AJAX
add_action('wp_ajax_send_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form_submission');

// 1. Rename the function to match the hook
// Looking to send emails in production? Check out our Email API/SMTP product!
// In functions.php
add_action('phpmailer_init', 'custom_mailtrap_smtp'); // Fixed function name

function custom_mailtrap_smtp(PHPMailer $phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_FROM_NAME;
}


// Looking to send emails in production? Check out our Email API/SMTP product!



	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not 
	* unnecessarily executed. 
	*/
	  
	add_action( 'init', 'offers_post_type', 0 );




	// Navwalker bootstrap 5
	
	class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
	{
	  private $current_item;
	  private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	  ];
	
	  function start_lvl(&$output, $depth = 0, $args = null)
	  {
		$dropdown_menu_class[] = '';
		foreach($this->current_item->classes as $class) {
		  if(in_array($class, $this->dropdown_menu_alignment_values)) {
			$dropdown_menu_class[] = $class;
		  }
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
	  }
	
	  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	  {
		$this->current_item = $item;
	
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
	
		$li_attributes = '';
		$class_names = $value = '';
	
		$classes = empty($item->classes) ? array() : (array) $item->classes;
	
		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
		  $classes[] = 'dropdown-menu dropdown-menu-end';
		}
	
		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';
	
		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
	
		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
	
		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
	
		$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
		$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';
	
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
	
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	  }
	}
	// register a new menu
	register_nav_menu('main-menu', 'Main menu');