<?php $head_title = "Cart || Mediox || Medical & Healthcare PHP Template" ?>
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
                            <h2 class="page-header__title">Cart</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>our shop</span></li>
                                <li><span>cart</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="cart-page section-space-two">
            <div class="container">
                <div class="row gutter-y-50">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table class="table cart-page__table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Sub Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta__img">
                                                    <img src="assets/images/products/cart-1-1.jpg" alt="Organ Meats">
                                                </div>
                                                <h3 class="cart-page__table__meta__title"><a href="product-details.php">Accu - Check</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__price">$15.00</td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__total"><span>$30.00</span></td>
                                        <td>
                                            <a href="cart.php" class="cart-page__table__remove"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta__img">
                                                    <img src="assets/images/products/cart-1-2.jpg" alt="Game Meat">
                                                </div>
                                                <h3 class="cart-page__table__meta__title"><a href="product-details.php">Curesken</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__price">$20.00</td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__total"><span>$40.00</span></td>
                                        <td>
                                            <a href="cart.php" class="cart-page__table__remove"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta__img">
                                                    <img src="assets/images/products/cart-1-3.jpg" alt="Exotic Meats">
                                                </div>
                                                <h3 class="cart-page__table__meta__title"><a href="product-details.php">Shelcal 500</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__price">$25.00</td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__total"><span>$50.00</span></td>
                                        <td>
                                            <a href="cart.php" class="cart-page__table__remove"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cart-page__table__meta">
                                                <div class="cart-page__table__meta__img">
                                                    <img src="assets/images/products/cart-1-4.jpg" alt="Seafood">
                                                </div>
                                                <h3 class="cart-page__table__meta__title"><a href="product-details.php">Supradyn</a>
                                                </h3>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__price">$30.00</td>
                                        <td>
                                            <div class="product-details__quantity">
                                                <div class="quantity-box">
                                                    <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                    <input type="text" value="1">
                                                    <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart-page__table__total"><span>$60.00</span></td>
                                        <td>
                                            <a href="cart.php" class="cart-page__table__remove"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-page__coupone">
                            <h5 class="cart-page__coupone__title">coupon:</h5>
                            <div class="cart-page__coupone__box">
                                <form action="#" class="cart-page__coupone__form">
                                    <input type="text" placeholder="Enter Cupon Code" class="cart-cupon__coupone__input">
                                    <button type="submit" class="cart-page__coupone__btn cart-page__btn mediox-btn mediox-btn--normal">
                                        <span>Apply Code</span>
                                    </button>
                                </form>
                                <a href="cart.php" class="cart-page__update-btn cart-page__btn mediox-btn mediox-btn--normal">
                                    <span>Update Cart</span>
                                </a>
                            </div><!-- /.cart-page__coupone__box -->
                        </div><!-- /.cart-page__coupone -->
                    </div><!-- /.col-xl-12 -->
                    <div class="col-xl-12">
                        <div class="cart-page__cart-checkout">
                            <ul class="cart-page__cart-total list-unstyled">
                                <li class="cart-page__cart-total__top">
                                    <h3 class="cart-page__cart-total__title">Subtotal</h3>
                                </li>
                                <li class="cart-page__cart-total__amount cart-page__cart-total__amount--1">
                                    <span>Subtotal</span>
                                    <span class="cart-page__cart-total__amount__text">$999.00</span>
                                </li>
                                <li class="cart-page__cart-total__address">
                                    <h4 class="cart-page__cart-total__address__title">Shipping Address</h4>
                                    <address class="cart-page__cart-total__address__text">2801 Lafayette Blvd, Norfolk, Vermont 23509, united state</address>
                                </li>
                                <li class="cart-page__cart-total__amount cart-page__cart-total__amount--2">
                                    <span>Total</span><span class="cart-page__cart-total__amount__text">$999.00</span>
                                </li>
                            </ul>
                            <div class="cart-page__button">
                                <a href="checkout.php" class="mediox-btn mediox-btn--normal">
                                    <span>checkout</span>
                                </a>
                            </div><!-- /.cart-page__button -->
                        </div>
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cart-page section-space-two -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>