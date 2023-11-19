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
                <!-- <div class="label new mt-2 rounded-4" style="z-index: 1">New</div> -->
                <a href="http://localhost/wordpress/product/<?php echo $product->slug ?>">
                  <!-- <img src="http://localhost/wordpress/wp-content/uploads/2023/11/luma-stability-ball-pink-300x300.jpg"
                                class="product__hover border rounded-4 img_product"> -->
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
                <h6><a href="#">
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
      } ?>
    </div>

  </div>
</section>

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a href="#" class="page-link">Previous</a>
    </li>
    <?php $num_page = $products_count / $posts_per_page;

    for ($i = 1; $i <= ceil($num_page); $i++) { ?>
      <li class="page-item page-number-item"><a class="page-link"
          href="http://localhost/wordpress/shop/page/<?php echo $i ?>">
          <?php echo $i ?>
        </a></li>
    <?php } ?>

    <li class="page-item">
      <a href="#" class="page-link">Next</a>
    </li>
  </ul>
</nav> -->

<!-- Pagination -->
<div class="text-center mb-5">
  <?php wp_pagenavi(); ?>
</div>



<script>
  const menu_item_shop = document.querySelector('.menu_item_shop');
  menu_item_shop.classList.add('active');

</script>

<?php get_footer(); ?>