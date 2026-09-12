<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Team Details || Mediox || Medical & Healthcare PHP Template" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="
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
                    <h2 class="page-header__title">Dr. Uday Kumar S. B. — Best Orthopedic Surgeon in Bangalore</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="doctors.php">Doctors</a></li>
                        <li><span>Dr. Uday Kumar S. B.</span></li>
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
                <img src="assets/images/team/Dr-Uday-Kumar-img.png" alt="Dr. Uday Kumar S. B">

                <div class="team-details__identity">
                    <h3 class="team-details__name">Dr. Uday Kumar S. B.</h3><!-- /.team-details__name -->
                    <p class="team-details__designation">Specialized in orthopedic surgeon</p>
                    <!-- /.team-details__designation -->
                </div><!-- /.team-details__identity -->
            </div><!-- /.team-details__image -->
            <div class="team-details__about wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                <div class="team-details__about__inner">
                    <h3 class="team-details__about__title">about me</h3><!-- /.team-details__about__title -->
                    <p class="team-details__about__description">Dr. Uday Kumar S. B. is the best orthopedic surgeon in
                        Bangalore, with over 30 years of experience in the field. Known for his expertise in complex
                        orthopedic surgeries, he is regarded as one of the top specialists in the region. Dr. Kumar
                        specializes in a wide range of treatments, including pelvic fractures, acetabular fractures,
                        joint replacement surgeries, and complex trauma care.</p><br>
                    <p>Dr. Kumar completed his MBBS from Bangalore Medical College, followed by an MS in Orthopedics
                        from Osmania Medical College, Hyderabad. He has been serving as a Consultant Orthopedic Surgeon
                        at P.D. Hinduja Sindhi Hospital since 1991 and has contributed significantly to the field of
                        orthopedics through academic and clinical engagements.</p>
                    <p>With extensive experience in arthroplasty, joint replacement, and trauma surgery, Dr. Kumar has
                        presented numerous case reports and papers at leading conferences such as BOSCON, IOACON, and
                        KOACON. He is well-versed in advanced techniques like the Ilizarov method, external fixation,
                        and pelvic fracture surgeries, making him a highly sought-after surgeon for complex cases.</p>
                    <p>In addition to his clinical expertise, Dr. Kumar has taught and mentored MBBS students and
                        postgraduates at Hinduja Sindhi Hospital, contributing to the academic development of the next
                        generation of orthopedic professionals. His involvement in CME programs and workshops showcases
                        his commitment to advancing orthopedic care.</p>
                    <!-- /.team-details__about__description -->
                </div><!-- /.team-details__about__inner -->
                <ul class="team-details__contact list-unstyled">
                    <li>
                        <span class="team-details__contact__icon">
                            <i class="icon-location"></i>
                        </span>
                        <div class="team-details__contact__content">
                            <h3 class="team-details__contact__title">Address</h3>
                            <a href="https://www.google.com/maps/place/P+D+Hinduja+Sindhi+Hospital+%7C+Bengaluru,Karnataka/@12.9644866,77.5900629,849m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3bae15d8e319913d:0x981f7d1f898b0c96!8m2!3d12.9644866!4d77.5926378!16s%2Fg%2F1tfblrf2?authuser=0&entry=ttu&g_ep=EgoyMDI2MDQxMy4wIKXMDSoASAFQAw%3D%3D"
                                class="team-details__contact__link">P.D. Hinduja Sindhi Hospital<br>Bangalore, India</a>
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
                            <a href="mailto:hindujasindhihospital@gmail.com"
                                class="team-details__contact__link">hindujasindhihospital@gmail.com</a>
                        </div>
                    </li><!-- /.item -->
                </ul><!-- /.team-details__contact -->
            </div><!-- /.team-details__about -->
        </div><!-- /.team-details__inner -->
    </div><!-- /.container -->
</section><!-- /.team-details section-space-top -->

<section class="team-skills-one">
    <div class="container">
        <div class="team-skills-one__info">
            <div class="team-skills-one__content">
                <h3 class="team-skills-one__title">Key Expertise:</h3><!-- /.team-skills-one__title -->
                <div class="team-skills-one__description wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <p class="team-skills-one__text"><strong>Pelvic Fracture Treatment:</strong> Specializing in complex
                        surgeries to repair and restore the function of the pelvic bone.</p>
                    <!-- /.team-skills-one__text -->
                    <p class="team-skills-one__text"><strong>Joint Replacement Surgery:</strong> Expertise in total hip
                        and knee replacements, offering relief from joint pain and improving mobility.</p>
                    <!-- /.team-skills-one__text -->
                    <p class="team-skills-one__text"><strong>Arthroplasty:</strong>Skilled in advanced joint surgeries
                        to improve the function of damaged or worn-out joints.</p><!-- /.team-skills-one__text -->
                    <p class="team-skills-one__text"><strong>Trauma Surgery:</strong> Handling complex trauma cases,
                        including fractures and other serious injuries, to ensure proper recovery.</p>
                    <!-- /.team-skills-one__text -->
                    <p class="team-skills-one__text"><strong>Advanced Surgical Techniques:</strong>Proficient in methods
                        like the Ilizarov technique and external fixation, used for treating complex fractures and bone
                        deformities.</p><!-- /.team-skills-one__text -->
                    <p class="team-skills-one__text">At P.D. Hinduja Sindhi Hospital, Dr. Kumar continues to provide
                        high-quality, patient-centered care, helping individuals regain their mobility and quality of
                        life after orthopedic trauma or surgery.</p><!-- /.team-skills-one__text -->
                </div><!-- /.team-skills-one__description -->
            </div><!-- /.team-skills-one__content -->
        </div><!-- /.team-skills-one__info -->

    </div><!-- /.container -->
</section><!-- /.team-skills-one -->

<section class="appointment-one section-space-bottom">
    <div class="appointment-one__bg mediox-jarallax" data-jarallax data-speed="0.3s"
        style="background-image: url(assets/images/backgrounds/app-bg.png);">
        <div class="appointment-one__bg__inner"
            style="background-image: url(assets/images/shapes/appointment-shape-bg.png);"></div>
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
                    <form action="assets/inc/sendemail.php"
                        class="appointment-one__form contact-form-validated form-one wow fadeInUp"
                        data-wow-duration="1500ms">
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
                                <input type="text" name="date" placeholder="Select Date*" id="datepicker"
                                    class="mediox-datepicker">
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