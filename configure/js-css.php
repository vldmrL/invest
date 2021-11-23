<?php

//register SCRIPTS first!!!
function inv_register_scripts() {
	//bootstrap
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
	// wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, false);    	
	wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), null, false);
	//tools
	wp_register_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array('jquery'), null, true);
	wp_register_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);		
	wp_register_script( 'countTo', get_template_directory_uri() . '/vendor/jquery-countTo-master/jquery.countTo.js', array('jquery'), null, true);
	wp_register_script( 'theme-functions', get_template_directory_uri() . '/js/theme-functions.js', array('bootstrap'), null, true);
	//pages		
	wp_register_script( 'blog-homepage', get_template_directory_uri() . '/js/blog-homepage.js', array('swiper'), null, true);
	wp_register_script( 'blog-category-page', get_template_directory_uri() . '/js/blog-category-page.js', array('swiper'), null, true);
	//template-parts
	wp_register_script( 'archive-slider-category', get_template_directory_uri() . '/js/templte-parts/archive-slider-category.js', array('swiper'), null, true);  
	//blocks
	wp_register_script( 'about-us-block', get_template_directory_uri() . '/blocks/homepage-about-us/block.js', array('swiper'), null, true); 
	wp_register_script( 'homepage-about-us', get_template_directory_uri() . '/block-templates/homepage/about-us/template.js', array('swiper'), null, true); 
	wp_register_script( 'blog-numbers-block', get_template_directory_uri() . '/blocks/blog-numbers/block.js', array('theme-functions', 'countTo'), null, true);

	wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('theme-functions', 'AOS', 'bootstrap'), null, true);
}
add_action( 'wp_enqueue_scripts', 'inv_register_scripts' );

//load scripts on front end
function inv_add_javascript() {	
	wp_enqueue_script( 'theme');	
}
add_action('wp_enqueue_scripts', 'inv_add_javascript', 100);




//register STYLES
function inv_register_stylesheets() {
	//core
	wp_register_style('theme', get_template_directory_uri() . '/css/style.css', array('AOS'), '1.0.4', 'all' );
	wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', array('AOS'), '1.0.3', 'all' );
	//tools
	wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
	wp_register_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), null, 'all' );		
}

//load styles on front end
function inv_add_stylesheets() {	
	if ( is_single() || is_archive() || is_page_template( 'blog.php' ) )  {
		wp_enqueue_style('blog');
	} else {
		wp_enqueue_style('theme');
	}				
}	
add_action('wp_enqueue_scripts', 'inv_register_stylesheets');
add_action('wp_enqueue_scripts', 'inv_add_stylesheets');





//admin styles
add_action('admin_head', 'inv_admin_styles');
function inv_admin_styles() {
	wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin-styles.css', array(), null, 'all' );
}


//login page
function inv_login_logo() { 
	wp_enqueue_style('login-register', get_template_directory_uri() . '/css/login-register.css', array(), null, 'all' );
 }
function inv_login_logo_url() {
    return home_url();
} 
function inv_login_logo_url_title() {
    return 'Invest.com';
}
add_action( 'login_enqueue_scripts', 'inv_login_logo' );
add_filter( 'login_headerurl', 'inv_login_logo_url' );
add_filter( 'login_headertext', 'inv_login_logo_url_title' );


// dequeue jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');		
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );


