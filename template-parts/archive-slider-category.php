<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('archive-slider-category'); ?>

<section class="slider-category">
	<div class="container">
		<div class="slider-category__slider swiper">
			<div class="slider-category__slider-wrapper swiper-wrapper">
			<?php
			$categories = get_categories( );
			foreach($categories as $category)
			{	
			?>
				<a class="slider-category__item" href="<?php echo get_category_link( $category->cat_ID ); ?>">
					<span class="slider-category__item-text">			
							<?php echo $category->name; ?>
					</span>				
				</a>
			<?php	
			}
			?>
		</div>

	</div>	
</section>

