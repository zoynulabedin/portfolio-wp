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
   register_nav_menu('topmenu', __('Top Menu','portfolio') );
   add_image_size('portfolio-image',400,400,true);

   register_nav_menus(array(
	   'footer-left'	=>__("Footer Left","portfolio"),
	   'footer-middle'	=>__("Footer Middle","portfolio"),
	   'footer-right'	=>__("Footer Right","portfolio"),
   ));
}
add_action('after_setup_theme','portfolio_setup');

function portfolio_assets(){
    wp_enqueue_style('plugin-css',get_theme_file_uri( '/assets/css/plugins.css' ),null,'1.0');
    wp_enqueue_style('dark-css',get_theme_file_uri( '/assets/css/style-dark.css' ),null,'1.0');
    wp_enqueue_style('demo-css',get_theme_file_uri( '/assets/css/style-demo.css' ),null,'1.0');
    wp_enqueue_style('portfolio-color',get_theme_file_uri( '/assets/css/blue-color.css' ),null,'1.0');

	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
	


    wp_enqueue_script( "portfolio-modernizr", get_theme_file_uri( '/assets/js/plugins.min.js' ),null,'1.0' );
    wp_enqueue_script( "google-map", "//maps.google.com/maps/api/js?sensor=false");
    wp_enqueue_script( "portfolio-plugin", get_theme_file_uri( '/assets/js/main.js' ),array('jquery'),'1.0', true );
    wp_enqueue_script( "portfolio-main", get_theme_file_uri( '/assets/js/main-demo.js' ),array('jquery'),'1.0', true );
    wp_enqueue_script( "portfolio-cust", get_theme_file_uri( '/assets/js/custom.js' ),array('jquery'),'1.0', true );
}
add_action('wp_enqueue_scripts','portfolio_assets');

require get_template_directory() . '/inc/tgm.php';
require get_template_directory() . '/inc/attachments.php';


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

function portfolio_search_form($form){ 

	$home = home_url("/");
	$button = __("Search","portfolio");
	$lebel = __("Search for:","portfolio");
	$post_type = <<<PT
	<input type="hidden" name="post_type" value="post">
PT;

if(is_post_type_archive('book')){
	$post_type = <<<PT
	<input type="hidden" name="post_type" value="book">
PT;
};

	$newform = <<<FORM

	
	<form role="search" method="get" class="header__search-form" action="{$home}">
	<label>
		<span class="hide-content"><?php _e("{$lebel}","portfolio"); ?></span>
		<input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="{$lebel}" autocomplete="off">
	</label>
	{$post_type}
	<input type="submit" class="search-submit" value="{$button}">
</form>

FORM;

return $newform;



}
add_filter("get_search_form","portfolio_search_form");


