<?php

/*Template Name: Blog Page */

get_header();

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Set to -1 to display all posts
    'order' => 'DESC',
    'orderby' => 'date',
);

$posts = new WP_Query($args);
?>

<div class="container blog mt-5">
    <div class="blog-header">
        <h2 class="text-center title">The Blog</h2>
        <p class="desc text-center mx-auto mt-3">This is a place containing articles that you can
            read, hopefully it will help you!</p>
    </div>
</div>

<div class="blog-posts my-5">
    <div class="row justify-content-center">
        <?php while ($posts->have_posts()) {
            $posts->the_post(); ?>

            <div class="col-md-3 bg-light shadow mx-4 my-3 p-3">
                <a href="#">
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                </a>
                <div class="content mt-3">
                    <div class="d-flex text-secondary">
                        <div class="author">
                            <i class="fa-solid fa-user"></i>
                            <?php the_author() ?>
                        </div>
                        <div class="date text-secondary mb-3 ms-auto">
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo get_the_date() ?>
                        </div>
                    </div>

                    <a href="#" class="title h6 text-decoration-none fw-bold text-uppercase mt-5">
                        <?php echo get_the_title() ?>
                    </a>
                    <div class="short-desc my-3">
                        <?php echo the_excerpt() ?>
                    </div>
                    <a href="<?php echo esc_url(get_permalink()) ?>" class="btn btn-secondary btn-read">READ ARTICLE</a>
                </div>
            </div>

        <?php } ?>
    </div>
</div>

<script>
    const menu_item_blog = document.querySelector('#menu_item_5263');
    menu_item_blog.classList.add('active');
</script>

<?php get_footer(); ?>