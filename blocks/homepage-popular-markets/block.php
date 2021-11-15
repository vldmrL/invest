<section class="popular-markets  <?php block_field('additional-class'); ?>">
    <div class="container">
        <div class="popular-markets__header section-header">
            <h2 class="section-header__header"><?php block_field('title'); ?></h2>
            <p class="section-header__text"><?php block_field('subtitle'); ?></p>
        </div>

        <div class="row">
            <div class="col-lg-4 popular-markets__content-col" data-aos="fade-up" data-aos-duration="1200">
                <ul class="popular-markets__list list-checker">
                    <?php block_field('list'); ?>
                </ul>
                <a href="#" class="popular-markets__button btn btn-secondary">Start Trading Now</a>
                <div class="popular-markets__buy-links buy-links">
                    <a href="#" class="btn-app -store"></a>
                    <a href="#" class="btn-app -google"></a>
                </div>


            </div>

            <div class="col-lg-8 popular-markets__data-col"  data-aos="fade-up" data-aos-duration="1200">
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
                        "s": "BINANCE:ETHUSDT"
                        },
                        {
                        "s": "BITSTAMP:ETHUSD"
                        },
                        {
                        "s": "BINANCE:TRXUSDT"
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
</section>