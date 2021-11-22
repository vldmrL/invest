<?php 
// available fields
[
'title'           => $title,
'subtitle'        => $subtitle,
'some_class'      => $some_class,
'some_id'         => $some_id,
'inner'           => $inner,
'template_path'   => $template_path,
'template_id'     => $template_id,
] = $args;
?>

<?php 
// wp_enqueue_script("script-id");  // load previously registered script
// wp_enqueue_style('style-id'); // load some other registered styles
?>

<section class="blog-news block <?php echo $some_class; ?>">
    <div class="container">
        <div class="blog-news__header section-header">
            <h2 class="section-header__header"><?php echo $title; ?></h2>
        </div>
        <div class="blog-news__row">
                <div class="blog-news__slider swiper">
					<div class="swiper-wrapper">
					<?php
					$query_top = new WP_Query(array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'
					));
					while ( $query_top->have_posts() ) {
						$query_top->the_post();
						get_template_part( 'template-parts/blog/article-loops/top-articles' );
					}   
					wp_reset_postdata();
					?>    
					</div>
				</div> 
        </div>
    </div>
</section>



