<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Gallery" ?>
<?php $body_class = "custom-cursor" ?>
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
                            <h2 class="page-header__title">Gallery</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>Gallery</span></li>
                            </ul><!--/.mediox-breadcrumb list-unstyled-->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="gallery-page section-space">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/ct5.jpeg" alt="Hospital facility CT scan">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/ct5.jpeg" class="img-popup" title="CT Scan Facility">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/ct4.jpeg" alt="Advanced medical diagnostic scanner">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/ct4.jpeg" class="img-popup" title="Diagnostic Scanner">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/ct3.jpeg" alt="Radiology department and equipment">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/ct3.jpeg" class="img-popup" title="Radiology Department">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/ct2.jpeg" alt="Modern hospital CT unit">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/ct2.jpeg" class="img-popup" title="Modern CT Unit">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/ct1.jpeg" alt="Patient examination area">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/ct1.jpeg" class="img-popup" title="Examination Suite">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/9.jpeg" alt="Hospital medical ward and patient care">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/9.jpeg" class="img-popup" title="Patient Care Facility">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/8.jpeg" alt="Clinical treatment infrastructure">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/8.jpeg" class="img-popup" title="Clinical Infrastructure">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="gallery-page__card">
                            <img src="assets/images/gallery/n2.jpeg" alt="Surgical and diagnostic center">
                            <div class="gallery-page__card__hover">
                                <a href="assets/images/gallery/n2.jpeg" class="img-popup" title="Diagnostic Center">
                                    <span class="gallery-page__card__icon"></span>
                                </a>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--1"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--2"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--3"></span>
                                <span class="gallery-page__card__hover__box gallery-page__card__hover__box--4"></span>
                            </div><!-- /.gallery-page__card__hover -->
                        </div><!-- /.gallery-page__card -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.gallery-page section-space -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>