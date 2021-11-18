<section class="blank-row block <?php block_field('add-class');?>">
    <div class="container">
        <div class="row">
            <?php if ( !empty(block_value('title')) ) { ?>
            <div class="col-12">
                <div class="block__header section-header <?php block_field('title-class');?>">
                    <h3 class="section-header__header"><?php block_field('title'); ?></h2>
                    <?php if ( !empty(block_value('subtitle')) ) { ?>
                        <p class="section-header__text"><?php block_field('subtitle'); ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>

            <div class="col-12">
                <div class="block__widjet <?php block_field('widjet-wrap'); ?>">
                    <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                        <div id="tradingview_3a74f"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.MediumWidget(
                        {
                        "symbols": [
                            [
                            "Apple",
                            "AAPL"
                            ],
                            [
                            "Google",
                            "GOOGL"
                            ],
                            [
                            "Microsoft",
                            "MSFT"
                            ]
                        ],
                        "chartOnly": false,
                        "width": "100%",
                        "height": "100%",
                        "locale": "en",
                        "colorTheme": "dark",
                        "gridLineColor": "rgba(42, 46, 57, 0)",
                        "fontColor": "#787B86",
                        "isTransparent": true,
                        "autosize": true,
                        "showFloatingTooltip": true,
                        "showVolume": false,
                        "scalePosition": "no",
                        "scaleMode": "Normal",
                        "fontFamily": "Trebuchet MS, sans-serif",
                        "noTimeScale": false,
                        "chartType": "area",
                        "lineColor": "#2962FF",
                        "bottomColor": "rgba(41, 98, 255, 0)",
                        "topColor": "rgba(41, 98, 255, 0.3)",
                        "container_id": "tradingview_3a74f"
                        }
                        );
                        </script>
                        </div>
                        <!-- TradingView Widget END -->
                </div>
            </div>

        </div>
    </div>
</section>