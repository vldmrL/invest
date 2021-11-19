<?php 
// available $args['...']
// title
// text
// button_link
// button_text
// small_text
// small_link_url
// small_link_text
// add_class
?>

<?php wp_enqueue_style('instruments-page-section-firstscreen'); ?>


<section class="instruments-widjet-firstscreen block <?php echo $args['add_class']; ?>">    
    <div class="container">
        <div class="row block">

            <div class="col-md-6 col-lg-5 block__col"> 
                <div class="block__content">
                    <h1 class="h2 block__title text-gradient--dark" data-aos="fade-in">
                        <?php echo $args['title']; ?>
                    </h1>
                    <div class="block__text text-gray--dark" data-aos="fade-up">
                        <?php echo $args['text']; ?>
                    </div>
                    <div class="block__bottons">
                        <a href="<?php echo $args['button_link']; ?>" class="block__btn btn btn-secondary"><?php echo $args['button_text']; ?></a>
                    </div>                
                    <div class="block__small">
                        <span class="block__small-text text-gray--dark"><?php echo $args['small_text']; ?></span>
                        <a href="<?php echo $args['small_link_url']; ?>" class="block__small-link"><?php echo $args['small_link_text']; ?></a>
                    </div> 
                </div>        
            </div>   

            <div class="col-md-6 col-lg-6 offset-lg-1 block__col">  
                <div class="block__widjet bg-dark-1 rounded">
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
    </div>
</section>



<?php //wp_enqueue_style('instruments-page-section-firstscreen', get_template_directory_uri() . '/template-parts/instruments-page/section-firstscreen.css', array('theme', 'AOS'), null, 'all'  ); ?>