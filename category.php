<?php

 get_header(); ?>

<?php wp_enqueue_script('blog-categoery-page'); ?>
<?php wp_enqueue_style('swiper'); ?>


<div id="primary" class="content-area" >
    <main id="main" class="blog-main" >
        <div class="container">
			<div class="archive__page-title category-page-title category-page-title--underline">
				<h1 class=" category-page-title__title text-gradient--dark"><?php single_cat_title('' , true ); ?></h1>
			</div>

			<section class="latest-fullwidth">
				<div class="latest-fullwidth__section-header section-header">
					<h2 class="section-header__header">Latest</span></h2>            
				</div>
				<div class="latest-fullwidth__slider swiper">
					<div class="swiper-wrapper">
					<?php										
					$query_latest = new WP_Query(array(
						'posts_per_page' => 3,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'
					));
					while ( $query_latest->have_posts() ) {
						$query_latest->the_post();
						get_template_part( 'template-parts/loop', 'latest-fullwidth' );
					}
					wp_reset_postdata();
					?>
					</div>
				</div> 
			</section>
			
			<section class="top-articles">
				<div class="top-articles__section-header section-header">
					<h2 class="section-header__header">Top articles</span></h2>            
				</div>
				<div class="top-articles__slider swiper">
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
						get_template_part( 'template-parts/loop', 'top-articles' );
					}   
					wp_reset_postdata();
					?>    
					</div>
				</div> 
			</section>


			<section class="all-articles">
				<div class="all-articles__section-header section-header">
					<h2 class="section-header__header text-gray">All articles</span></h2>            
				</div>
				<div class="all-articles__row row">
					<?php					
					$query_all = new WP_Query(array(
						'posts_per_page' => 6,
						'post_type' => 'post',
						'orderby' => 'date',
						'order'   => 'DESC'            
					));
					while ( $query_all->have_posts() ) {
						$query_all->the_post();
						?>
						<div class="all-articles__col col-12 col-md-6 col-lg-4 post-item">
							<?php get_template_part( 'template-parts/loop', 'all-articles' ); ?>
						</div>
					<?php }
					wp_reset_postdata();
					?>	
				</div>
			</section>	
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();