<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Our Services" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/services-breadcrumb.png);"></div><!-- /.page-header__bg -->
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Services</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span>Services</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="services-page section-space">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/emergency-ambulance-services.png" alt="emergency ambulance services">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="icon-ambulance"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/emergency-ambulance-services.php">Emergency Ambulance Services</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">When every moment counts, our emergency team is here for you. Get prompt care 24/7, ensuring your well-being. You always come first.</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/ct-scan-service.png" alt="ct scan">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-x-ray"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/ct-scan.php">CT Scan</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital, Bengaluru, our CT Scan department is dedicated to delivering precise and advanced imaging services. Utilizing</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/level-3-icu-service.png" alt="level 3 icu">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-bed"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/level-3-icu.php">Level 3 ICU</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital, our Level 3 Intensive Care Unit (ICU) embodies our unwavering commitment to delivering</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/emergency-room-service.png" alt="emergency room">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-hospital"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/emergency-room.php">Emergency Room</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital, Bengaluru, our Emergency Room is a vital part of our commitment to delivering immediate and expert</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/laboratory-services.png" alt="laboratory services">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-microscope"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/laboratory-services.php">Laboratory Services</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">Quick and accurate results are delivered every time. We understand every moment counts when it comes to diagnosing the issue, and ensuring your health needs are met with the</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/doppler-service.png" alt="doppler">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-wave-square"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/doppler.php">Doppler</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Doppler Services offer advanced diagnostic capabilities to evaluate blood flow and detect</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/echocardiography-services.png" alt="echocardiography services">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="icon-cardiology"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/echocardiography.php">Echocardiography Services</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">Our Echo service helps us see how well your heart is working. It's a painless test that gives us important information about your heart health.</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/physiotherapy-service.png" alt="physiotherapy">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-person-walking"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/physiotherapy.php">Physiotherapy</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital, we take a holistic approach to ensure our patients achieve their highest possible level of function. Our</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/x-ray-service.png" alt="x-ray">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-x-ray"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/x-ray.php">X-Ray</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our X-Ray Services are designed to deliver fast, accurate, and high-quality imaging to aid in the</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/ultrasound-service.png" alt="ultrasound">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-stethoscope"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/ultrasound.php">Ultrasound</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Ultrasound Services are dedicated to delivering high-quality imaging that is essential for</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="service-card-three">
                            <div class="service-card-three__image">
                                <img src="assets/images/services/pharmacy-service.png" alt="pharmacy">
                            </div><!-- /.service-card-three__image -->
                            <div class="service-card-three__content">
                                <span class="service-card-three__icon">
                                    <i class="fas fa-prescription-bottle-medical"></i>
                                </span><!-- /.service-card-three__icon -->
                                <h3 class="service-card-three__title">
                                    <a href="service/pharmacy.php">Pharmacy</a>
                                </h3><!-- /.service-card-three__title -->
                                <p class="service-card-three__text">Our pharmacy operates 24/7 to meet the needs of our patients and the local community. Staffed by qualified pharmacists we understand that the round-the-clock availability of medicines is</p><!-- /.service-card-three__text -->
                            </div><!-- /.service-card-three__content -->
                        </div><!-- /.service-card-three -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.services-page section-space -->

        <section class="appointment-one section-space-bottom">
            <div class="appointment-one__bg mediox-jarallax" data-jarallax data-speed="0.3s" style="background-image: url(assets/images/services/service-book-an-appointment.png);">
                <div class="appointment-one__bg__inner" style="background-image: url(assets/images/shapes/appointment-shape-bg.png);"></div>
                <div class="appointment-one__bg__shape">
                    <div class="appointment-one__bg__shape__1">
                        <div class="appointment-one__bg__shape__2"></div><!-- /.appointment-one__bg__shape__2 -->
                    </div><!-- /.appointment-one__bg__shape__1 -->
                </div><!-- /.appointment-one__bg__shape -->
            </div><!-- /.appointment-one__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="appointment-one__content">
                            <h3 class="appointment-one__title">Book An Appointment</h3><!-- /.appointment-one__title -->
                            <form action="assets/inc/sendemail.php" class="appointment-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Full Name*">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email Address*">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="tel" name="number" placeholder="Phone Number">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control appointment-one__form__date">
                                        <input type="text" name="date" placeholder="Select Date*" id="datepicker" class="mediox-datepicker">
                                        <span class="appointment-one__form__date__arrow">
                                            <i class="icon-caret-down"></i>
                                        </span><!-- /.appointment-one__form__date__arrow -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <select class="selectpicker" aria-label="Type of Service">
                                            <option selected>Type of Service</option>
                                            <option value="1">Emergency Ambulance Services</option>
                                            <option value="2">CT Scan</option>
                                            <option value="3">Level 3 ICU</option>
                                            <option value="4">Emergency Room</option>
                                            <option value="5">Laboratory Services</option>
                                            <option value="6">Doppler</option>
                                            <option value="7">Echocardiography Services</option>
                                            <option value="8">Physiotherapy</option>
                                            <option value="9">X-Ray</option>
                                            <option value="10">Ultrasound</option>
                                            <option value="11">Pharmacy</option>
                                        </select>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <select class="selectpicker" aria-label="Name a Doctor">
                                            <option selected>Name a Doctor</option>
                                            <option value="1">Leslie Alexander</option>
                                            <option value="2">Mike Hardson</option>
                                            <option value="3">Anthony B. Castillo</option>
                                            <option value="4">Adolfo Carr</option>
                                            <option value="5">Sarah Albert</option>
                                            <option value="6">kevin martin</option>
                                        </select>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Type Here..."></textarea>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="mediox-btn">
                                            <span>book appointment</span>
                                            <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                                        </button><!-- /.mediox-btn -->
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form><!-- /.form-one -->
                            <div class="result"></div><!-- /.result -->
                        </div><!-- /.appointment-one__content -->
                    </div><!-- /.col-xl-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.appointment-one section-space-bottom -->

        <section class="welcome-one section-space">
            <div class="container">
                <div class="welcome-one__inner">
                    <div class="welcome-one__content">
                        <div class="sec-title @@extraClassName wow fadeInUp" data-wow-duration="1500ms">
                            <div class="sec-title__top">
                                <h6 class="sec-title__tagline">welcome new patient’s</h6><!-- /.sec-title__tagline -->

                            </div><!-- /.sec-title__top -->
                            <h3 class="sec-title__title">We’re Welcoming New <br> Patients</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="welcome-one__text wow fadeInUp" data-wow-duration="1500ms">A brief statement outlining the purpose and mission of the clinic. This can include the commitment to patient care, community health.</p><!-- /.welcome-one__text -->
                        <div class="wow fadeInUp" data-wow-duration="1500ms">
                            <a href="appointment.php" class="mediox-btn">
                                <span>book appointment</span>
                                <span class="mediox-btn__icon"><i class="icon-up-right-arrow"></i></span>
                            </a><!-- /.mediox-btn -->
                        </div>
                    </div><!-- /.welcome-one__content -->
                    <div class="welcome-one__image">
                        <div class="welcome-one__image__bg" style="background-image: url(assets/images/services/service-footer.png);"></div>
                    </div><!-- /.welcome-one__image -->
                </div><!-- /.welcome-one__inner -->
            </div><!-- /.container -->
        </section><!-- /.welcome-one section-space -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>