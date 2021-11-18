<section class="popular-markets block <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="block__header section-header">
            <h2 class="section-header__header"><?php block_field('title'); ?></h2>
            <p class="section-header__text"><?php block_field('subtitle'); ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4 block__content-col" data-aos="fade-up">
                <ul class="block__list list-checker">
                    <?php block_field('list'); ?>
                </ul>
                <a href="<?php block_field('button-link'); ?>" class="block__button btn btn-secondary"><?php block_field('button-text'); ?></a>
                <div class="block__buy-links buy-links">
                    <a href="#" class="btn-app -store"></a>
                    <a href="#" class="btn-app -google"></a>
                </div>


            </div>

            <div class="col-lg-8 block__data-col"  data-aos="fade-up">
                <div class="block__data">
                
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Crypto</span></a> by TradingView</div> -->
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                    {
                    "colorTheme": "dark",
                    "dateRange": "12M",
                    "showChart": false,
                    "locale": "en",
                    "width": "100%",
                    "height": "100%",
                    "largeChartUrl": "",
                    "isTransparent": true,
                    "showSymbolLogo": true,
                    "showFloatingTooltip": true,
                    "tabs": [
                        {
                        "title": "Crypto",
                        "symbols": [
                            {
                            "s": "COINBASE:BTCUSD",
                            "d": "BTC"
                            },
                            {
                            "s": "BINANCE:BTCUSDT"
                            },
                            {
                            "s": "BITSTAMP:BTCUSD"
                            },                            
                            {
                            "s": "BITSTAMP:ETHUSD"
                            },
                            {
                            "s": "BINANCE:TRXUSDT"
                            }, {
                            "s": "BINANCE:ETHUSDT"
                            }
                            
                        ]
                        }
                    ]
                    }
                    </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>

        </div>
        
        
    </div>
</section>