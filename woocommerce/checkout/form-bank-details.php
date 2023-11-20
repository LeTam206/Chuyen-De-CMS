<?php
/**
 * Custom Bank Details Checkout Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-bank-details.php.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

wc_print_notices(); ?>
<div id="bank-details" class="woocommerce-bank-details">
    <h3>Thông tin chuyển khoản ngân hàng</h3>
    <p><strong>Ngân Hàng:</strong> VietComBank</p>
    <p><strong>Số Tài Khoản:</strong> 1023708711</p>
    <p><strong>SORT CODE:</strong> 1111111</p>
    <p><strong>IBAN:</strong> 1111111111</p>
    <p><strong>BIC:</strong> 11111111</p>
</div>
