<?php

//register scripts first!!!
function inv_register_scripts() {
	//bootstrap
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);
	wp_register_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), null, false);    	
	wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('popper'), null, false);
	//tools
	wp_register_script( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array('jquery'), null, true);
	wp_register_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), null, true);		
	wp_register_script( 'countTo', get_template_directory_uri() . '/vendor/jquery-countTo-master/jquery.countTo.js', array('jquery'), null, true); 
	//pages
	wp_register_script( 'theme', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap', 'AOS'), null, true);
	//template-parts
	wp_register_script( 'archive-latest-fullwidth', get_template_directory_uri() . '/js/templte-parts/archive-latest-fullwidth.js', array('theme','swiper'), null, true);
	wp_register_script( 'archive-top-articles', get_template_directory_uri() . '/js/templte-parts/archive-top-articles.js', array('theme','swiper'), null, true);  
	//blocks
	wp_register_script( 'about-us-block', get_template_directory_uri() . '/blocks/homepage-about-us/block.js', array('theme', 'swiper'), null, true); 
	wp_register_script( 'blog-numbers-block', get_template_directory_uri() . '/blocks/blog-numbers/block.js', array('theme', 'countTo'), null, true);	
}
add_action( 'wp_enqueue_scripts', 'inv_register_scripts' );


//load scripts on front end
function inv_add_javascript() {	
	wp_enqueue_script( 'theme');	
}
add_action('wp_enqueue_scripts', 'inv_add_javascript', 100);




//register styles
function inv_register_stylesheets() {
	//core
	wp_register_style('theme', get_template_directory_uri() . '/css/style.css', array('AOS'), '1.0.0', 'all' );
	wp_register_style('blog', get_template_directory_uri() . '/css/blog.css', array('AOS'), '1.0.0', 'all' );
	//tools
	wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );
	wp_register_style('swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), null, 'all' );	
	//other
	wp_register_style('admin-styles', get_template_directory_uri() . '/css/admin-styles.css', array(), null, 'all' );
	wp_register_style('login-register', get_template_directory_uri() . '/css/login-register.css', array(), null, 'all' );	
}
add_action('wp_enqueue_scripts', 'inv_register_stylesheets');

//load styles on front end
function inv_add_stylesheets() {	
	if ( is_single() || is_archive() || is_page_template( 'blog.php' ) )  {
		wp_enqueue_style('blog');
	} else {
		wp_enqueue_style('theme');
	}				
}	
add_action('wp_enqueue_scripts', 'inv_add_stylesheets');




//admin styles
add_action('admin_head', 'inv_admin_styles');
function inv_admin_styles() {
	wp_enqueue_style('admin-styles');
}

//login page
function inv_login_logo() { 
	wp_enqueue_style('login-register');	
 }
add_action( 'login_enqueue_scripts', 'inv_login_logo' );

function inv_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inv_login_logo_url' );
 
function inv_login_logo_url_title() {
    return 'Invest.com';
}
add_filter( 'login_headertext', 'inv_login_logo_url_title' );


// dequeue jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');		
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );


