       <?php
        require_once('parts/app/app.php');
        require_once('parts/preloader.php');
        require_once('parts/scroll-top-scroll.php');
        ?>
       <div class="page-wrapper">
            <header class="main-header main-header--two sticky-header sticky-header--normal">
            <div class="container-fluid">
            <div class="main-header__inner">
                <div class="main-header__logo logo-retina">
                    <a href="index.php">
                        <img src="assets/images/hinduja-logo.png" alt="Mediox PHP" width="164">
                    </a>
                </div><!-- /.main-header__logo -->
                <div class="main-header__right">
                    <div class="main-header__sidebar-btn sidebar-btn__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.sidebar-btn__toggler -->
                    <nav class="main-header__nav main-menu">
                        <?php require_once('parts/header/menu-two.php'); ?>
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
                    <!-- <div class="main-header__call">
                        <span class="main-header__call__icon">
                            <i class="icon-telephone"></i>
                        </span>
                        <div class="main-header__call__content">
                            <p class="main-header__call__title">call emergency</p>
                            <h4 class="main-header__call__number">
                                <a href="tel:+208-555-0112">+208-555-0112</a>
                            </h4>
                        </div>
                    </div> -->
                    <a href="appointment.php" class="mediox-btn main-header__btn">
                        <span>make an appointment</span>
                        <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                    </a><!-- /.mediox-btn -->
                </div><!-- /.main-header__right -->
            </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
            </header><!-- /.main-header -->