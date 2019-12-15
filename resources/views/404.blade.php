<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Yamhill, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />
        <title>404 | Yamhill Fields Nursery</title>
        @include('includes.head')
    </head>
    <body class="page-404">
        <div class="body-wrapper">
            <header>
                @include('includes.header-components')
                <div class="inner-wrapper">
                    <div class="subtitle-container">
                        <h2 class="subtitle-container__subtitle">404 Error</h2>
                    </div>
                </div>
            </header>
            @include('includes.logo')
            @include('includes.nav')
            <div class="content">
                <div class="inner-wrapper">
                    <div class="content-row">
                        <div class="col-sma-5">
                            <h3>404 Error-Page Not Found</h3>
                            <p>Bad Link</p>
                        </div>
                        <div class="col-sma-7">
                            <div class="content-background-container">
                                <div class="content__content-image four04-one"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                });
            </script>
        </div>
    </body>
</html>