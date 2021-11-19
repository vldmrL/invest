<section class="top-assets  <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="top-assets__header section-header">
            <h2 class="section-header__header">Top Assets</h2>            
        </div>
        
        <div class="row top-assets__row">

            <div class="col-12 col-lg-4 top-assets__item">

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container asset frame">
                    <div class="tradingview-widget-container__widget"></div>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Rates</span></a> by TradingView</div> -->
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                    "largeChartUrl": "http://dev-invest.markdev.site/instruments/instrument",
                    "symbol": "<?php block_field('symbol1'); ?>",
                    "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
                    "isTransparent": true,
                    "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->

            </div>
            
            <div class="col-12 col-lg-4 top-assets__item">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container asset frame">
                    <div class="tradingview-widget-container__widget"></div>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Rates</span></a> by TradingView</div> -->
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                     "largeChartUrl": "http://dev-invest.markdev.site/instruments/instrument",
                    "symbol": "<?php block_field('symbol2'); ?>",
                    "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
                    "isTransparent": true,
                    "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>    

            <div class="col-12 col-lg-4 top-assets__item">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container asset frame">
                    <div class="tradingview-widget-container__widget"></div>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Rates</span></a> by TradingView</div> -->
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                    {
                     "largeChartUrl": "http://dev-invest.markdev.site/instruments/instrument",
                    "symbol": "<?php block_field('symbol3'); ?>",
                    "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
                    "isTransparent": true,
                    "locale": "en"
                    }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>

        </div>
    </div>
</section>


