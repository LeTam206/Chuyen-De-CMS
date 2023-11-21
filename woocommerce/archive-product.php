<?php get_header(); ?>

<<<<<<< HEAD
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>
    <h1>s</h1>
    <?php echo do_shortcode('[products limit="4" columns="2" visibility="featured"]')?>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
              <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
              <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
=======
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
>>>>>>> 6862e1161daf7a3548a7629159b6b5361275b636
        </div>
      </div>
    </div>

<<<<<<< HEAD
    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>

<?php get_footer(); ?>
=======
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
>>>>>>> 6862e1161daf7a3548a7629159b6b5361275b636
