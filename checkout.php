<?php $head_title = "Checkout || Mediox || Medical & Healthcare PHP Template" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/services-breadcrumb.png);"></div><!-- /.page-header__bg -->
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Checkout</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>our shop</span></li>
                                <li><span>checkout</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="checkout-page section-space-bottom">
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-xl-6 col-lg-7">
                        <div class="checkout-page__billing-address">
                            <h2 class="checkout-page__billing-address__title checkout-page__title">Billing Details</h2>
                            <form class="checkout-page__form row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="first-name">first Name *</label>
                                        <input type="text" id="first-name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="last-name">last Name *</label>
                                        <input type="text" id="last-name" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="company-name">Company Name</label>
                                        <input type="text" id="company-name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label>select country *</label>
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Select a country</option>
                                            <option value="1">Canada</option>
                                            <option value="2">England</option>
                                            <option value="3">Australia</option>
                                            <option value="4">United state america</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="street-address">Street Address *</label>
                                        <input type="text" id="street-address" placeholder="1837 E Homer M Adams Pkwy" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="address">address 2 *</label>
                                        <input type="text" id="address" placeholder="1837 E Homer M Adams Pkwy" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="town-city">City or town</label>
                                        <input type="text" id="town-city">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label>select area</label>
                                        <select class="selectpicker" aria-label="Default select example">
                                            <option selected="">Georgia</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Berlin</option>
                                            <option value="3">Mumbai</option>
                                            <option value="4">London</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="zip-code">ZIP Code *</label>
                                        <input name="zip-code" id="zip-code" type="text" pattern="[0-9]*" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="checkout-page__control">
                                        <label for="phone">Phone *</label>
                                        <input type="tel" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__control">
                                        <label for="email">Email Address *</label>
                                        <input type="email" id="email" required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.col-xl-6 col-lg-5 -->
                    <div class="col-xl-6 col-lg-5">
                        <div class="checkout-page__different-address">
                            <h3 class="checkout-page__different-address__title checkout-page__title">shift to a different address</h3>
                            <!-- /.checkout-page__different-address__title -->
                            <textarea name="textarea" id="textarea" placeholder="2801 Lafayette Blvd, Norfolk, Vermont 23509, united state"></textarea><!-- /.checkout-page__different-address__inner -->
                        </div><!-- /.checkout-page__different-address -->
                    </div><!-- /.col-xl-6 col-lg-5 -->
                </div>
                <div class="checkout-page__your-order">
                    <div class="row gutter-y-40">
                        <div class="col-xl-6 col-lg-6">
                            <h2 class="checkout-page__your-order__title checkout-page__title">Your order</h2>
                            <table class="checkout-page__order-table">
                                <thead class="checkout-page__order-table-head">
                                    <tr>
                                        <th>Product</th>
                                        <th class="right">Sub total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro__title">Pain Relievers</td>
                                        <td class="pro__price">$15.00</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Subtotal</td>
                                        <td class="pro__price">$15.00</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title">Shipping</td>
                                        <td class="pro__price">Free</td>
                                    </tr>
                                    <tr>
                                        <td class="pro__title pro__title--total">Total</td>
                                        <td class="pro__price pro__price--total">$15.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-page__payment-wrapper">
                                <div class="checkout-page__payment">
                                    <div class="checkout-page__payment__item checkout-page__payment__item--active">
                                        <h3 class="checkout-page__payment__title">Direct bank transfer</h3>
                                        <div class="checkout-page__payment__content" style="display: none;">
                                            <p>Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                                architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var
                                                sed efficitur.</p>
                                        </div><!-- /.checkout__payment__content -->
                                    </div><!-- /.checkout__payment__item -->
                                    <div class="checkout-page__payment__item">
                                        <h3 class="checkout-page__payment__title">Ship To A Different Address?</h3>
                                        <div class="checkout-page__payment__content" style="display: none;">
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the
                                                payment reference. Your order will not be shipped until the funds have cleared
                                                in our account.</p>
                                        </div><!-- /.checkout__payment__content -->
                                    </div><!-- /.checkout__payment__item -->
                                </div><!-- /.checkout__payment -->
                                <div class="checkout-page__payment__button">
                                    <a href="checkout.php" class="mediox-btn mediox-btn--normal">
                                        <span>place your order</span>
                                    </a><!-- /.mediox-btn -->
                                </div><!-- /.checkout-page__payment__button -->
                            </div><!-- /.checkout-page__payment-wrapper -->
                        </div><!-- /.col-lg-6 -->
                    </div>
                </div>
            </div>
        </section><!-- /.checkout-page section-space-bottom -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>