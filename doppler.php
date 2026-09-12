<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Doppler" ?>
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
                            <h2 class="page-header__title">Doppler</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Doppler</span></li>
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
                                    <img src="assets/images/services/doppler-readmore.png" alt="Doppler">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">Doppler Services at P.D. Hinduja Sindhi Hospital, Bengaluru</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Doppler Services offer advanced diagnostic capabilities to evaluate blood flow and detect vascular conditions with precision and care. Utilizing state-of-the-art Doppler technology, our team provides assessments to support accurate diagnosis and effective treatment planning for a range of vascular and cardiovascular issues.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Understanding Doppler Ultrasound</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Doppler Ultrasound is a non-invasive diagnostic technique that measures and visualizes blood flow through arteries and veins. By analyzing the frequency shifts in sound waves as they bounce off moving blood cells, Doppler Ultrasound provides critical information about the speed and direction of blood flow, helping to identify abnormalities or blockages in the vascular system.</p><!-- /.service-details__text -->
                                <p class="service-details__text">Doppler Ultrasound is a non-invasive diagnostic technique that measures and visualizes blood flow through arteries and veins. By analyzing the frequency shifts in sound waves as they bounce off moving blood cells, Doppler Ultrasound provides critical information about the speed and direction of blood flow, helping to identify abnormalities or blockages in the vascular system.</p><!-- /.service-details__text -->
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">What to Expect During Your Doppler Ultrasound?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Preparation:</strong> Generally, no special preparation is required for a Doppler Ultrasound. However, you may be asked to wear comfortable clothing and avoid certain activities before the test. Specific instructions will be provided based on the type of Doppler examination you are undergoing.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Procedure:</strong> During the Doppler Ultrasound, a small amount of gel is applied to the skin to facilitate the transmission of sound waves. A handheld transducer is then moved over the area being examined to capture images and measure blood flow. The procedure is painless and typically takes between 30 to 60 minutes.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Post-Procedure:</strong> After the examination, you can resume your normal activities immediately. The results of the Doppler study will be analyzed by our Radiologists, and a report will be generated for your referring Physician.</p><!-- /.service-details__text -->
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your Doppler Services?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Advanced Technology:</strong> Our Doppler services are equipped with the latest ultrasound technology, ensuring high-resolution imaging and accurate blood flow measurements. This advanced equipment supports detailed evaluations and reliable results for both routine and complex cases.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Expert Team:</strong> Our skilled Radiologists and Sonographers are highly trained in Doppler Ultrasound techniques. Their expertise ensures that each examination is performed with precision, and the results are interpreted with a high level of accuracy to guide your treatment decisions.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Quality Care:</strong> At P.D. Hinduja Sindhi Hospital, we offer a patient-centered approach to Doppler testing. We provide clear explanations of the procedure, answer any questions you may have, and ensure that your experience is as comfortable and efficient as possible.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Efficient Service:</strong> We understand the importance of timely diagnosis. Our streamlined processes and efficient scheduling allow for prompt Doppler evaluations, so you can receive your results quickly and move forward with your care plan without unnecessary delays.</p>
                                <p class="service-details__text"><strong>Holistic Approach:</strong> Our Doppler services are integrated into a broader healthcare framework, ensuring that the information obtained contributes to an understanding of your vascular health. This approach supports coordinated care with other diagnostic tests and treatments as needed.</p>
                            </div>                                                         
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What conditions can Doppler Ultrasound help diagnose?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Doppler Ultrasound is used to diagnose and monitor conditions related to blood flow and vascular health, such as arterial blockages, venous insufficiency, deep vein thrombosis (DVT), and carotid artery disease.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Is the Doppler Ultrasound procedure painful?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>No, Doppler Ultrasound is a non-invasive and painless procedure. You may feel slight pressure from the transducer, but it should not cause any discomfort.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How long does a Doppler Ultrasound take?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The duration of the Doppler Ultrasound depends on the area being examined, but it typically lasts between 30 to 60 minutes.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Are there any risk associated with Doppler Ultrasound?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Doppler Ultrasound is a safe procedure with no known risks or side effects. It uses sound waves, not radiation, making it suitable for repeated use if necessary.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How soon will I receive the result of my Doppler Ultrasound?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The results are usually available within a short period after the examination. Your referring Physician will review the results and discuss them with you, along with any recommended follow-up or treatment.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do I need to prepare for the Doppler Ultrasound?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>In most cases, no special preparation is required. However, you may be given specific instructions depending on the type of Doppler study.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->                                    
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D. Hinduja Sindhi Hospital, our Doppler Services are designed to provide precise assessments to support your vascular health. Trust our expert team to deliver accurate diagnostic information with the utmost care and efficiency. Your well-being is our priority, and we are here to ensure that you receive the highest quality care in a compassionate and professional environment.</p>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>