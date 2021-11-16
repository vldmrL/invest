<?php
//*template name: Blog homepage*//

 get_header(); ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main" >
		<div class="container">

			<div class="archive__page-title page-title page-title--underline">
				<h1 class=" page-title__title">News</h1>
			</div>

			<?php the_content(); ?>
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();