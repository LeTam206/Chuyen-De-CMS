<?php

add_action('after_setup_theme', 'my_theme_support');
add_action('wp_enqueue_scripts', 'my_files');

// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields');
// Save Fields
add_action('woocommerce_process_product_meta', 'woo_add_custom_general_fields_save');

add_action('woocommerce_new_product', 'notify_subscribers_on_new_product');

function my_theme_support()
{
    // Register menu
    register_nav_menu('header-menu', __('Header menu'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

}

function my_files()
{
    wp_enqueue_style('font google', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font awesome 4.7', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font awesome 6.4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style('bootstrap 5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    //wp_enqueue_style('toastr', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css');
    wp_enqueue_style('main style', get_stylesheet_uri());
    wp_enqueue_style('style 1', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('style 2', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_script('script bootstrap 5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    //wp_enqueue_script('script toastr', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js');
    wp_enqueue_script('script', get_theme_file_uri('/build/index.js'));

}

add_action('wp_enqueue_scripts', 'enqueue_subscription_scripts');
function enqueue_subscription_scripts() {
    wp_enqueue_script('custom-subscription-script', get_template_directory_uri() . '/js/custom-subscription-script.js', array('jquery'), '', true);
    wp_localize_script('custom-subscription-script', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}

add_action('wp_ajax_subscribe_user', 'subscribe_user');
add_action('wp_ajax_nopriv_subscribe_user', 'subscribe_user');
function subscribe_user() {
    $email = sanitize_email($_POST['email']);
    if (email_exists($email)) {
        $response = array('status' => 'error', 'message' => 'Email đã tồn tại trong hệ thống.');
    } else {
        $user_id = wp_create_user($email, wp_generate_password(), $email);
        if (!is_wp_error($user_id)) {
            // Lưu thông tin đăng ký vào cơ sở dữ liệu
            update_user_meta($user_id, 'subscribe_to_notifications', 1);
            $response = array('status' => 'success', 'message' => 'Đăng ký thành công!');
        } else {
            $response = array('status' => 'error', 'message' => 'Đã có lỗi xảy ra trong quá trình đăng ký.');
        }
    }

    wp_send_json($response);
    wp_die();
}


// Hàm để gửi thông báo sản phẩm mới cho tất cả người dùng đã đăng ký
function notify_subscribers_on_new_product($product_id) {
    $product = wc_get_product($product_id);
    $user_ids = get_users(array('meta_key' => 'subscribe_to_notifications', 'meta_value' => 1, 'fields' => 'ID'));
    var_dump($user_ids);
    die();
    foreach ($user_ids as $user_id) {
        $user_email = get_user_meta($user_id, 'billing_email', true);

        if (!empty($user_email)) {
            $subject = 'Thông báo sản phẩm mới: ' . $product->get_name();
            $message = 'Chúng tôi vừa thêm một sản phẩm mới: ' . $product->get_name() . '. Xem chi tiết tại đây: ' . get_permalink($product_id);

            // Sử dụng wp_mail để gửi email
            $headers = array('Content-Type: text/html; charset=UTF-8');
            wp_mail($user_email, $subject, $message, $headers);
        }
    }
}

function woo_add_custom_general_fields()
{
    global $woocommerce, $post;
    echo '<div class="options_group">';
    // Text Field
    woocommerce_wp_text_input(
        array(
            'id' => 'trangthai',
            'label' => __('Trạng thái', 'woocommerce'),
            'placeholder' => 'Nhập trạng thái',
            'desc_tip' => 'true',
            'description' => __('Enter the status of product here.', 'woocommerce')
        )
    );
    echo '</div>';
}

function woo_add_custom_general_fields_save($post_id)
{
    // Text Field
    $woocommerce_text_field = $_POST['trangthai'];
    if (!empty($woocommerce_text_field))
        update_post_meta($post_id, 'trangthai', esc_attr($woocommerce_text_field));
}

add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_cart_count');
function wc_refresh_cart_count($fragments)
{
    ob_start();
    $cart_count = WC()->cart->get_cart_contents_count();
    if ($cart_count > 0) {
        ?>
        <div class="tip tip-cart">
            <?php echo $cart_count ?>
        </div>
        <?php
        $fragments['.tip-cart'] = ob_get_clean();
        return $fragments;
    }
}


// add_action('init', 'update_cart_quantity');

// function update_cart_quantity() {
//     if (isset($_POST['update_cart_qty'])) {
//         $product_id = $_POST['product_id'];
//         $quantity = $_POST['quantity'];

//         // Update the cart
//         WC()->cart->set_quantity($product_id, $quantity);

//         // Redirect back to the cart page
//         wp_safe_redirect(wc_get_cart_url());
//         exit();
//     }
// }
