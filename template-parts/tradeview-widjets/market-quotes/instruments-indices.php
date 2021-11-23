<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Indices</span></a> by TradingView</div> -->
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": "100%",
  "height": "100%",
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "CRYPTOCAP:BTC.D"
        },
        {
          "name": "CURRENCYCOM:US30"
        },
        {
          "name": "OANDA:NAS100USD"
        },
        {
          "name": "OANDA:US30USD"
        },
        {
          "name": "OANDA:US30USD"
        },
        {
          "name": "CURRENCYCOM:US500"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
  "isTransparent": true,
  "largeChartUrl": "<?php the_field('redirect-tradingview', 'options'); ?>",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->


