<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "physiotherapy" ?>
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
                            <h2 class="page-header__title">Physiotherapy</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Physiotherapy</span></li>
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
                                    <img src="assets/images/services/physiotherapy-readmore.png" alt="Physiotherapy">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">Physiotherapy Services at P.D. Hinduja Sindhi Hospital, Bengaluru</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Physiotherapy Services are dedicated to helping patients regain movement, strength, and functionality with personalized care and advanced therapeutic techniques. Whether you are recovering from surgery, managing a chronic condition, or seeking to improve your physical well-being, our experienced physiotherapists are here to guide you on your path to recovery.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Understanding Physiotherapy</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Physiotherapy is a healthcare discipline focused on restoring and maintaining physical function, mobility, and overall wellness. Through a combination of exercises, manual therapy, and patient education, physiotherapy addresses a wide range of conditions, including musculoskeletal injuries, neurological disorders, and post-operative rehabilitation.</p><!-- /.service-details__text -->                                
                                <p class="service-details__text"><strong>Initial Assessment:</strong> Your first session will involve a thorough assessment of your condition, medical history, and treatment goals. Our Physiotherapist will perform physical evaluations and discuss your symptoms to create a personalized treatment plan.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Treatment Sessions:</strong> Depending on your condition, your physiotherapy sessions may include a combination of exercises, manual therapy, electrotherapy, and education on posture and movement. Each session is designed to progressively improve your strength, flexibility, and function.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Home Exercise Program:</strong> In addition to in-clinic sessions, you may be provided with a home exercise program to continue your rehabilitation between visits. Following these exercises as prescribed is crucial in achieving the best results.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Monitoring Progress:</strong> Your progress will be regularly monitored, and your treatment plan adjusted as needed. This ensures that you are continuously improving and that any challenges are addressed promptly.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Post-Treatment Care:</strong> After completing your physiotherapy program, you will receive guidance on maintaining the benefits achieved during treatment. This may include ongoing exercises, lifestyle modifications, and strategies to prevent the recurrence of your condition.</p><!-- /.service-details__text -->
                            </div>
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h3 class="service-details__sub-title">Why Choose P.D. Hinduja Sindhi Hospital for Your Physiotherapy Needs?</h3><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Commitment to Patient Care:</strong> We prioritize your comfort, safety, and overall well-being. Our compassionate team is dedicated to providing the support and encouragement you need throughout your rehabilitation process, helping you achieve the best possible outcomes.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Personalized Treatment Plans:</strong> Our Physiotherapists take the time to understand your unique needs and develop a tailored treatment plan designed to meet your specific goals. Whether you’re recovering from an injury, surgery, or managing a chronic condition, our approach is centered on your recovery journey.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>Expert Team:</strong> Our team of skilled Physiotherapists is trained in various therapeutic techniques and stays updated on the latest advancements in physiotherapy. Their expertise ensures that you receive effective treatment aimed at improving your mobility, reducing pain, and enhancing your overall quality of life.</p><!-- /.service-details__text -->
                                <p class="service-details__text"><strong>State-of-the-Art Facilities:</strong> We are equipped with modern physiotherapy facilities that include the latest equipment and technologies. From advanced exercise machines to specialized treatment areas, our facilities are designed to support and care in a comfortable and safe environment.</p>
                                <p class="service-details__text"><strong>Holistic Approach:</strong> At P.D. Hinduja Sindhi Hospital, we believe in a holistic approach to physiotherapy. We address not just the physical symptoms but also the underlying causes of your condition, ensuring recovery and the prevention of future issues. Our physiotherapy services often work in conjunction with other medical treatments to provide a complete healthcare experience.</p>
                            </div>                                                         
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What conditions can physiotherapy treat?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Physiotherapy can treat a wide range of conditions, including musculoskeletal injuries (such as sprains and strains), neurological disorders (like stroke and Parkinson’s disease), post-operative recovery, chronic pain, and sports injuries.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How long will my physiotherapy treatment last?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The duration of your physiotherapy treatment depends on the nature of your condition and your specific goals. Some patients may require only a few sessions, while others may need ongoing treatment over several weeks or months.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Is physiotherapy painful?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Physiotherapy aims to relieve pain, not cause it. However, some treatments or exercises may cause temporary discomfort as your body adjusts. Your Physiotherapist will work with you to manage any discomfort and ensure that the treatment is as comfortable as possible.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do I need a referral to see a physiotherapist?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>In many cases, you can book an appointment with a Physiotherapist directly. However, if your physiotherapy is part of a broader medical treatment plan, a referral from your Doctor may be required.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Can physiotherapy prevent surgery?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>In some cases, physiotherapy can help manage or alleviate conditions to the point where surgery may no longer be necessary. Your Physiotherapist will assess your situation and work with you and your medical team to determine the best course of action.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How often should i attend physiotherapy session?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The frequency of your physiotherapy sessions will depend on your condition and treatment plan. Your Physiotherapist will recommend a schedule that is most effective for your recovery.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->                                    
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">At P.D. Hinduja Sindhi Hospital, our Physiotherapy Services are designed to support your journey towards recovery and improved physical health. Trust our expert team to provide the care, encouragement, and personalized attention you need to achieve your rehabilitation goals. We are committed to helping you regain your strength and mobility, so you can return to your daily activities with confidence and ease.</p>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <?php require_once('parts/app/service-footer-doctor.php') ?>

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>