<?php
declare(strict_types = 1);
//define('WP_USE_THEMES', false);
//require('./blog/wp-blog-header.php');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Your friendly Portland area landscaping and gardening store is here for business." />
        <meta name="keywords" content="nursery, Portland, Yamhill, Willamette Valley, Oregon, plants, grass, shrubs, trees, garden, gardening, landscaping" />
        <title>Blog | Yamhill Fields Nursery</title>
        @include('includes.head')
    </head>
    <body>
        <div class="body-wrapper">
            <header>
                @include('includes.header-components')
                <div class="subtitle-container">
                    <h2 class="subtitle-container__subtitle">Blog</h2>
                </div>
            </header>
            @include('includes.logo')
            @include('includes.nav')

            <div class="content">
                <div class="content-row">
                    <div class="col-sma-5">
                        <h3>Our blog</h3>                 
                        <div class="blog-posts" id="blogPosts">
                            <?php
                            global $post;
                            $args = array('posts_per_page' => 1000);
                            $postsToDisplay = get_posts($args);
                            foreach ($postsToDisplay as $post) : setup_postdata($post);
                                ?>                                                       
                                <div class="blog-post">
                                    <h4 class="blog-post__title"><?php the_title(); ?></h4>
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
                                    <div class="blog__image"><?php the_post_thumbnail(); ?></div>
                                    <div class="blog__content"><?php the_content(); ?></div>
                                    <div class="clear-both"></div>
                                </div>
                            <?php endforeach; ?>
                        </div>               
                    </div>
                    <div class="col-sma-7">
                        <div class="content-background-container">
                            <div class="content__content-image about-one"></div>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.footer')
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    setCurrentPage(3, "mobileNav");
                    setCurrentPage(3, "desktopNav");
                });
            </script>
        </div>
    </body>
</html>