<?php wp_enqueue_style('swiper'); ?>
<?php wp_enqueue_script('archive-slider-category'); ?>

<section class="slider-category">
	<div class="container">
		<h6 class="slider-category__title">
		  CATEGORIES
		</h6>
		<div class="slider-category__wrapper">
			<!-- <div class="slider-category__nav slider-category__prev">
				<span>
					<svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"/>
					</svg>
				</span>
			</div> -->
			
			<div class="slider-category__slider swiper">			
				<div class="slider-category__slider-wrapper swiper-wrapper">
				<?php
				$categories = get_categories( );
				foreach($categories as $category)
				{	
				?>
					<a class="slider-category__item swiper-slide" href="<?php echo get_category_link( $category->cat_ID ); ?>">
						<span class="slider-category__item-text">			
								<?php echo $category->name; ?>
						</span>				
					</a>
				<?php	
				}
				?>	
				</div>		
			</div>

			<div class="slider-category__nav slider-category__next">
				<span>
					<svg width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20.5303 6.53033C20.8232 6.23744 20.8232 5.76256 20.5303 5.46967L15.7574 0.696699C15.4645 0.403806 14.9896 0.403806 14.6967 0.696699C14.4038 0.989593 14.4038 1.46447 14.6967 1.75736L18.9393 6L14.6967 10.2426C14.4038 10.5355 14.4038 11.0104 14.6967 11.3033C14.9896 11.5962 15.4645 11.5962 15.7574 11.3033L20.5303 6.53033ZM0 6.75H20V5.25H0V6.75Z" fill="white"/>
					</svg>
				</span>
			</div>

		</div>		
	</div>	
</section>

