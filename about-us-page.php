<?php
/*Template Name: About Us Page */
?>
<?php get_header(); ?>

<div class="header-au">
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="http://localhost/wordpress/"><i class="fa fa-home"></i> Home</a>
                        <span>About us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="title">
        <h2 class="text-center text-light fw-bold">ABOUT US</h2>
    </div>
</div>

<div class="container about-us-content" style="margin-top: 5rem; margin-bottom: 5rem">
    <div class="row history">
        <div class="col-md 6 my-auto">
            <h2>History</h2>
            <p class="mt-3">Our clothing website has had a journey full of adventure and effort, born from the
                passion and vision
                of a group of creative people. Starting from the simple yet powerful idea of giving people a unique
                online fashion shopping experience, we started building our platform with unwavering commitment.</p>
            <p>
                Through our tireless efforts, our site has grown from a small idea into a thriving community, where
                shoppers not only find the latest fashion trends but also participate in A unique and personal
                online shopping experience. Our history is a story of perseverance, creativity and unrelenting
                passion, the goal of which is to bring joy and satisfaction to our customers.
            </p>
        </div>
        <div class="col-md 6">
            <img src="<?php echo get_theme_file_uri('./images/image-in-about-us-page.jpg') ?>" alt="">
        </div>
    </div>
    <div class="row miss-and-viss mt-5">
        <div class="col-md-6">
        <img src="<?php echo get_theme_file_uri('./images/image-2-in-about-us-page.jpg') ?>" alt="">
        </div>
        <div class="col-md-6 my-auto">
            <h2>Mission & Vission</h2>
            <p class="mt-3">We believe that everyone has a unique personality, and choosing clothes is not just about
                covering the
                body, but also about expressing yourself and celebrating unique beauty. Our vision is to create a unique
                online shopping space where people can discover and choose clothes that reflect their individuality and
                lifestyle.</p>
            <p>We are committed to providing not only top fashion products but also a great shopping experience. By
                combining diversity, creativity and quality, we hope our website will become the ideal destination for
                those who are passionate about fashion and want to shine from within.</p>
        </div>
    </div>
</div>


<script>
    const menu_item_aboutus = document.querySelector('#menu_item_5248');
    menu_item_aboutus.classList.add('active');
</script>

<?php get_footer(); ?>