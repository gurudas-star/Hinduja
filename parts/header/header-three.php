       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">

        <div class="header-four">
            <div class="topbar-one">
                <div class="container-fluid">
                    <div class="topbar-one__inner">
                        <ul class="list-unstyled topbar-one__info">
                            <li>
                                <span class="topbar-one__info__icon">
                                    <i class="icon-location"></i>
                                </span>
                                <a href="https://www.google.com/maps">4648 Rocky Road Philadelphia PA, 1920</a>
                            </li>
                            <li>
                                <span class="topbar-one__info__icon topbar-one__info__icon--email">
                                    <i class="icon-email"></i>
                                </span>
                                <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                            </li>
                            <li>
                                <span class="topbar-one__info__icon">
                                    <i class="icon-telephone"></i>
                                </span>
                                <a href="tel:+9156980036420">+9156980036420</a>
                            </li>
                        </ul><!-- /.list-unstyled topbar-one__info -->
                        <div class="topbar-one__right">
                            <div class="social-links">
                                <a href="https://facebook.com">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://instagram.com">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://youtube.com">
                                    <i class="fab fa-youtube" aria-hidden="true"></i>
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </div><!-- /.topbar-one__social -->
                        </div><!-- /.topbar-one__right -->
                    </div><!-- /.topbar-one__inner -->
                </div><!-- /.container-fluid -->
            </div><!-- /.topbar-one -->

            <header class="main-header main-header--four sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__logo logo-retina">
                            <a href="index.php">
                                <img src="assets/images/logo-light.png" alt="Mediox PHP" width="164">
                            </a>
                        </div><!-- /.main-header__logo -->
                        <div class="main-header__right">
                            <div class="main-header__sidebar-btn sidebar-btn__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- /.sidebar-btn__toggler -->
                            <nav class="main-header__nav main-menu">
                                <?php require_once('parts/header/menu.php'); ?>
                            </nav><!-- /.main-header__nav -->
                            <div class="mobile-nav__btn mobile-nav__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- /.mobile-nav__toggler -->
                            <a href="#" class="search-toggler main-header__search">
                                <i class="icon-search" aria-hidden="true"></i>
                                <span class="sr-only">Search</span>
                            </a><!-- /.search-toggler -->
                            <a href="cart.php" class="main-header__cart">
                                <i class="icon-cart" aria-hidden="true"></i>
                                <span class="sr-only">Shopping Cart</span>
                            </a><!-- /.search-toggler -->
                          
                            <a href="appointment.php" class="mediox-btn main-header__btn">
                                <span>make an appointment</span>
                                <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                            </a><!-- /.mediox-btn -->
                        </div><!-- /.main-header__right -->
                    </div><!-- /.main-header__inner -->
                </div><!-- /.container-fluid -->
            </header><!-- /.main-header -->
        </div><!-- /.header-four -->