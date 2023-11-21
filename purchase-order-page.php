<?php

/*Template Name: Purchase Order Page */

get_header();

?>
<div class="purchase-order">
    <div class="container my-5">
        <div class="section-title">
            <h4>Purchase Order</h4>
        </div>
        <table class="table table-bordered table-light w-75 mx-auto mb-0">
            <tr>
                <td>
                    <div class="status-order float-end">
                        Status: Processing
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex">
                                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/wb04-blue-0.jpg" alt=""
                                    style="width: 80px; height: 80px">
                                <div class="info-product ms-3">
                                    <div class="name">Pust It Messenger Bag</div>
                                    <div class="quantity">x1</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-product float-end" style="padding-top: 26px">
                                $ 45
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="d-flex">
                                <img src="http://localhost/wordpress/wp-content/uploads/2023/11/wb05-red-0.jpg" alt=""
                                    style="width: 80px; height: 80px">
                                <div class="info-product ms-3">
                                    <div class="name">Savvy Shoulder Tote</div>
                                    <div class="quantity">x1</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price-product float-end" style="padding-top: 26px">
                                $ 24
                            </div>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="float-end py-3">
                        <div class="total-price fw-bold fs-5" style="padding-left: 11rem">
                            TOTAL: <span class="text-danger ms-2">$ 69</span>
                        </div>
                        <div class="d-flex mt-3">
                            <a href="#" class="btn btn-primary me-2">View Detail Order</a>
                            <a href="#" class="btn btn-danger">Cancel Order</a>
                        </div>

                    </div>


                </td>

            </tr>
        </table>
    </div>
</div>

<?php get_footer(); ?>