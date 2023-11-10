<?php get_header(); ?>

<!-- Banner -->
<img src="<?php echo get_theme_file_uri( 'images/banner/banner4.jpg' ) ?>" alt="">

<?php 
    //echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true"]');
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Display all products
    );
    $products = wc_get_products($args);
?>

<!-- Product Sale -->
<section class="product spad">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-4 col-md-4">
                <div class="section-title mb-0">
                    <h4>Sale Product</h4>
                </div>
            </div>
        </div>

        <div class="row property__gallery">
            <?php if($products){
            foreach ($products as $product) { 
                if ($product->sale_price != "") { ?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg='' style="height: 300px">
                        <div class="label sale mt-1" style="z-index: 1">Sale
                            <?php echo 100-(number_format($product->sale_price/$product->regular_price*100, 0)) ?>%
                        </div>
                        <a href="http://localhost/wordpress/product/<?php echo $product->slug ?>">
                            <img src='http://localhost/wordpress/wp-content/uploads/2023/10/<?php echo $product->slug ?>-1-600x600.jpg'
                                class="product__hover" alt="">
                        </a>
                        <ul class="product__hover">
                            <!-- <li><a href="img/product/product-1.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li> -->
                            <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                            <li>
                                <a href="?add-to-cart=<?php echo $product->id ?>"><span class="icon_bag_alt"></span></a>
                                <!-- <form class="cart" method="post" enctype="multipart/form-data">
                                    <button type="submit" class="border-0 rounded-circle bg-white px-3 py-2 btn-add-to-cart" name="add-to-cart" value="<?php echo $product->id ?>"><i class="fa-solid fa-bag-shopping btn-add-to-cart"></i></button>
                                </form> -->
                                
                            </li>
                        </ul>

                    </div>
                    <div class="product__item__text pt-0">
                        <h6><a href="#"><?php echo $product->name ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="product__normalprice text-secondary text-decoration-line-through me-3">$
                                <?php echo $product->regular_price ?></div>
                            <div class="product__price">$ <?php echo $product->sale_price ?></div>
                        </div>

                    </div>
                </div>
            </div>
            <?php } } }?>
        </div>

    </div>
</section>



<?php get_footer(); ?>