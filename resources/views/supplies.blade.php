<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Yamhill, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />
        <title>Supplies | Yamhill Fields Nursery</title>
        @include('includes.head')
    </head>
    <body>
        <div class="body-wrapper">
            <header>
                <div class="header__background"></div>
                <div class="inner-wrapper">
                    @include('includes.header-components')
                    <div class="subtitle-container">
                        <h2 class="subtitle-container__subtitle">Supplies</h2>
                    </div>
                </div>
            </header>
            @include('includes.nav')
            <div class="content">
                <div class="inner-wrapper">
                    <div class="content-row">
                        <div class="col-sma-12">
                            <h3>Supplies for Sale</h3>
                            <p>Come buy lots of house plants at our fantastic nursery.</p>
                        </div>
                        <div class="supply zero col-sma-6 col-lar-4">
                            <h4 class="supply__title">Assorted Garden Supplies</h4>
                            <div class="supply__background-image"></div>
                            <div class="supply__zoom-in-container">
                                <div class="supply__zoom-in"></div>
                            </div>
                            <div class="supply__inspect-background"></div>
                            <div class="supply__description">Gardening shovels, work gloves, pruning supplies, etc.  
                                Useful small gardening shovel, great for planting small potted plants.</div>
                            <div class="supply__price">Assorted prices</div>
                        </div>
                        <div class="supply one col-sma-6 col-lar-4">
                            <h4 class="supply__title">Watering can</h4>
                            <div class="supply__background-image"></div>
                            <div class="supply__zoom-in-container">
                                <div class="supply__zoom-in"></div>
                            </div>
                            <div class="supply__inspect-background"></div>
                            <div class="supply__description">Assorted varieties.  Great for your houseplants, small gardens, and hard-to-reach plants.</div>
                            <div class="supply__price">Assorted prices</div>
                        </div>
                        <div class="supply two col-sma-6 col-lar-4">
                            <h4 class="supply__title">Potting Soil </h4>
                            <div class="supply__background-image"></div>
                            <div class="supply__zoom-in-container">
                                <div class="supply__zoom-in"></div>
                            </div>
                            <div class="supply__inspect-background"></div>
                            <div class="supply__description">Very helpful for new plants!  Great for planting seeds in small and large pots.
                                Give them the best and watch your new plants grow heartily.</div>
                            <div class="supply__price">Assorted prices</div>
                        </div>
                        <div class="supply three col-sma-6 col-lar-4">
                            <h4 class="supply__title">Clay and plastic pots</h4>
                            <div class="supply__background-image"></div>
                            <div class="supply__zoom-in-container">
                                <div class="supply__zoom-in"></div>
                            </div>
                            <div class="supply__inspect-background"></div>
                            <div class="supply__description">Great for planting seeds in small and large pots.</div>
                            <div class="supply__price">Assorted prices</div>
                        </div>		
                        <div class="supply four col-sma-6 col-lar-4">
                            <h4 class="supply__title">Seeds (assorted)</h4>
                            <div class="supply__background-image"></div>
                            <div class="supply__zoom-in-container">
                                <div class="supply__zoom-in"></div>
                            </div>
                            <div class="supply__inspect-background"></div>
                            <div class="supply__description">Supplies vary.  We sell a variety of flower, vegetable, and other seeds for your garden 
                                or landscape.</div>
                            <div class="supply__price">Assorted prices</div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(2, "mobileNav");
                    setCurrentPage(2, "desktopNav");
                });
            </script>
            <script type="text/javascript" src="/assets/javascript/supply-hover-over-zoom-in.js"></script>
        </div>
    </body>
</html>