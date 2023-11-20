<?php get_header() ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="http://localhost/wordpress/"><i class="fa fa-home"></i> Home</a>
                    <span>Shopping cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<?php
$total_price = 0;
$cart = WC()->cart;
if ($cart->is_empty()) {
    echo 'Cart is empty.';
} else { ?>
    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop__cart__table">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart->get_cart() as $cart_item_key => $cart_item) {
                                        $product_id = $cart_item['product_id'];
                                        $product = wc_get_product($product_id);
                                        echo $cart_item_key . 'ENDD ';
                                        $quantity = $cart_item['quantity'];
                                        $total_price_item = $product->price * $quantity;
                                        $total_price += $total_price_item; ?>

                                        <input type="hidden" name="update_cart" value="update_cart" />
                                        <input type="hidden" name="product_id" value="<?php echo $product_id ?>" />
                                        <tr>
                                            <td class="cart__product__item">
                                                <img class="border rounded-4"
                                                    src="<?php echo get_the_post_thumbnail_url($product->id) ?>" alt=""
                                                    style="width: 140px; height: 140px">
                                                <div class="cart__product__item__title">
                                                    <h6 style="padding-top: 35px">
                                                        <?php echo $product->name ?>
                                                    </h6>
                                                </div>
                                            </td>
                                            <td class="cart__price">$
                                                <?php echo $product->price ?>
                                            </td>
                                            <td class="cart__quantity">
                                                <div class="pro-qty">
                                                    <input type="text" name="quantity" value="<?php echo $quantity ?>">
                                                </div>
                                            </td>
                                            <td class="cart__total">$
                                                <?php echo $total_price_item ?>
                                            </td>
                                            <td class="cart__close">
                                                <a
                                                    href="http://localhost/wordpress/cart/?remove_item=<?php echo $cart_item_key ?>&_wpnonce=99b38d3184"><span
                                                        class="icon_close"></span></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="cart__btn">
                            <a href="http://localhost/wordpress/shop/"><i class="fa-solid fa-arrow-left me-2"></i>Continue
                                Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="cart__btn update__btn">
                            <button type="submit" name="update_cart_qty" class="site-btn"><i
                                    class="fa-solid fa-rotate me-2"></i> Update
                                cart</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-7">
                    <div class="discount__content d-flex">
                        <h6 class="mt-3">Discount codes:</h6>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$
                                    <?php echo $total_price ?>
                                </span></li>
                            <li>Total <span>$
                                    <?php echo $total_price ?>
                                </span></li>
                        </ul>
                        <a href="http://localhost/wordpress/checkout/" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->

<?php } ?>

<?php get_footer() ?>