    <section class="pt-5 p-0 mt-1 overflow-hidden bg-light">
      <div class="container">

       <!--#include file="/partial/demo-menu.html" -->
<!--
        <p>Use the controls to manipulate the chart.
        Select an instrument and set the time interval using the buttons above the chart.
        Change the candle size, interval width and scroll position using the buttons below.</p>
-->

        <div class="toolset">
          <select id="symbol">
<option value="weth_usdc">WETH_USDC</option>
<option value="wmatic_usdc">WMATIC_USDC</option>

          </select>
          <span class="buttonset">
<!--
            <button id="btn-gran-w" class="btns btn-gran" data-value="W">W</button>
            <button id="btn-gran-d" class="btns btn-gran" data-value="D">D</button>
            <button id="btn-gran-h4" class="btns btn-gran" data-value="H4">H4</button>
-->
            <button id="btn-gran-h1" class="btns btn-gran" data-value="H1">H1</button>
<!--            <button id="btn-gran-m30" class="btns btn-gran" data-value="M30">M30</button>-->
            <button id="btn-gran-m15" class="btns btn-gran active" data-value="M15">M15</button>
            <button id="btn-gran-m10" class="btns btn-gran" data-value="M10">M10</button>
            <button id="btn-gran-m5" class="btns btn-gran" data-value="M5">M5</button>
<!--            <button id="btn-gran-m1" class="btns btn-gran" data-value="M1">M1</button>-->
          </span>
        </div>

        <div class="chart-container">
          <div class="dojichart" id="my-dojichart">
            <div class="region" data-name="timelabels"></div>
            <div class="region" data-name="price"></div>
<!--            <div class="region" data-name="volume"></div>-->
          </div>
        </div>

        <div class="toolset">
          <span class="buttonset">
            <button id="btn-interval-decr" class="btns btn-intervaldecr">|||</button>
            <button id="btn-interval-incr" class="btns btn-intervalincr">| | |</button>
            <button id="btn-barwidth-decr" class="btns btn-barwidthdecr">[]</button>
            <button id="btn-barwidth-incr" class="btns btn-barwidthincr">[  ]</button>
          </span>
          <span class="buttonset">
            <button id="btn-scroll-start" class="btns btn-scrollstart">|&lt;</button>
            <button id="btn-scroll-end" class="btns btn-scrollend">&gt;|</button>
            <button id="btn-scroll-back100" class="btns btn-scroll" data-value="-100">&laquo;</button>
            <button id="btn-scroll-forward100" class="btns btn-scroll" data-value="+100">&raquo;</button>
            <button id="btn-scroll-back10" class="btns btn-scroll" data-value="-10">&lt;</button>
            <button id="btn-scroll-forward10" class="btns btn-scroll" data-value="+10">&gt;</button>
            <button id="btn-scroll-back1" class="btns btn-scroll" data-value="-1">-1</button>
            <button id="btn-scroll-forward1" class="btns btn-scroll" data-value="+1">+1</button>
          </span>
        </div>


      </div>
    </section>
