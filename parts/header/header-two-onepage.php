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
                                <ul class="main-menu__list one-page-scroll-menu">
                                    <li class="dropdown megamenu scrollToLink current">
                                        <a href="#home">Home</a>
                                        <ul>
                                            <li>
                                                <section class="home-showcase">
                                                    <div class="container">
                                                        <div class="home-showcase__inner">
                                                            <div class="row">
                                                                <div class="col-md-6 col-lg-3">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-1.jpg" alt="">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index.php" class="mediox-btn demo-one__btn">
                                                                                    <span>Multi Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-one-page.php" class="mediox-btn demo-one__btn">
                                                                                    <span>One Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index.php">Home Page 01</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-3">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-2.jpg" alt="">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-2.php" class="mediox-btn demo-one__btn">
                                                                                    <span>Multi Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-2-one-page.php" class="mediox-btn demo-one__btn">
                                                                                    <span>One Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-2.php">Home Page 02</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-3">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-3.jpg" alt="">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-3.php" class="mediox-btn demo-one__btn">
                                                                                    <span>Multi Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                                <a href="index-3-one-page.php" class="mediox-btn demo-one__btn">
                                                                                    <span>One Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-3.php">Home Page 03</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                                <div class="col-md-6 col-lg-3">
                                                                    <div class="demo-one__card">
                                                                        <div class="demo-one__image">
                                                                            <img src="assets/images/home-showcase/home-showcase-4.jpg" alt="">
                                                                            <div class="demo-one__btns">
                                                                                <a href="index-dark.php" class="mediox-btn demo-one__btn">
                                                                                    <span>View Page</span>
                                                                                    <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                                                                </a><!-- /.thm-btn demo-one__btn -->
                                                                            </div><!-- /.demo-one__btns -->
                                                                        </div><!-- /.demo-one__image -->
                                                                        <div class="demo-one__content">
                                                                            <h3 class="demo-one__title">
                                                                                <a href="index-dark.php">Home Dark</a>
                                                                            </h3><!-- /.demo-one__title -->
                                                                        </div><!-- /.demo-one__content -->
                                                                    </div><!-- /.demo-one__card -->
                                                                </div><!-- /.col-md-6 col-lg-3 -->
                                                            </div><!-- /.row -->
                                                        </div><!-- /.home-showcase__inner -->
                                                    </div><!-- /.container -->
                                                </section>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="scrollToLink"><a href="#about">About</a></li>
                                    <li class="scrollToLink"><a href="#services">Services</a></li>
                                    <li class="scrollToLink"><a href="#testimonials">Testimonials</a></li>
                                    <li class="scrollToLink"><a href="#team">team</a></li>
                                    <li class="scrollToLink"><a href="#blog">Blog</a></li>
                                </ul>
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