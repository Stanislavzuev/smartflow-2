<?php include_once('header.php'); ?>

    <main>
        <section class="market repeated_3">
            <h1>Обзор рынка 
            </h1>
            <h2>Будьте в курсе последних изменений на 
                финансовом рынке и заключайте 
                обдуманные сделки. 

            </h2>
            <div class="market_container repeated_3_container ">
                <div class="market_container-item repeated_3_container-item">
                    <!-- <img src="../../img/markets/market_1.svg" alt=""> -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Price Today</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                        {
                        "symbol": "NASDAQ:AAPL",
                        "width": "100%",
                        "height" : "100%",
                        "locale": "en",
                        "colorTheme": "light",
                        "isTransparent": false
                    }
                        </script>
                    </div>
                </div>
                <div class="market_container-item repeated_3_container-item">
                    <!-- <img src="../../img/markets/market_2.svg" alt=""> -->
                   <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/EURUSD/?exchange=FX" rel="noopener" target="_blank"><span class="blue-text">EURUSD Rates</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                        {
                        "symbol": "FX:EURUSD",
                        "width": "100%",
                        "height": "100%",
                        "locale": "en",
                        "colorTheme": "light",
                        "isTransparent": false
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="market_container-item repeated_3_container-item">
                    <!-- <img src="../../img/markets/market_3.svg" alt=""> -->
                     <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/ETHUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">ETHUSDT Rates</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                        {
                        "symbol": "BINANCE:ETHUSDT",
                        "width": "100%",
                        "height": "100%",
                        "locale": "en",
                        "colorTheme": "light",
                        "isTransparent": false
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
                <div class="market_container-item repeated_3_container-item">
                    <!-- <img src="../../img/markets/market_4.svg" alt=""> -->
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NYMEX-CL1!/" rel="noopener" target="_blank"><span class="blue-text">CL1! Quotes</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
                        {
                        "symbol": "NYMEX:CL1!",=
                        "width": "100%",
                        "height" : "100%",
                        "locale": "en",
                        "colorTheme": "light",
                        "isTransparent": false
                    }
                        </script>
                        
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </section>
        <section class="analytics_graphs">
            <article class="econoimic graph-standart">
                <h2>Экономический календарь для трейдеров 
                    Forex 
                    </h2>
              <p>Обязательной частью стратегии 
                    профессионального трейдера является 
                    торговый план. Благодаря Экономическому 
                    календарю вы можете планировать сделки 
                    с точностью до минуты, принимая во внимание предстоящие экономические 
                    отчеты, консенсус-прогнозы и 
                    предполагаемую волатильность. 
                </p>
                <div class="econoimic_graph graph-standart_graph">
                      <!-- TradingView Widget BEGIN -->
                      <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                        {
                        "colorTheme": "light",
                        "isTransparent": false,
                        "width": "100%",
                        "height": "100%",
                        "locale": "en",
                        "importanceFilter": "-1,0,1",
                        "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </article>
            <article class="market-condition graph-standart">
                <h2>Состояние рынка 
                </h2>
                <p>Текущее состояние рынка финансовых 
                    инструментов на рынке. Позволяет узнать 
                    цену за определенное время и увидеть 
                    динамику за разные периоды. 

                </p>
                <div class="market-condition_graph graph-standart_graph">
                    <!-- <img src="../../img/analytics/1.svg" alt=""> -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                        {
                        "colorTheme": "light",
                        "dateRange": "12M",
                        "showChart": true,
                        "locale": "en",
                        "width": "100%",
                        "height": "100%",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": true,
                        "showFloatingTooltip": false,
                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                        "gridLineColor": "rgba(240, 243, 250, 0)",
                        "scaleFontColor": "rgba(106, 109, 120, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                        "tabs": [
                        {
                            "title": "Indices",
                            "symbols": [
                            {
                                "s": "FOREXCOM:SPXUSD",
                                "d": "S&P 500"
                            },
                            {
                                "s": "FOREXCOM:NSXUSD",
                                "d": "US 100"
                            },
                            {
                                "s": "FOREXCOM:DJI",
                                "d": "Dow 30"
                            },
                            {
                                "s": "INDEX:NKY",
                                "d": "Nikkei 225"
                            },
                            {
                                "s": "INDEX:DEU40",
                                "d": "DAX Index"
                            },
                            {
                                "s": "FOREXCOM:UKXGBP",
                                "d": "UK 100"
                            }
                            ],
                            "originalTitle": "Indices"
                        },
                        {
                            "title": "Futures",
                            "symbols": [
                            {
                                "s": "CME_MINI:ES1!",
                                "d": "S&P 500"
                            },
                            {
                                "s": "CME:6E1!",
                                "d": "Euro"
                            },
                            {
                                "s": "COMEX:GC1!",
                                "d": "Gold"
                            },
                            {
                                "s": "NYMEX:CL1!",
                                "d": "Crude Oil"
                            },
                            {
                                "s": "NYMEX:NG1!",
                                "d": "Natural Gas"
                            },
                            {
                                "s": "CBOT:ZC1!",
                                "d": "Corn"
                            }
                            ],
                            "originalTitle": "Futures"
                        },
                        {
                            "title": "Bonds",
                            "symbols": [
                            {
                                "s": "CME:GE1!",
                                "d": "Eurodollar"
                            },
                            {
                                "s": "CBOT:ZB1!",
                                "d": "T-Bond"
                            },
                            {
                                "s": "CBOT:UB1!",
                                "d": "Ultra T-Bond"
                            },
                            {
                                "s": "EUREX:FGBL1!",
                                "d": "Euro Bund"
                            },
                            {
                                "s": "EUREX:FBTP1!",
                                "d": "Euro BTP"
                            },
                            {
                                "s": "EUREX:FGBM1!",
                                "d": "Euro BOBL"
                            }
                            ],
                            "originalTitle": "Bonds"
                        },
                        {
                            "title": "Forex",
                            "symbols": [
                            {
                                "s": "FX:EURUSD",
                                "d": "EUR/USD"
                            },
                            {
                                "s": "FX:GBPUSD",
                                "d": "GBP/USD"
                            },
                            {
                                "s": "FX:USDJPY",
                                "d": "USD/JPY"
                            },
                            {
                                "s": "FX:USDCHF",
                                "d": "USD/CHF"
                            },
                            {
                                "s": "FX:AUDUSD",
                                "d": "AUD/USD"
                            },
                            {
                                "s": "FX:USDCAD",
                                "d": "USD/CAD"
                            }
                            ],
                            "originalTitle": "Forex"
                        }
                        ]
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </article>
            <article class="data ">
                <div class="data_leaders ">
                    <h2>Лидеры рынка 
                    </h2>
                    <p>Принимайте быстрые торговые решения с 
                        помощью метрик лидеров рынка. 

                    </p>
                    <div class="data_leaders-graph ">
                        <!-- <img src="../../img/analytics/2.svg" alt=""> -->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a> by TradingView</div> -->
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "exchange": "US",
                            "showChart": true,
                            "locale": "en",
                            "width": "100%",
                            "height": "100%",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": false,
                            "showFloatingTooltip": false,
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(106, 109, 120, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->

                   
                    </div>
                </div>
                <div class="data_fundamental ">
                    <h2>
                        Фундаментальные данные 

                    </h2>
                    <p>
                        Изучите фундаментальные показатели с 
                        помощью этого глубокого погружения в 
                        деятельность компании, не ограничиваясь 
                        только ценой ее акций. 

                    </p>
                    <div class="data_fundamental-graph ">
                        <!-- <img src="../../img/analytics/3.svg" alt=""> -->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">AAPL Fundamental Data</span></a> by TradingView</div> -->
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
                            {
                            "colorTheme": "light",
                            "isTransparent": false,
                            "largeChartUrl": "",
                            "displayMode": "regular",
                            "width": "100%",
                            "height": "100%",
                            "symbol": "NASDAQ:AAPL",
                            "locale": "en"
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </article>
            <article class="real-time graph-standart">
                <h2>Торговые графики в реальном времени 

                </h2>
                <p>Используйте главный инструмент 
                    трейдеров - технический анализ на графике 
                    финансового инструмента. 

                </p>
                <div class="real-time_graph graph-standart_graph">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_57644"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                        new TradingView.widget(
                        {
                        "width": "100%",
                        "height": "100%",
                        "symbol": "NASDAQ:AAPL",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_57644"
                    }
                        );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </article>
            <article class="forex graph-standart">
                <h2>Кросс-курсы Forex 
                </h2>
                <p>Позволяет отображать в реальном времени 
                    котировки выбранных валют в сравнении с 
                    другими основными валютами. 
                </p>
                <div class="forex-graph graph-standart_graph">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div> -->
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                        "width": "100%",
                        "height": "100%",
                        "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP", 
                        "CHF",
                        "AUD", 
                        "CAD",
                        "NZD",
                        "CNY"
                        ],
                        "isTransparent": false,
                        "colorTheme": "light",
                        "locale": "en"
                    }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </article>
        </section>
        <section class="analytic_baner repeated_2 ">
            <div class="repeated_2_left">
                <img src="../../img/logo_second.svg" alt="">
                <div class="repeated_2_left-text">
                    <h2>324,978,126
                    </h2>
                    <h3>Открытые сделки с прибылью </h3>
                </div>
            </div>
            <div class="repeated_2_right">
                <p>Торгуйте и инвестируйте в акции, валюты, 
                    индексы и сырьевые товары (CFD). </p>
            </div>
        </section>

    </main>

<?php include_once('footer.php'); ?>
