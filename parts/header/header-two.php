       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">
            <header class="main-header main-header--three sticky-header sticky-header--normal">
                <div class="container-fluid">
                    <div class="main-header__inner">
                        <div class="main-header__left">
                            <div class="main-header__logo logo-retina">
                                <a href="index.php">
                                    <img src="assets/images/logo-light.png" alt="Mediox PHP" width="164">
                                </a>
                                <div class="main-header__logo__shape"></div><!-- /.main-header__logo__shape -->
                            </div><!-- /.main-header__logo -->
                            <div class="main-header__sidebar-btn sidebar-btn__toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div><!-- /.sidebar-btn__toggler -->
                        </div><!-- /.main-header__left -->
                        <div class="main-header__right">
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