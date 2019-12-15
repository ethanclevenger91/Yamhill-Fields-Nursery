<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Yamhill, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />
        <title>Plants | Yamhill Fields Nursery</title>
        @include('includes.head')
    </head>
    <body>
        <div class="body-wrapper">
            <header>
                @include('includes.header-components')
                <div class="inner-wrapper">
                    <div class="subtitle-container">
                        <h2 class="subtitle-container__subtitle">Plants</h2>
                    </div>
                </div>
            </header>
            @include('includes.logo')
            @include('includes.nav')
            <div class="content">
                <div class="inner-wrapper">
                    <div class="content-row">
                        <div class="col-sma-12">
                            <h3>Buy Plants Here</h3>
                            <p>Come buy lots of house plants at our fantastic nursery.</p>
                            <p>NOTE: Prices and supplies are approximate and are provided as an estimate only.</p>
                        </div>
                        <div class="plant cactus col-sma-6">
                            <h4 class="plant__title">Cacti</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">Pretty and small, perfect for an easy house-plant.</div>
                            <div class="plant__price">$5</div>
                        </div>
                        <div class="plant sapling col-sma-6">
                            <h4 class="plant__title">Decidous and Evergreen Saplings</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">Time to get an outdoor sapling for your yard or farm.  Assorted Varieties.</div>
                            <div class="plant__price">Typically around $70-$100</div>
                        </div>
                        <div class="plant blueberry col-sma-6">
                            <h4 class="plant__title">Blueberry</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">Now's your chance to get fresh backyard blueberries!</div>
                            <div class="plant__price">$15</div>
                        </div>
                        <div class="plant fern col-sma-6">
                            <h4 class="plant__title">Fern</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">Low maintennce and very good as a background or center plant.</div>
                            <div class="plant__price">$20</div>
                        </div>
                        <div class="plant potted-plants col-sma-6">
                            <h4 class="plant__title">Potted Plants</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">Time to get an outdoor sapling for your yard or farm.</div>
                            <div class="plant__price">$30</div>
                        </div>
                        <div class="plant grass col-sma-6">
                            <h4 class="plant__title">Grass</h4>
                            <div class="plant__background-image"></div>
                            <div class="plant__description">We sell small pots of grass for those you in need of a small addition
                                to a garden or yard.</div>
                            <div class="plant__price">$4</div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(1, "mobileNav");
                    setCurrentPage(1, "desktopNav");
                });
            </script>
        </div>
    </body>
</html>