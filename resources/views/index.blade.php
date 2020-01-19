<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />

        <title>Yamhill Fields Nursery</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/main-styles.css" />
        @include('includes.head')
    </head>
    <body class="page-index">
        <div class="body-wrapper">
            <header>
                <div class="header__background"></div>
                <div class="inner-wrapper">
                    @include('includes.header-components')
                    <div class="subtitle-container">
                        <h2 class="subtitle-container__subtitle">The Place to Buy Outdoor and Indoor Plants!</h2>
                    </div>
                </div>
            </header>
            @include('includes.nav')
            <div class="content">
                <div class="inner-wrapper">
                    <div class="content-row">
                        <div class="col-sma-7">
                            <div class="index-content-image one"></div>		     
                        </div>
                        <div class="col-sma-5">
                            <h3>The Best Nursery in Yamhill County</h3>
                            <p class="content__highlighted-phrase"><strong>Get all your gardening and landscaping plants and supplies in one stop!</strong></p>
                            <p>Grass, Shrubs, House Plants, and Saplings.</p>
                            <p>Gardening and Landscaping Tools.</p>
                            <p>Open Mon-Sat 9:00 am-9:00 pm, closed Sunday. Questions: call us at 503-538-8204.</p>
                            <p>Located near Portland in the Willamette Valley in Dundee.</p>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="col-sma-1">&nbsp;</div>
                        <div class="col-sma-10">
                            <h3>Serving Gardners and Landscapers Since 1982</h3>
                            <p>We've had the honor of selling plants and landscaping and gardening supplies to our customers for many years.
                                Drop and by and see why garderners and landscapers make us their go-to garden and landscaping store!</p>
                        </div>
                        <div class="col-sma-1">&nbsp;</div>
                    </div>	
                    <div class="content-row">
                        <div class="col-sma-12">
                            <?php
                            global $post;
                            $args = array('posts_per_page' => 3);
                            $postsToDisplay = get_posts($args);
                            foreach ($postsToDisplay as $post) : setup_postdata($post);
                                ?>      
                                <div class="col-sma-4">
                                    <div class="blog-post">
                                        <a href="/our-blog"><h4 class="blog-post__title"><?php the_title(); ?></h4></a>
                                        <div class="blog__categories"><?php
                                            $categories = get_the_category();
                                            $h = 0;
                                            foreach ($categories as $category) {
                                                $h++;
                                            }
                                            $h = $h - 1;
                                            $i = 0;
                                            foreach ($categories as $category) {
                                                $result = "";
                                                if ($i < $h) {
                                                    $result .= $category->name . ", ";
                                                } else {
                                                    $result .= $category->name;
                                                }
                                                echo $result;
                                                $i++;
                                            }
                                            ?>
                                        </div>
                                        <div class="blog__date"><?php the_date(); ?></div>
                                        <div class="blog__image"><a href="/our-blog"><?php the_post_thumbnail( 'thumbnail' ); ?></a></div>
                                        <div class="blog__content"><?php the_excerpt(); ?></div>
                                        <div class="clear-both"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>	
                    <div class="subfooter-container">
                        <div class="nursery-view__subheader"><h3>You could be here looking at plants!</h3></div>
                        <div class="subfooter-container__background content__content-image"></div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(0, "mobileNav");
                    setCurrentPage(0, "desktopNav");
                });
            </script>
        </div>
    </body>
</html>