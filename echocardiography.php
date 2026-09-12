<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Cardiology" ?>
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
                    <h2 class="page-header__title">Echocardiography Services</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Echocardiography Services</span></li>
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
                            <img src="assets/images/services/echocardiography.png" alt="Echocardiography Services">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Echocardiography (Echo) Services at P.D. Hinduja Sindhi
                                Hospital, Bengaluru</h1><!-- /.service-details__title -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our
                                Echocardiography (Echo) Services are focused on providing accurate cardiac imaging to
                                help diagnose and manage heart conditions effectively. With a modern Echocardiography
                                Lab and a Team of experienced Cardiologists and Echo Technicians, we ensure each echo
                                test is performed with the highest level of care and expertise, underscoring our
                                commitment to your heart health. </p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Understanding Echocardiography</h3>
                        <!-- /.service-details__sub-title -->
                        <p class="service-details__text">Echocardiography, often called an “echo,” is a non-invasive
                            imaging method that uses high-frequency sound waves to create detailed images of the heart.
                            This test offers valuable insights into the heart’s structure, function, and blood flow,
                            making it crucial for diagnosing conditions like heart valve disorders, cardiomyopathy, and
                            congenital heart disease.</p><!-- /.service-details__text -->
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Post-Test Care</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text">After your Echocardiogram, you can usually go back to your
                            normal activities right away, unless advised otherwise by your referring Doctors or
                            post-trauma cases. If you have any questions about your results or experience any
                            discomfort, our healthcare team is here to help. Follow-up appointments can be arranged to
                            discuss your results in detail.</p><!-- /.service-details__text -->
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your
                            Echocardiography?</h3><!-- /.service-details__sub-title -->
                        <p class="service-details__text"><strong>Advanced Technology:</strong> Our Echocardiography lab
                            is equipped with the latest ultrasound technology, ensuring high-quality images and accurate
                            assessments. This enables our Cardiologists to detect and evaluate heart conditions with
                            precision, guiding your treatment plan effectively.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Experienced Cardiologists:</strong> Our Cardiologists
                            and Echo Technicians are experts in performing and interpreting echocardiograms. Their
                            experience ensures you receive an accurate diagnosis, which is essential for managing heart
                            disease effectively.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Best-in-Class Services:</strong> We offer various
                            echocardiography services, including transthoracic echo (TTE), transesophageal echo (TEE),
                            stress echocardiography, and 3D echocardiography. Whether you need a routine check or a
                            specialized scan, we have you covered.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Patient-Centered Care:</strong> Your comfort and care
                            are our top priorities. Our friendly staff ensures your echo experience is smooth and
                            stress-free, providing support every step of the way.</p><!-- /.service-details__text -->
                        <p class="service-details__text"><strong>Quality and Safety:</strong> We follow strict quality
                            control measures to ensure every echocardiogram is reliable and accurate. You can trust us
                            to provide results that help guide your heart health management.</p>
                        <!-- /.service-details__text -->
                    </div>


                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is an Echocardiogram used for?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>An Echocardiogram evaluates your heart’s structure and function, including
                                            the chambers, valves, and blood flow. It helps diagnose conditions like
                                            heart valve disease, heart failure, and congenital heart defects.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        Is an Echocardiogram safe?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Yes, an Echocardiogram is a safe, non-invasive test that uses ultrasound
                                            waves to create heart images. It doesn’t involve any radiation, making it a
                                            low-risk procedure.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How long does an Echocardiogram take?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>A standard transthoracic echo usually takes about 30 to 60 minutes, while
                                            more specialized tests like a transesophageal echo (TEE) may take longer.
                                        </p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        When will I receive my echo results?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>After the test, a Cardiologist will review the images and prepare a report.
                                            Your results are typically available online or shared with your Doctors.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What should I do if my Echocardiogram shows an abnormality?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>If your echo shows an abnormality, your Cardiologist will discuss the
                                            findings with you and suggest further tests or treatments if necessary.
                                            Following your Doctor’s advice is important for managing your heart health.
                                        </p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        Can an Echocardiogram detect all heart problems?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>While an Echocardiogram is a powerful tool, it may or may not detect all
                                            heart issues. Additional tests may be recommended for a comprehensive
                                            assessment.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                        </div><!-- /.faq-accordion -->
                    </div><!-- /.service-details__faq -->
                </div><!-- /.service-details__content -->
            </div><!-- /.col-md-12 col-lg-8 -->
            <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D.
                Hinduja Sindhi Hospital, our Echocardiography Services are designed to deliver the precise cardiac
                imaging needed for effective heart care, with a focus on your well-being. If you are looking for Echo
                test in Bangalore, reach out to us.</p>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>