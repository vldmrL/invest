<section class="instruments-widjet-firstscreen <?php block_field('add-class'); ?>">    
    <div class="container">
        <div class="row block">

            <div class="col-md-6 block__col">             
                <h1 class="h2 block__title text-gradient--dark" >
                    <?php block_field('title'); ?>
                </h1>
                <div class="block__text text-gray--dark">
                    <?php block_field('text'); ?>
                </div>
                <div class="block__bottons">
                    <a href="<?php block_field('button-link'); ?>" class="block__btn btn btn-secondary"><?php block_field('button-text'); ?></a>
                </div>                
                <p class="block__small">
                    <span class="block__small-text"><?php block_field('small-text'); ?></span>
                    <a href="<?php block_field('small-link-url'); ?>" class="block__small-link"><?php block_field('small-link-text'); ?></a>
                </p> 
            </div>   

            <div class="col-md-6 block__col">             
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