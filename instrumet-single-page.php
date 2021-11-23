<?php
//*template name: instrumet single page *//

 get_header(); ?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main instrument" > 		
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">

					<div class="instrument__data instrument-data mb-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/gold.png" alt="" class="instrument-data__icon">
						<div class="instrument-data__title">
							<h1 class="instrument-data__name mb-0">Gold</h1>
							<div class="instrument-data__description text-gray--dark">NIKKEI-JPX GOLD INDEX / GOLD</div>
						</div>
					</div>

					<div class="instrument__numbers instrument-numbers mb-5">
						<div class="instrument-numbers__big">
							<div class="instrument-numbers__number">4.4792</div>
							<div class="instrument-numbers__currancy">USDT</div>
							<div class="instrument-numbers__difference price up">+0.78%</div>
						</div>
						<div class="instrument-numbers_small">
							<span class="text-green">Market is open </span> 
							<span class="text-gray--dark">(AS of NOV 12, 07:34 UTC)</span>
						</div>
					</div>

					<div class="instrument__buttons instrument-buttons pb-inner mb-5">
						<div class="instrument-buttons__small">
							<a href="#" class="instrument-buttons__favoutite"><i class="icon icon-star"></i> Add favorite</a>
							<a href="#" class="instrument-buttons__alert"><i class="icon icon-alert"></i> Set alert</a>
						</div>
						<div class="instrument-buttons__main">
							<button class="instrument-buttons__button btn btn-green btn-lg mr-3">BUY</button>
							<button class="instrument-buttons__button btn btn-outline-red btn-lg">SELL</button>
						</div>
					</div>

					<div class="instrument__description instrument-description mb-5">
						<h3 class="instrument-description__title">Gold Company</h3>
						<p class="instrument-description__text text-gray--dark">The value of gold is monitored by financial markets around the world. Gold was the backbone of the market economy for many hundreds of years before the abolition of the gold standard, which led to the emergence of fiduciary money, the nominal value of which is set and guaranteed by the state, regardless of the value of the material from which the money is made. In the periodic table of chemical elements, gold is denoted by the symbol "AU", and the common criterion for the whole world to measure the value of gold is the US dollar.</p>
					</div>

				</div>


				<div class="col-12 col-md-6">

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white mb-2">Share worth: <span class="text-blue">147 .84</span></h3>
							<p class="text-blog mb-0">American hardware and software company</p>
						</div>						
					</div>

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white">Graph</h3>
							<div class="instrument__widjet-card">
							<?php get_template_part('template-parts/tradeview-widjets/market-overview/widjet-instrument-single'); ?>
							</div>
						</div>
					</div>

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white">Info</h3>
							<div class="instrument__info-card row">
								<div class="col-6">
									<ul class="info-card__list list-unstyled">
										<li class="info-card__item">
											<span class="info-card__text">Spread</span>
											<span class="info-card__number text-blue">1.11</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Overnight funding - Buy</span>
											<span class="info-card__number text-blue">-0.0552%</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Initial margin</span>
											<span class="info-card__number text-blue">20.00%</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Leverage</span>
											<span class="info-card__number text-blue">1:5</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Minimum amount</span>
											<span class="info-card__number text-blue">0 shares</span>
										</li>
									</ul>
								</div>
								<div class="col-6">
									<ul class="info-card__list list-unstyled">
										<li class="info-card__item">
											<span class="info-card__text">Spread %</span>
											<span class="info-card__number text-blue">0.75%</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Overnight funding - Sell</span>
											<span class="info-card__number text-blue">-0.0054%</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Maintenance margin</span>
											<span class="info-card__number text-blue">-10.00%</span>
										</li>
										<li class="info-card__item">
											<span class="info-card__text">Expires daily</span>
											<span class="info-card__number text-blue">No</span>
										</li>							
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>		
	</main>
</div><!-- .content-area -->



<?php
get_footer();