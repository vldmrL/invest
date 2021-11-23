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
      "name": "Comodity",
      "originalName": "Comodity",
      "symbols": [
        {
          "name": "OANDA:XAUUSD"
        },
        {
          "name": "OANDA:NAS100USD"
        },
        {
          "name": "TVC:USOIL"
        },
        {
          "name": "OANDA:XAGUSD"
        },
        {
          "name": "FOREXCOM:DJI"
        },
        {
          "name": "TVC:USOIL"
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

