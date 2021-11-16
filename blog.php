<?php
//*template name: Blog homepage*//

 get_header(); ?>

<div id="primary" class="content-area" >

	<main id="main" class="blog-main" >
		<div class="container">

			<div class="blog__page-title blog-page-title">
				<h1 class=" blog-page-title__title text-gradient--dark">Invest.com - News</h1>
			</div>

			<?php get_template_part( 'template-parts/archive', 'slider-category' ); ?>
			<?php get_template_part( 'template-parts/archive', 'featured-fullwidth' ); ?>
			<?php get_template_part( 'template-parts/archive', 'top-articles' ); ?>
			<?php get_template_part( 'template-parts/archive', 'all-articles' ); ?>
			
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();