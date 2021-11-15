<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('about-us-block'); ?>

<section class="category-slider">
	<div class="container">
		<div class="category-slider__list">
		<?php
		$categories = get_categories( );
		foreach($categories as $category)
		{	
		?>
			<a class="category-slider__item" href="<?php echo get_category_link( $category->cat_ID ); ?>">
				<div class="category-slider__item-inner">					
					<h5 class="category-slider__item-name">
						<?php echo $category->name; ?>
					</h5>
				</div>				
			</a>
		<?php	
		}
		?>
		</div>

	</div>	
</section>

