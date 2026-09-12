<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Emergency Ambulance Services" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg"
                style="background-image: url(assets/images/backgrounds/services-breadcrumb.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Emergency Ambulance Services</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Emergency Ambulance Services</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <?php require_once('parts/app/service-sider.php'); ?>
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__inner">
                        <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <img src="assets/images/services/ambulance.png" alt="Emergency Ambulance Services">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Emergency Ambulance Services</h1>
                            <!-- /.service-details__title -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, we are ready for your
                                medical emergencies. Our ambulance services are available around the clock to respond.
                                Contact us at our EMERGENCY PHONE NO. – <a href="tel:8049030303" style="color:#e91e63;font-weight:700;font-size:22px;">080 4903 0303</a></p>
                            <p class="service-details__text">When every moment counts, our emergency team is here for
                                you. Get prompt care 24/7, ensuring your well-being. You always come first.</p>
                            <p>We are located at heart of central Bangalore and the areas we cover Sampangi Rama Nagara,
                                MG Road, Cubbon Park, Majestic, Shivaji Nagar, Shanti Nagar, Double road, corporation
                                circle, Wilson Garden, Residency road, Langford Road and Vasanth Nagar. With
                                well-connected roads, and public transport options, reaching us is simple and
                                hassle-free.</p>
                        </div>
                    </div><!-- /.service-details__inner -->
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>