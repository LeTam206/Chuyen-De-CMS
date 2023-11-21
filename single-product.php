<?php get_header(); ?>
<?php
if (is_product()) {

    $product_id = get_the_ID();

    $product = wc_get_product($product_id);

    if ($product) {

        $product_title = $product->get_title();
        $product_price = $product->get_price();
        $product_permalink = get_permalink($product_id);
        $product_description = $product->get_description();
        $product_image = $product->get_image();
        $product_date = get_the_date('Y-m-d', $product_id);
        $related_products = wc_get_related_products($product_id, 5);
        $attachment_ids = $product->get_gallery_image_ids();
    }

    // Lấy danh sách 10 sản phẩm liên quan
    $related_products = wc_get_related_products($product_id, 7);
} ?>
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="http://localhost/wordpress/"><i class="fa fa-home"></i> Home</a>
                    <a href="#">Shop </a>
                    <span>
                        <?php echo $product_title ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__left product__thumb nice-scroll">

                    </div>
                    <div class="product__details__slider__content">
                        <!-- <img src=<?php //echo get_the_post_thumbnail($product_id) ?>> -->
                        <img src="<?php echo get_the_post_thumbnail_url($product_id) ?>" alt=""
                            class="border rounded-4">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <div class="product__details__text">
                    <h3>
                        <?php echo $product_title ?>
                    </h3>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>( 138 reviews )</span>
                    </div>
                    <div class="product__details__price">
                        $
                        <?php echo $product->price;
                        if ($product->sale_price != ''):
                            ?>
                            <span>$
                                <?php echo $product->regular_price ?>
                            </span>
                        <?php endif ?>
                    </div>
                    <p>
                        <?php //echo $product_description ?>
                    </p>
                    <div class="product__details__button">
                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                        <a href="?add-to-cart=<?php echo $product->id ?>" class="site-btn add_to_cart_button ms-2">
                            <span class="icon_bag_alt"></span> Add to cart
                            <!-- <button class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a></button> -->
                        </a>
                        <!-- <a href="#" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a> -->
                        <ul>
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <!-- <li><a href="#"><span class="icon_adjust-horiz"></span></a></li> -->
                        </ul>
                    </div>
                    <!-- <div class="product__details__widget">
                        <ul>
                            <li>
                                <span>Availability:</span>
                                <div class="stock__checkbox">
                                    <label for="stockin">
                                        In Stock
                                        <input type="checkbox" id="stockin">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available color:</span>
                                <div class="color__checkbox">
                                    <label for="red">
                                        <input type="radio" name="color__radio" id="red" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label for="black">
                                        <input type="radio" name="color__radio" id="black">
                                        <span class="checkmark black-bg"></span>
                                    </label>
                                    <label for="grey">
                                        <input type="radio" name="color__radio" id="grey">
                                        <span class="checkmark grey-bg"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Available size:</span>
                                <div class="size__btn">
                                    <label for="xs-btn" class="active">
                                        <input type="radio" id="xs-btn">
                                        xs
                                    </label>
                                    <label for="s-btn">
                                        <input type="radio" id="s-btn">
                                        s
                                    </label>
                                    <label for="m-btn">
                                        <input type="radio" id="m-btn">
                                        m
                                    </label>
                                    <label for="l-btn">
                                        <input type="radio" id="l-btn">
                                        l
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Promotions:</span>
                                <p>Free shipping</p>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <h6>Description</h6>
                            <p>
                                <?php echo $product_description ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="related__title">
                    <h5>RELATED PRODUCTS</h5>
                </div>
            </div>
            <?php
            if (!empty($related_products)) {

                foreach ($related_products as $related_product_id) {
                    $related_product = wc_get_product($related_product_id);
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg=''>
                                <?php if ($related_product->sale_price != "") { ?>
                                    <div class="label sale mt-2 rounded-4" style="z-index: 1">Sale
                                        <?php echo 100 - (number_format($related_product->sale_price / $related_product->regular_price * 100, 0)) ?>%
                                    </div>
                                <?php } elseif (get_post_meta($related_product->id, 'trangthai', true) == 'New') { ?>
                                    <div class="label new mt-2 rounded-4" style="z-index: 1">New </div>
                                <?php } ?>

                                <a href="<?php echo esc_url(get_permalink($related_product->id)) ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($related_product->id) ?>"
                                        class="product__hover border rounded-4 img_product">
                                </a>
                                <ul class="product__hover">
                                    <!-- <li><a href="http://localhost/wordpress/wp-content/uploads/2023/10/<?php echo $related_product->slug ?>-1-300x300.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li> -->
                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                    <li>
                                        <a href="?add-to-cart=<?php echo $related_product->id ?>"
                                            class="product_type_simple add_to_cart_button ajax_add_to_cart" data-quantity="1"
                                            data-product_id="<?php echo $related_product->id ?>">
                                            <span class="icon_bag_alt"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text pt-0">
                                <h6><a href="<?php echo esc_url(get_permalink($related_product->id)) ?>">
                                        <?php echo $related_product->name ?>
                                    </a></h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <?php if ($related_product->sale_price != "") { ?>
                                    <div class="d-flex justify-content-center">
                                        <div class="product__normalprice text-secondary text-decoration-line-through me-3">$
                                            <?php echo $related_product->regular_price ?>
                                        </div>
                                        <div class="product__price text-danger">$
                                            <?php echo $related_product->sale_price ?>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="product__price text-danger">$
                                        <?php echo $related_product->price ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

            <?php
            if (comments_open() || get_comments_number()):
                comments_template($file = '/comments.php');
            endif;
            ?>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Product Details Section End -->

<script>
    const menu_item_shop = document.querySelector('#menu_item_5249');
    menu_item_shop.classList.add('active');
</script>

<?php get_footer(); ?>