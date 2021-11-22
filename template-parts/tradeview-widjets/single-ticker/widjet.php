<?php
// $args['symbol'] requiered !
//
// Please, pass it like so:
// get_template_part( 'template-parts/tradeview-widjets/single-ticker/widjet', null, array(
//     'symbol' => $symbol_value,                        
// ));
?>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container <?php echo $args['symbol']; ?>">
    <div class="tradingview-widget-container__widget"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Rates</span></a> by TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
    {
    "symbol": "<?php echo $args['symbol']; ?>",
    "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
    "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
    "isTransparent": true,
    "locale": "en"
    }
    </script>
</div>
<!-- TradingView Widget END -->