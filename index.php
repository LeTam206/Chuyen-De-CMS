<?php get_header(); ?>

<div class="float-end my-3">
    <?php echo do_shortcode('[input-search]') ?>
</div>

<?php 
    echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true"]');
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Display all products
    );
    $products = wc_get_products($args);
?>

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Sale Product</h4>
                </div>
            </div>
        </div>
         
        <div class="row property__gallery">
            <?php if($products){
            foreach ($products as $product) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="http://localhost/wordpress/wp-content/uploads/2023/10/beanie-with-logo-1-300x300.jpg">
                        <!-- <div class="label new">New</div> -->
                        <ul class="product__hover">
                            <!-- <li><a href="img/product/product-1.jpg" class="image-popup"><span
                                        class="arrow_expand"></span></a></li> -->
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?php echo $product->get_name() ?></a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product__price"><?php echo $product->get_price() ?> $</div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
        
    </div>
</section>



<?php get_footer(); ?>