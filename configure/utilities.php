<?php

// Utilities functions here



/*
//excerpt length
function my_excerpt_length($length){
    return 10;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/

// limit excerpt length custom
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
  }

 // limit content length custom  
  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]>', $content);
    return $content;
}

//coockie add class to body
function inv_body_classes( $classes ) {
    if ( is_page() && get_field('general-settings_theme-color-overwrite') ) {
        $classes[] = get_field('general-settings_theme-color');
    } else {
        if(!isset($_COOKIE['theme'])) {
            $theme_default = get_field('theme-default', 'options');  
            if ( !empty($theme_default) ) {
                $theme = $theme_default;
            } else {
                $theme = 'theme-dark';
            }       
            setcookie('theme', $theme);
            $_COOKIE['theme'] = $theme; 
            $classes[] = $_COOKIE['theme'];       
        } else {        
            $classes[] = $_COOKIE['theme'];        
        }    
    }          
    return $classes;     
}
add_filter( 'body_class','inv_body_classes' );




//show breadcrumbs
function show_breadcrumbs(){
    if (  is_page() && function_exists('dimox_breadcrumbs') && get_field('general-settings_show-breadcrumbs') == 'true' ) {				
        echo '<div class="container">';
        dimox_breadcrumbs();
        echo '</div>';			
    }	elseif ( !is_page() && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="container">';
            dimox_breadcrumbs();
            echo '</div>';	
    }	elseif ( is_page_template( 'blog.php' ) && function_exists('dimox_breadcrumbs') ) {
            echo '<div class="container">';
            dimox_breadcrumbs();
            echo '</div>';
    }
}



// //add body class for admin
// function inv_admin_page_body_class($classes) {   	
// 	$admn_page_id = " admin-page-id-" . get_queried_object_id() . " ";
// 	$classes .= $admn_page_id;
//     return $classes;
// }
// add_filter('admin_body_class', 'inv_admin_page_body_class');



/*
//AJAX category function
add_action( 'wp_ajax_loadPostsArchive', 'load_more_archive' );
add_action( 'wp_ajax_nopriv_loadPostsArchive', 'load_more_archive' );

function load_more_archive(){       

    $offset = $_POST[ 'count' ];      
    $category_id = $_POST[ 'category' ]; 
    $result = '<div class="row">';

    $args_ajax_cat = array(
        'posts_per_page' => 6,
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'category__in' => $category_id,
        'offset' => $offset
    );
    $query_ajax_cat = new WP_Query( $args_ajax_cat );


    while ( $query_ajax_cat->have_posts() ) {
        $query_ajax_cat->the_post();

        $offset = $offset + 1;        

        $permalink = get_permalink();
        $onclick = 'onclick="window.location.href=' . "'" . $permalink . "';" . '"';
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  //$thumbnail[0]
        $directory = get_template_directory_uri(); 
        $auth_id = get_the_author_meta( 'ID' );
        $auth_id_string = 'user_' . $auth_id;
        $avatar = get_field('avatar', $auth_id_string );
        $author = get_the_author();
        $date = get_the_date();
        $title = get_the_title();
        $excerpt = get_the_excerpt();    
        
        // all categories
        // foreach( get_the_category() as $category ){
        //     $result.= '<a href="' . get_category_link($category) .  '" rel="category tag">' . $category->name . '</a>';
        // }
    
        $result.='<div class="col-md-6 col-lg-4 excerp-portrait"  data-aos="fade-in" data-aos-duration="1200">';  
        $result.='';           
        $result.='</div>';     

    }   
    wp_reset_postdata(); 

    $result.='</div>'; //row

    wp_send_json_success(array(
        'result' => $result,
        'newCount' => $offset
      ));

}
*/
