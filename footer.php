<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-1.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-2.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-3.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-4.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-5.jpg') ?>">
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg"
                    data-setbg="<?php echo get_theme_file_uri('images/instagram/insta-6.jpg') ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="<?php echo esc_url(home_url('/')) ?>">
                            <?php the_custom_logo(); ?>
                        </a>
                    </div>
                    <p>Discover unique styles and new fashion trends at the leading clothing site. Beautiful anytime,
                        anywhere!</p>
                    <div class="footer__payment">
                        <a href="#"><img src="<?php echo get_theme_file_uri('images/payment/payment-1') ?>" alt=""></a>
                        <a href="#"><img src="<?php echo get_theme_file_uri('images/payment/payment-2') ?>" alt=""></a>
                        <a href="#"><img src="<?php echo get_theme_file_uri('images/payment/payment-3') ?>" alt=""></a>
                        <a href="#"><img src="<?php echo get_theme_file_uri('images/payment/payment-4') ?>" alt=""></a>
                        <a href="#"><img src="<?php echo get_theme_file_uri('images/payment/payment-5') ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <?php
                        //wp_nav_menu();
                        $menu_items = wp_get_nav_menu_items('header-menu');
                        if ($menu_items):
                            foreach ($menu_items as $menu_item): ?>
                                <li><a href="<?php echo $menu_item->url ?>">
                                        <?php echo $menu_item->title ?>
                                    </a></li>
                            <?php endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>NEWSLETTER</h6>
                    <form action="#">
                        <input type="text" id="email" placeholder="Email">
                        <button id="subscribe-btn" class="site-btn">Subscribe</button>
                        <div id="subscription-message"></div>
                    </form>
                    <script>
                        // Ajax để xử lý đăng ký
                        document.getElementById('subscribe-btn').addEventListener('click', function (e) {
                            e.preventDefault()
                            var email = document.getElementById('email').value;
                            console.log(1);

                            // Kiểm tra xem email có hợp lệ không (cần thêm kiểm tra hợp lệ nếu cần)
                            if (email.trim() !== '') {
                                // Gửi request Ajax để xử lý đăng ký
                                var xhr = new XMLHttpRequest();
                                xhr.open('POST', ajaxurl, true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
                                xhr.onload = function () {
                                    var response = JSON.parse(xhr.responseText);
                                    document.getElementById('subscription-message').innerHTML = response.message;
                                };
                                xhr.send('action=subscribe_user&email=' + email);
                            } else {
                                document.getElementById('subscription-message').innerHTML = 'Vui lòng nhập địa chỉ email.';
                            }
                        });
                    </script>
                    <div class="footer__social">
                        <a href="https://www.facebook.com/myshoper123/?locale=vi_VN" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright__text">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> | All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo get_theme_file_uri('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/bootstrap.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.magnific-popup.min.j') ?>s"></script>
<script src="<?php echo get_theme_file_uri('js/jquery-ui.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/mixitup.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.countdown.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.slicknav.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/owl.carousel.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/jquery.nicescroll.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri('js/main.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

    // When click button add to cart
    const arr_add_to_cart_button = document.getElementsByClassName('add_to_cart_button');
    for (let i = 0; i < arr_add_to_cart_button.length; i++) {
        const e = arr_add_to_cart_button[i];
        e.addEventListener('click', function () {
            // Show toastr success when add cart successfully
            toastr["success"]("Add to cart successfully!");

        });
    };

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

</script>

<?php wp_footer(); ?>

</body>
</html>