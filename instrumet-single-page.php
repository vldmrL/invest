<?php
//*template name: instrumet single page *//

 get_header(); ?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main instrument" > 		
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6">

					<div class="instrument__data instrument-data mb-inner">
						<img src="" alt="" class="instrument-data__icon">
						<div class="instrument-data__title">
							<h1 class="instrument-data__name mb-0">Gold</h1>
							<div class="instrument-data__description text-gray--dark">NIKKEI-JPX GOLD INDEX / GOLD</div>
						</div>
					</div>

					<div class="instrument__numbers instrument-numbers mb-inner">
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

					<div class="instrument__buttons instrument-buttons pb-inner mb-inner">
						<div class="instrument-buttons__small">
						</div>
						<div class="instrument-buttons__main">
							<button class="instrument-buttons__button btn btn-green btn-lg">BUY</button>
							<button class="instrument-buttons__button btn btn-outline-red btn-lg">SELL</button>
						</div>
					</div>

					<div class="instrument__description instrument-description mb-inner">
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
							<div class="instrument__widjet-graph">
								widjet here
							</div>
						</div>
					</div>

					<div class="card mb-5">
						<div class="card-body">
							<h3 class="text-white">Info</h3>
						</div>
					</div>

				</div>
			</div>
		</div>		
	</main>
</div><!-- .content-area -->



<?php
get_footer();