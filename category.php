<?php

 get_header(); ?>

<div id="primary" class="content-area" >
    <main id="main" class="blog-main" >
        <div class="container">

			<div class="archive__page-title category-page-title category-page-title--underline">
				<h1 class=" category-page-title__title text-gradient--dark"><?php single_cat_title('' , true ); ?></h1>
			</div>

			<?php get_template_part( 'template-parts/archive', 'latest-fullwidth' );  ?>
			<?php get_template_part( 'template-parts/archive', 'top-articles' );  ?>
			<?php get_template_part( 'template-parts/archive', 'all-articles' );  ?>	
			<?php get_template_part( 'template-parts/banner', 'after-article' );  ?>			
			
		</div>

	</main>
</div><!-- .content-area -->



<?php
get_footer();