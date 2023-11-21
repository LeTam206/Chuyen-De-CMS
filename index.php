<?php get_header(); ?>

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="categories__item categories__large__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/categories/category-1.jpg') ?>">
                    <div class="categories__text">
                        <h1>Women’s fashion</h1>
                        <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                            edolore magna aliquapendisse ultrices gravida.</p>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="<?php echo get_theme_file_uri('images/categories/category-2.jpg') ?>">
                            <div class="categories__text">
                                <h4>Men’s fashion</h4>
                                <p>358 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="<?php echo get_theme_file_uri('images/categories/category-3.jpg') ?>">
                            <div class="categories__text">
                                <h4>Kid’s fashion</h4>
                                <p>273 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="<?php echo get_theme_file_uri('images/categories/category-4.jpg') ?>">
                            <div class="categories__text">
                                <h4>Cosmetics</h4>
                                <p>159 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="categories__item set-bg"
                            data-setbg="<?php echo get_theme_file_uri('images/categories/category-5.jpg') ?>">
                            <div class="categories__text">
                                <h4>Accessories</h4>
                                <p>792 items</p>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<?php
//echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]');
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    // Display all products
);
$products = wc_get_products($args);
?>

<!-- Product Sale Section Begin-->
<section class="product spad">
    <div class="container">
        <?php echo do_shortcode('[input-search]') ?>
        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <div class="section-title mb-0">
                    <h4>Sale Product</h4>
                </div>
            </div>
        </div>

        <div class="row property__gallery">
            <?php if ($products) {
                foreach ($products as $product) {
                    if ($product->sale_price != "") { ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg=''>
                                    <div class="label sale mt-2 rounded-4" style="z-index: 1">Sale
                                        <?php echo 100 - (number_format($product->sale_price / $product->regular_price * 100, 0)) ?>%
                                    </div>
                                    <a href="<?php echo esc_url(get_permalink($product->id)) ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url($product->id) ?>"
                                            class="product__hover border rounded-4 img_product">
                                    </a>
                                    <ul class="product__hover">
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li>
                                            <a href="?add-to-cart=<?php echo $product->id ?>"
                                                class="product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1"
                                                data-product_id="<?php echo $product->id ?>">
                                                <span class="icon_bag_alt"></span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="product__item__text pt-0">
                                    <h6><a href="<?php echo esc_url(get_permalink($product->id)) ?>">
                                            <?php echo $product->name ?>
                                        </a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="product__normalprice text-secondary text-decoration-line-through me-3">$
                                            <?php echo $product->regular_price ?>
                                        </div>
                                        <div class="product__price text-danger">$
                                            <?php echo $product->sale_price ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php }
                }
            } ?>
        </div>

    </div>
</section>
<!-- Product Sale Section End-->

<!-- Product New Section Begin-->
<section class="product spad">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <div class="section-title mb-0">
                    <h4>New Product</h4>
                </div>
            </div>
        </div>

        <div class="row property__gallery">
            <?php if ($products) {
                foreach ($products as $product) {
                    if (get_post_meta($product->id, 'trangthai', true) == 'New') { ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg=''>
                                    <div class="label new mt-2 rounded-4" style="z-index: 1">New</div>
                                    <a href="<?php echo esc_url(get_permalink($product->id)) ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url($product->id) ?>"
                                            class="product__hover border rounded-4 img_product">
                                    </a>
                                    <ul class="product__hover">
                                        <!-- <li><a href="<?php echo get_the_post_thumbnail_url($product->id) ?>" class="image-popup"><span
                                        class="arrow_expand"></span></a></li> -->
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li>
                                            <a href="?add-to-cart=<?php echo $product->id ?>"
                                                class="product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1"
                                                data-product_id="<?php echo $product->id ?>">
                                                <span class="icon_bag_alt"></span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="product__item__text pt-0">
                                    <h6><a href="<?php echo esc_url(get_permalink($product->id)) ?>">
                                            <?php echo $product->name ?>
                                        </a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price text-danger">$
                                        <?php echo $product->price ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                }
            } ?>
        </div>

    </div>
</section>
<!-- Product New Section End-->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="discount__pic">
                    <img src="<?php echo get_theme_file_uri('images/discount.jpg') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="discount__text">
                    <div class="discount__text__title">
                        <span>Discount</span>
                        <h2>Winter 2023</h2>
                        <h5><span>Sale Up To</span> 50%</h5>
                    </div>
                    <div class="discount__countdown" id="countdown-time">
                        <div class="countdown__item">
                            <span>22</span>
                            <p>Days</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>Hour</p>
                        </div>
                        <div class="countdown__item">
                            <span>46</span>
                            <p>Min</p>
                        </div>
                        <div class="countdown__item">
                            <span>05</span>
                            <p>Sec</p>
                        </div>
                    </div>
                    <a href="#">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<script>
    const menu_item_home = document.querySelector('#menu_item_5247');
    menu_item_home.classList.add('active');
</script>

<?php get_footer(); ?>