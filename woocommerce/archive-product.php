<?php get_header(); ?>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__links">
          <a href="http://localhost/wordpress/"><i class="fa fa-home"></i> Home</a>
          <span>Shop</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->

<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$posts_per_page = 16;

$args = array(
  'post_type' => 'product',
  'posts_per_page' => $posts_per_page,
  'paged' => $paged,
);

$products = wc_get_products($args);
$products_count = wp_count_posts('product')->publish;
//echo 'Count products: ' . $products_count;
?>

<section class="product spad">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-4 col-md-4">
        <div class="section-title mb-0">
          <h4>All Product</h4>
        </div>
      </div>
    </div>
    <div class="row property__gallery">
      <?php if ($products) {
        foreach ($products as $product) { ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mix women">
            <div class="product__item">
              <div class="product__item__pic set-bg" data-setbg=''>
                <?php if ($product->sale_price != "") { ?>
                  <div class="label sale mt-2 rounded-4" style="z-index: 1">Sale
                    <?php echo 100 - (number_format($product->sale_price / $product->regular_price * 100, 0)) ?>%
                  </div>
                <?php } elseif (get_post_meta($product->id, 'trangthai', true) == 'New') { ?>
                  <div class="label new mt-2 rounded-4" style="z-index: 1">New </div>
                <?php } ?>

                <a href="<?php echo esc_url(get_permalink($product->id)) ?>">
                  <img src="<?php echo get_the_post_thumbnail_url($product->id) ?>"
                    class="product__hover border rounded-4 img_product">
                </a>
                <ul class="product__hover">
                  <!-- <li><a href="http://localhost/wordpress/wp-content/uploads/2023/10/<?php echo $product->slug ?>-1-300x300.jpg" class="image-popup"><span
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
                <?php if ($product->sale_price != "") { ?>
                  <div class="d-flex justify-content-center">
                    <div class="product__normalprice text-secondary text-decoration-line-through me-3">$
                      <?php echo $product->regular_price ?>
                    </div>
                    <div class="product__price text-danger">$
                      <?php echo $product->sale_price ?>
                    </div>
                  </div>
                <?php } else { ?>
                  <div class="product__price text-danger">$
                    <?php echo $product->price ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php }
      } ?>
    </div>

  </div>
</section>

<!-- Pagination -->
<div class="text-center mb-5">
  <?php wp_pagenavi(); ?>
</div>

<script>
  const menu_item_shop = document.querySelector('#menu_item_5249');
  menu_item_shop.classList.add('active');

</script>

<?php get_footer(); ?>

