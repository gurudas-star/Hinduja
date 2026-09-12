<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Our FAQ " ?>
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
                    <h2 class="page-header__title">FAQs</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span>FAQs</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->



<section class="faq-page section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <!-- <div class="faq-page__image">
                            <img src="assets/images/resources/faq-3-1.jpg" alt="faq">
                        </div> -->
                <!-- /.faq-page__image -->
                <div class="faq-page__accordion">
                    <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                        <h3 class="faq-group-title">1. General Information</h3>
                        <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="accordion-title">
                                <h4>
                                    What are the hospital's operating hours?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Our hospital operates 24/7 for emergency services. Regular outpatient department
                                        (OPD) hours are from 8 AM to 8 PM, Monday to Saturday.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                            <div class="accordion-title">
                                <h4>
                                    Where is the hospital located?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>We are located at <a
                                            href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D">15/2,
                                            12th Cross Rd, Sampangiramnagar, Bengaluru – 560 027</a>. For detailed
                                        directions, please visit our website or contact our helpdesk.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <h3 class="faq-group-title">2. Appointments</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="accordion-title">
                                <h4>
                                    How do i book an appointment?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>You can book an appointment online through our website, via our mobile app, or by
                                        calling our appointment desk at <a href="tel:080 4903 0303">
                                            080 4903 0303</a>.
                                    </p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="150ms">
                            <div class="accordion-title">
                                <h4>
                                    Do i need a referral to see a specialist?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>No, a referral is not necessary to see a specialist. You can book an appointment
                                        directly with the specialist of your choice.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <h3 class="faq-group-title">3. Services</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    What specialties are available at the hospital?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Our hospital offers a wide range of specialties, including but not limited to
                                        Paediatrics, cardiology, neurology, orthopedics, pediatrics, gynaecology,
                                        oncology, and general surgery.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    Does the hospital provide emergency services?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Yes, we have a fully equipped emergency department that operates 24/7.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                    </div><!-- /.faq-accordion -->
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="faq-page__accordion">
                    <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                        <h3 class="faq-group-title">4. Billing and Insurance</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    What insurance plans are accepted?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>We accept most major insurance plans.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    How can i pay my hospital bills?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Bills can be paid online through our patient portal, in person at the billing
                                        department, or via phone. We accept cash, credit/debit cards, and checks.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <h3 class="faq-group-title">5. Inpatient Information</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    What should i bring if i am being admitted to the hospital?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Please bring personal identification, insurance information, a list of current
                                        medications, and any necessary personal items like toiletries and comfortable
                                        clothing.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    What are the visiting hours for inpatients?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Visiting hours are from 5 PM  to 7 PM daily. For specific units like the ICU,
                                        visiting hours may vary. Please check with the help desk.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <h3 class="faq-group-title">6.Patient Support</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    Is there a pharmacy on-site?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Yes, we have a pharmacy on-site that is open 24/7.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    Are language translation services available?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>Yes, we offer language translation services. Please inform the staff if you
                                        require this service when booking your appointment or upon arrival.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                        <h3 class="faq-group-title">7.Contact Information</h3>
                        <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="accordion-title">
                                <h4>
                                    How can i contact the hospital for more information?
                                    <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                </h4>
                            </div><!-- /.accordion-title -->
                            <div class="accordion-content">
                                <div class="inner">
                                    <p>You can reach us at
                                        080 4903 0303 For specific departments, please visit the contact section on our
                                        website.</p>
                                </div><!-- /.inner -->
                            </div><!-- /.accordion-content -->
                        </div><!-- /.accordion-item -->
                    </div><!-- /.faq-accordion -->
                </div><!-- /.faq-page__accordion -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row gutter-y-50 -->
    </div><!-- /.container -->
</section><!-- /.faq-page section-space -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>