<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "x-ray" ?>
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
                            <h2 class="page-header__title">X-Ray</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>X-Ray</span></li>
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
                                    <img src="assets/images/services/x_ray.png" alt="X-Ray">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">X-Ray Services at P.D. Hinduja Sindhi Hospital, Bengaluru</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our X-Ray Services are designed to deliver fast, accurate, and high-quality imaging to aid in the diagnosis and treatment of various medical conditions. Utilizing advanced digital radiography and supported by a team of experienced Radiologists, we ensure that every X-Ray is conducted with precision and care, emphasizing our commitment to your health and well-being.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Understanding X-Rays</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">X-Rays are a non-invasive imaging technique that uses electromagnetic radiation to capture images of the body’s internal structures. These images are crucial for Doctors to visualize bones, tissues, and organs, making X-Rays a vital tool for diagnosing conditions such as fractures, infections, and lung diseases.</p><!-- /.service-details__text --> 
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">What to Expect During Your X-Ray</h3><!-- /.service-details__sub-title -->                               
                                <p class="service-details__text"><strong>Preparation:</strong> Typically, no special preparation is required for an X-Ray. However, you may be asked to remove jewellery or wear a hospital gown to prevent any interference with the imaging. Our staff will provide specific instructions before your procedure.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>During the Test:</strong> A Technician will position you to ensure that the targeted area is properly aligned for imaging. You may be asked to hold your breath for a few seconds while the X-Ray is taken to avoid blurring. The procedure is quick and painless, usually taking only a few minutes.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>After the Test:</strong> Once the X-Ray is complete, the images will be reviewed by our Radiologist. The results are typically available shortly after and will be shared with your referring Doctor to assist in diagnosing and managing your condition.</p><!-- /.service-details__text -->                                
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your X-Ray Needs?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Commitment to Quality:</strong> We follow strict quality control protocols to ensure the accuracy and reliability of every X-Ray. Our commitment to high standards means you can trust us to deliver dependable imaging results that support your health. Schedule your X-ray appointment today and experience the difference at P.D. Hinduja Sindhi Hospital.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Advanced Digital Imaging:</strong> Our X-Ray department is equipped with the latest Digital Radiography Technology, which offers clearer images, faster processing times, and reduced radiation exposure compared to traditional film-based X-Rays. This ensures safer and more efficient diagnostics.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Expert Radiologists:</strong> Our team of skilled Radiologists and Technicians have extensive experience in performing and interpreting X-Rays. Their expertise guarantees that you receive an accurate diagnosis, which is essential for effective treatment planning.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Best-in-Class Imaging Services:</strong> We offer a wide range of X-Ray services, including chest X-Rays, bone X-Rays, dental X-Rays, and specialized imaging for various medical conditions. Whether you need a routine scan or a more detailed examination, our services are tailored to meet your specific healthcare needs.</p>
                                <p class="service-details__text"><strong>Patient Comfort and Safety:</strong> Your comfort and safety are our top priorities during the X-Ray process. Our friendly and professional staff are committed to making your experience as smooth and stress-free as possible, providing clear instructions and compassionate care throughout.</p>
                            </div>                                                         
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What are X-Rays used for?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>X-Rays are commonly used to diagnose conditions like bone fractures, infections, and lung diseases. They can also help detect abnormalities in soft tissues, such as tumors.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Are X-Rays safe?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, X-Rays are generally safe, especially with modern Digital Radiography, which uses lower doses of radiation than traditional methods. However, if you are pregnant or suspect you might be, it’s important to inform your Doctor, as alternative imaging methods may be recommended.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                When will I receive my X-Ray results?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>After the X-Ray is performed, a Radiologist will review the images and prepare a report. Your results are typically available within a short period and can be shared with your Doctor for further consultation.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do I need to take any precautions after an X-Ray?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Generally, no special precautions are needed after an X-Ray. You can resume your normal activities immediately unless your Doctor advises otherwise based on your specific condition.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do I need to take any precautions after X-Rays?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Generally, after an X-ray, there are no specific precautions or restrictions you need to follow.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Can X-Rays detect all types of medical conditions?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>While X-rays are an effective diagnostic tool, they are most useful for visualizing bones and certain tissues. For more detailed images of soft tissues or other areas, your Doctor may recommend additional imaging tests, such as an MRI or CT scan.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->                                    
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D. Hinduja Sindhi Hospital, our X-Ray Services are more than just diagnostic tools—they are a part of our holistic approach to healthcare, designed to provide you with the accurate information and quality care you deserve. Trust us to deliver precise and detailed imaging that supports effective diagnosis and treatment, all while ensuring your safety and comfort.</p>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>