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
        height: 300px; 
        width: 100%;
     ">
</div>
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Dr. Anil Kumar. N –  The best blood cancer doctor in Bangalore</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><a href="doctors.php">Doctors</a></li>
                                <li><span>Dr. Anil Kumar. N</span></li>
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
                        <img src="assets/images/team/dr-anil-kumar.png" alt="Dr. Sampath Kumar M.N.">
                        
                        <div class="team-details__identity">
                            <h3 class="team-details__name">Dr. Anil Kumar. N</h3><!-- /.team-details__name -->
                            <p class="team-details__designation">MBBS, M.D (Gen Medicine) PGIMER, D.M (Medical Oncology & Haematology)</p>
                            <!-- /.team-details__designation -->
                        </div><!-- /.team-details__identity -->
                    </div><!-- /.team-details__image -->
                    <div class="team-details__about wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-details__about__inner">
                            
                            <p class="team-details__about__description">When it comes to blood cancer treatment, P.D. Hinduja Sindhi Hospital is one of the best cancer treatment hospitals in Bangalore, offering unrivalled medical care for all types of cancer. Well known for being the best medical oncologist, Dr. Anil Kumar – the blood cancer specialist – treats blood cancers like leukemia, lymphoma, and myeloma, some of the hardest from which patients can find some relief. Today, Dr. Anil has become one of the very leading blood cancer specialists in Bangalore after years and years of constant practice and experience. Today, he provides patients visiting him treatment modalities in care, offering personalized innovations as well as treatments.</p><br/>
                            <p class="team-details__about__description">Dr. Anil Kumar uses the latest in targeted therapies, chemotherapeutic and transplant modalities of care in his treatment approach for blood cancers, ensuring that each patient benefits maximally from the most appropriate treatment tailored for that individual. His experience in this area enables him to provide holistic care which has both physical and psychological aspects to it.</p><br/>
                            <p class="team-details__about__description"></p>For anyone looking for a blood cancer specialist in Bangalore, the name Dr. Anil Kumar stands trusted at P.D. Hinduja Sindhi Hospital. Owing to his dedication to new-age cancer therapies and tender loving care, he ranks among the top medical oncologists in Bangalore. Whether you are suffering from blood cancers or want a second opinion, Dr. Anil makes sure that you receive the best possible care in one of the top cancer treatment hospitals in Bangalore.</p><!-- /.team-details__about__description -->
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