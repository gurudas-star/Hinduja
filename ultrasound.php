<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "ultrasound" ?>
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
                            <h2 class="page-header__title">Ultrasound</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Ultrasound</span></li>
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
                                    <img src="assets/images/services/Ultrasound.png" alt="Ultrasound">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">Ultrasound Services at P.D. Hinduja Sindhi Hospital, Bengaluru</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Ultrasound Services are dedicated to delivering high-quality imaging that is essential for accurate diagnosis and effective treatment planning. Utilizing advanced ultrasound technology and led by a Team of experienced Radiologists and Sonographers, we ensure that every scan is performed with precision, care, and a deep commitment to your health and well-being.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Understanding Ultrasound</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Ultrasound, also known as sonography, is a non-invasive imaging technique that uses high-frequency sound waves to create detailed images of the body’s internal structures. It is commonly used to examine the abdomen, pelvis, blood vessels, and other soft tissues. Ultrasound is a safe and painless procedure widely employed for both diagnostic and therapeutic purposes.</p><!-- /.service-details__text --> 
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Post-Scan Care</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">After your ultrasound, you can usually resume normal activities immediately. If you have any questions about your scan results or experience any discomfort, our Healthcare Team is available to provide assistance and guidance. Follow-up appointments may be scheduled to discuss your results in detail.</p><!-- /.service-details__text --> 
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your Ultrasound?</h3><!-- /.service-details__sub-title -->                               
                                <p class="service-details__text"><strong>Quality Assurance:</strong> We adhere to strict quality control measures to guarantee the reliability of every ultrasound scan. Our commitment to maintaining the highest standards of care ensures that you can trust us for accurate and timely results.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Advanced Imaging Technology:</strong> Our Ultrasound Department is equipped with the latest imaging technology, enabling high-resolution scans that provide clear and accurate images. This advanced equipment allows our Radiologists to diagnose a wide range of conditions with confidence.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Expert Radiologists:</strong> Our team of Radiologists and Sonographers are highly trained and experienced in performing and interpreting ultrasound scans. Their expertise ensures that each scan is conducted with accuracy and that the results are interpreted with a high level of precision.</p><!-- /.service-details__text--> 
                                <p class="service-details__text"><strong>Best-in-Class Ultrasound Services:</strong> We offer a wide range of ultrasound services, including obstetric and gynaecological ultrasounds, abdominal ultrasounds, Doppler studies, and more. Whether you need a routine check-up or a specialized scan, we provide services tailored to your needs.</p><!-- /.service-details__text-->
                                <p class="service-details__text"><strong>Patient-Centered Care:</strong> At P.D. Hinduja Sindhi Hospital, your comfort and convenience are our top priorities. Our friendly and professional Staff ensure that your ultrasound experience is smooth and stress-free, from scheduling to receiving the final report.</p><!-- /.service-details__text-->                               
                            </div>                                                                                    
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How should I prepare for my Ultrasound?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Preparation depends on the type of ultrasound. Some scans may require you to drink water beforehand or avoid eating for a few hours. Our Team will provide clear instructions to ensure accurate imaging.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Is Ultrasound safe?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, ultrasound is a safe and non-invasive procedure that does not use ionizing radiation. It is commonly used for a variety of diagnostic and monitoring purposes, including during pregnancy.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How long does an Ultrasound take?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The duration of the ultrasound varies depending on the type of scan, but most procedures take between 15 and 45 minutes. Our Sonographers will guide you through the process to ensure your comfort.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                When will I receive my Ultrasound results?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>After the scan, the images will be analyzed by a Radiologist, who will prepare a detailed report. Your results will typically be available through our secure online portal or shared with your Consultant Doctors.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What if I need follow-up tests?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>If further testing is needed, our Healthcare Team will guide you through the next steps. We are committed to providing continuous care and ensuring that you receive the necessary follow-up evaluations.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->                                                                     
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">Our Ultrasound Services reflect our dedication to excellence in medical imaging and patient care. Trust us to provide the precise and detailed images needed for your diagnosis and treatment, delivered with compassion and expertise.</p>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>