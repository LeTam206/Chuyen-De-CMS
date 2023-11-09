<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    <?php 
        $cart = WC()->cart;
        if($cart->get_cart_contents_count() > 0){ ?>
            <section class="shop-cart spad">
            <div class="container">
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($cart->get_cart() as $cart_item_key => $cart_item) { ?>
                                    <tr>
                                        <td class="cart__product__item">
                                            <img src="" alt="">
                                            <div class="cart__product__item__title">
                                                <h6><?php echo get_the_title($cart_item['product_id']) ?></h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">
                                            <?php echo 'price' ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </section>

        <?php } ?>

</body>

</html>