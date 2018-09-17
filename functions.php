<?php
if(site_url()=="http://localhost/blog/"){
    define("VERSION",time());
}else{
    define("VERSION",wp_get_theme()->get("VERSION"));
}

define('ACF_EARLY_ACCESS', '5');
function portfolio_setup(){
   load_theme_textdomain( 'portfolio' );
   add_theme_support( 'post-thumbnails' );
   add_theme_support( 'title-tags' );
   add_theme_support( 'custom-logo' );
   add_theme_support( 'html5',array('search-form','comment-list') );
   add_theme_support( 'post-formats',array('image','gallery','video','audio','link','quote') );
   add_editor_style( '/assets/css/editor-style.css' );
   
   register_nav_menus(array(
	   'main-menu'	=>__("Main Menu","portfolio"),
	   
   ));
}
add_action('after_setup_theme','portfolio_setup');


/*** Enqueue scripts and styles. */
function portfolio_scripts() {
	/*** Enqueue styles. */
	wp_enqueue_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/css/plugins.css' )), 'all');
	wp_enqueue_style('dark', get_template_directory_uri() . '/assets/css/style-dark.css', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/css/style-dark.css' )), 'all');
	wp_enqueue_style('demo', get_template_directory_uri() . '/assets/css/style-demo.css', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/css/style-demo.css' )), 'all');
	wp_enqueue_style('portfolio', get_template_directory_uri() . '/assets/css/blue-color.css', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/css/blue-color.css' )), 'all');
    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri(), array(), date("ymd-Gis", filemtime( get_stylesheet_directory())));
    
	/*** Enqueue scripts. */
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/jquery.min.js' )), true);
	wp_enqueue_script('modernizer', get_template_directory_uri() . '/assets/js/modernizr.js', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/modernizr.js' )), false);
	
	wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/plugins.min.js' )), true);
	wp_enqueue_script('main', get_template_directory_uri('jquery') . '/assets/js/main.js', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/main.js' )), true);
	wp_enqueue_script('demo', get_template_directory_uri() . '/assets/js/main-demo.js', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/main-demo.js' )), true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), date("ymd-Gis", filemtime( get_template_directory() . '/assets/js/custom.js' )), true);
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

require get_template_directory() . '/inc/tgm.php';
require get_template_directory() . '/inc/attachments.php';


/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Options',
            'menu_title'  => 'Theme Options',
            'menu_slug'   => 'theme-options',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 61,
            'icon_url'    => 'dashicons-hammer'
        )
    );
}

/*
* Menu 
*/

function add_menuclass($customClass) {
	return preg_replace('/<a /', '<a class="pt-link"', $customClass, 1);
  }
  add_filter('wp_nav_menu','add_menuclass');

  

function portfolio_pagination(){
    global $wp_query;
    $link =  paginate_links( array(
        'current'   =>max(1,get_query_var('paged')),
        'total'     =>$wp_query->max_num_pages,
        'type'      => 'list'
    ) );

    $link = str_replace("page-numbers","pgn__num",$link);
    $link = str_replace("<ul class='pgn__num'>",'<ul>',$link);
    $link = str_replace("next pgn__num",'pgn__next',$link);
    $link = str_replace("prev pgn__num",'pgn__prev',$link);
   

    echo $link;
}


remove_action( "term_description","wpautop" );

function portfolio_about(){
    register_sidebar(
		array(
			'name'          => __( 'About us', 'portfolio' ),
			'id'            => 'about-us',
			'description'   => __( 'Add widgets here to appear in your about us page.', 'portfolio' ),
			'before_widget' => '<div id="%1$s" class="col-block %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="quarter-top-margin">',
			'after_title'   => '</h3>',
		)
    );



}
add_action("widgets_init","portfolio_about");



