<?php
// TradingView widjet for "Top Weekly"
// Default values stored in options admin page
?>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_3a74f"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Apple</span></a> by TradingView</div> -->
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
    "colorTheme": "<?php echo substr($_COOKIE["theme"], 6); ?>",
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