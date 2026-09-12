<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Team Details" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg"
     style="
        background-image: url('assets/images/backgrounds/doctor-bread.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: transparent;
        height: 300px; /* जरूरी */
        width: 100%;
     ">
</div>
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Dr. Sampath Kumar M.N. – Leading Medical Oncologist in Bangalore</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><a href="doctors.php">Doctors</a></li>
                                <li><span>Dr. Sampath Kumar M.N.</span></li>
                            </ul><!-- /.mediox-breadcrumb list-unstyled -->
                        </div><!-- /.page-header__content -->
                    </div><!-- /.container -->
                </div><!-- /.page-header__inner -->
            </div><!-- /.container-fluid -->
        </section><!-- /.page-header -->

        <section class="team-details">
            <div class="container">
                <div class="team-details__inner">
                    <div class="team-details__image wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <img src="assets/images/team/dr-sampath.png" alt="Dr. Sampath Kumar M.N.">
                        
                        <div class="team-details__identity">
                            <h3 class="team-details__name">Dr. Sampath Kumar M.N.</h3><!-- /.team-details__name -->
                            <p class="team-details__designation">Leading Medical Oncologist</p>
                            <!-- /.team-details__designation -->
                        </div><!-- /.team-details__identity -->
                    </div><!-- /.team-details__image -->
                    <div class="team-details__about wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-details__about__inner">
                            
                            <p class="team-details__about__description">Bangalore’s P.D. Hinduja Sindhi Hospital is rated as one of the best facilities for cancer treatment, combining a wide variety of specialized services for patients suffering from cancer. Among the most trusted names in oncology, Dr. Sampath Kumar M.N. is regarded as one of the finest medical oncologists in Bangalore. With over 9 years of experience and a sole focus on offering topmost care for patients diagnosed with different cancers such as breast cancer, lung cancers, and blood cancers, Dr. Sampath has proven to be the best.</p><br/>
                            <p class="team-details__about__description">Dr. Sampath Kumar has a wealth of knowledge about oncology treatment and has a keen interest in the fields of stem cell transplantation and minimally invasive cancer treatments. He has blended the latest scientific developments with kindness and respect for the patient. Dr. Sampath respects the enormity of cancer, and he makes every effort to help patients through their journeys with individualized treatment plans and guidance that clearly explains the way forward.</p><br/>
                            <p class="team-details__about__description"></p>Dr. Sampath is an eminent oncologist in Bangalore, specializing in the precise and effective treatment of patients. He interfaces regularly with teams at P.D. Hinduja Sindhi Hospital to render all possible care to patients, from diagnosis, treatment, and ultimately to recovery. Be it breast cancer, lung cancer, or any other cancer, Dr. Sampath is the foremost doctor amongst all patients seeking treatment in one of the best hospitals for cancer care, by virtue of his skill and compassionate care.</p><!-- /.team-details__about__description -->
                        </div><!-- /.team-details__about__inner -->
                        <ul class="team-details__contact list-unstyled">
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-location"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">Address</h3>
                                    <a href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D" class="team-details__contact__link">P.D. Hinduja Sindhi Hospital<br>Bangalore, India</a>
                                </div>
                            </li><!-- /.item -->
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-telephone"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">Quick Contact</h3>
                                    <a href="tel:+080 4903 0303" class="team-details__contact__link">080 4903 0303</a>
                                </div>
                            </li><!-- /.item -->
                            <li>
                                <span class="team-details__contact__icon">
                                    <i class="icon-email"></i>
                                </span>
                                <div class="team-details__contact__content">
                                    <h3 class="team-details__contact__title">support email</h3>
                                    <a href="mailto:hindujasindhihospital@gmail.com" class="team-details__contact__link">hindujasindhihospital@gmail.com</a>
                                </div>
                            </li><!-- /.item -->
                        </ul><!-- /.team-details__contact -->
                    </div><!-- /.team-details__about -->
                </div><!-- /.team-details__inner -->
            </div><!-- /.container -->
        </section><!-- /.team-details section-space-top -->

        

        <section class="appointment-one section-space-bottom">
            <div class="appointment-one__bg mediox-jarallax" data-jarallax data-speed="0.3s" style="background-image: url(assets/images/backgrounds/app-bg.png);">
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
                                            <option value="1">immediate care</option>
                                            <option value="2">dental care</option>
                                            <option value="3">neurology care</option>
                                            <option value="4">gynaecologists</option>
                                            <option value="5">orthopaedics</option>
                                            <option value="6">cardiology</option>
                                        </select>
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <select class="selectpicker" aria-label="Name a Doctor">
                                            <option selected>Name a Doctor</option>
                                            <option value="1">Dr. Anita M. Dias</option>
                                            <option value="2">Dr. Abhishek N.</option>
                                            <option value="3">Dr. Prakash Babu M.N.</option>
                                            <option value="4">Dr. Preetham Raj</option>
                                            <option value="5">Dr. N. Praveenkumar</option>
                                            <option value="6">Dr. Ambuja B.N</option>
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
            <img src="assets/images/shapes/appointment-shape-1-1.png" alt="shape" class="appointment-one__shape-1">
            <img src="assets/images/shapes/appointment-shape-1-2.png" alt="shape" class="appointment-one__shape-2">
            <img src="assets/images/shapes/appointment-shape-1-3.png" alt="shape" class="appointment-one__shape-3">
        </section><!-- /.appointment-one section-space-bottom -->

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>