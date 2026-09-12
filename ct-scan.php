<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Cardiology" ?>
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
                            <h2 class="page-header__title">CT Scan</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>CT Scan</span></li>
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
                                <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <img src="assets/images/services/CT_scan.png" alt="ct scan">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">CT Scan Services in Bengaluru</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, Bengaluru, our CT Scan department is dedicated to delivering precise and advanced imaging services. Utilizing cutting-edge technology, we provide detailed diagnostic images crucial for accurate medical assessments. Our experienced Radiologists and Technicians ensure that every CT scan is performed with the highest standards of care and competence, making it a vital component of our diagnostic services.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Understanding CT Scans</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">A CT (Computed Tomography) scan is a non-invasive imaging technique that uses X-rays to create detailed cross-sectional images of the body. This advanced technology allows Doctors to examine internal organs, bones, and tissues with remarkable clarity, aiding in the diagnosis and management of various medical conditions.</p><!-- /.service-details__text -->
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">What should I expect during a CT scan?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Preparation:</strong> Depending on the type of scan, you may be asked to fast or avoid certain medications. For some scans, a contrast dye may be administered to enhance image clarity. Our Team will provide all necessary pre-scan instructions.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>The Procedure:</strong> During the scan, you will lie on a motorized table that moves through the CT scanner. The procedure is painless, quick, and takes only a few minutes. You may hear some whirring sounds as the machine captures images from various angles.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Post-Scan Care:</strong> After the scan, it’s important to stay hydrated, especially if you received a contrast dye. Our Team will provide any specific post-scan care instructions based on your individual needs. If you have any questions or experience any unusual symptoms, do not hesitate to contact us.</p><!-- /.service-details__text -->
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your CT Scan?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Cutting-Edge Technology:</strong> Our CT scan equipment is among the most advanced, providing high-resolution images with minimized radiation exposure. This technology enables us to detect abnormalities with greater accuracy, ensuring a clearer diagnosis.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Expert Team:</strong> Our Radiologists and Technicians are highly trained in performing and interpreting CT scans. Their expertise ensures that each scan is conducted efficiently, with a strong focus on patient comfort and safety.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Best-in-Class Imaging Services:</strong> We offer a wide range of CT scan services, including routine scans and emergency imaging, tailored to meet the diverse needs of our patients.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Patient-Centered Care:</strong> We prioritize your comfort and care throughout the CT scan process. Our team provides clear instructions, gentle guidance, and support to ensure a smooth and stress-free experience.</p><!-- /.service-details__text -->
                            </div>                           
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Is a CT scan safe?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, CT scans are generally safe. They involve a small amount of radiation, but the benefits of accurate diagnosis far outweigh the risks. Our advanced equipment is designed to minimize radiation exposure.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How long does a CT scan take?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Most CT scans are completed within 10-30 minutes, depending on the complexity of the scan. The procedure itself is non-invasive and quick.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Will i feel anything during the scan?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The CT scan is painless. You may feel slight discomfort from lying still or from the contrast dye if used, but the procedure itself is not painful.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                When will i receive my results?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Your CT scan images will be reviewed by a Radiologist, and the results will be sent to your referring Doctor in about an hour. Your Doctor will review the results with you and explain the findings.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                    <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D. Hinduja Sindhi Hospital, we remain dedicated to providing top-quality diagnostic services with a focus on care, competence, and compassion. Trust us to support your health with the accuracy and dedication that has been our hallmark for over 60 years.</p>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>