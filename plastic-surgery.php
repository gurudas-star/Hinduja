
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "plastic-surgery" ?>
<?php $body_class = "custom-cursor" ?>
<?php
$home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

<section class="page-header">
    <div class="container-fluid">
        <div class="page-header__inner">
            <div class="page-header__bg" style="background-image: url(assets/images/department/Breadcrumb1.png);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <div class="page-header__content">
                    <h2 class="page-header__title">Plastic Surgery</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Plastic Surgery</span></li>
                    </ul><!-- /.mediox-breadcrumb list-unstyled -->
                </div><!-- /.page-header__content -->
            </div><!-- /.container -->
        </div><!-- /.page-header__inner -->
    </div><!-- /.container-fluid -->
</section><!-- /.page-header -->

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-md-12 col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar__info service-sidebar__single">
                        <ul class="list-unstyled service-sidebar__nav wow fadeInLeft" data-wow-duration="1500ms">
                                    <li><a href="internal-medicine.php">Internal Medicine</a></li>
                                    <li><a href="general-surgery.php">General Surgery</a></li>
                                    <li><a href="obstetrics-gynaecology.php">Obstetrics & Gynaecology</a></li>
                                    <li><a href="family-medicine.php">Family Medicine</a></li>
                                    <li> <a href="general-pediatrics.php">General Pediatric</a></li>
                                    <li><a href="orthopaedics.php">Orthopedic</a></li>
                                    <li><a href="ent.php">Ear, Nose & Throat (ENT)</a></li>
                                    <li><a href="urology.php">Urology</a></li>
                                    <li><a href="dental-surgery.php">Dental Surgery</a></li>
                                    <li><a href="emergency-services.php">Emergency Services</a></li>
                                    <li><a href="medical-oncology-hematology.php">Medical Oncology & Hematology</a></li>
                                    <li><a href="neurology.php">Neurology</a></li>
                                    <li><a href="medical-gastroenterology.php">Medical Gastroenterology</a></li>
                                    <li><a href="neuro-surgery.php">Neuro Surgery</a></li>
                                    <li><a href="plastic-surgery.php">Plastic Surgery</a></li>
                                    <li><a href="oncology-services.php">Oncology Services</a></li>
                                    <li><a href="cardiology.php">Cardiology</a></li>
                                    <li><a href="pulmonology.php">Pulmonology</a></li>
                                    <li><a href="nephrology.php">Nephrology</a></li>
                                    <li><a href="intensive-care-unit.php">Level 3 Intensive Care Unit</a></li>
                                </ul>
                        <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms"
                            data-wow-delay="100ms"
                            style="background-image: url('assets/images/services/doctor-call-image.png');">
                            <div class="service-sidebar__contact__bg">
                                <div class="service-sidebar__contact__bg__inner"
                                    style="background-image: url('assets/images/shapes/service-sidebar-contact-bg-2.png');">
                                </div><!-- /.service-sidebar__contact__bg__inner -->
                            </div><!-- /.service-sidebar__contact__bg -->
                            <div class="service-sidebar__contact__inner">
                                <div class="service-sidebar__contact__icon">
                                    <i class="icon-telephone"></i>
                                </div><!-- /.service-sidebar__contact__icon -->
                                <div class="service-sidebar__contact__content">
                                    <h4 class="service-sidebar__contact__time">MON-SAT 8:00AM-9:00PM</h4>
                                    <!-- /.service-sidebar__contact__time -->
                                    <h4 class="service-sidebar__contact__number">
                                        <a href="tel:+9108049030303">+91 080 4903 0303</a>
                                    </h4><!-- /.service-sidebar__contact__number -->
                                </div><!-- /.service-sidebar__contact__content -->
                            </div><!-- /.service-sidebar__contact__inner -->
                        </div><!-- /.service-sidebar__contact -->
                    </div><!-- /.service-sidebar__info service-sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-8">
                <div class="service-details__content">
                    <div class="service-details__inner">
                        <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <img src="assets/images/department/plasticsurgery-dept.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Specialized Care for Reconstructive and Cosmetic Needs</h2>
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bangalore, India, our Plastic Surgery Department is committed to providing expert care in both reconstructive and cosmetic surgery. With a focus on achieving natural-looking results, we combine advanced techniques with personalized treatment plans to meet the unique needs of each patient.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Plastic Surgery</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p>Plastic surgery encompasses a wide range of procedures aimed at enhancing or restoring the appearance and function of various parts of the body. This field includes both reconstructive surgeries, which address abnormalities or injuries, and cosmetic procedures, which focus on improving aesthetic appearance. At P.D. Hinduja Sindhi Hospital, our Plastic Surgery Department offers a wide range of services designed to help patients achieve their goals, whether through surgical interventions or non-surgical treatments.</p>
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?</b></h2>
                        <!-- /.service-details__sub-title -->
                         <ul>
    <li><b>Expert Team:</b> Our highly skilled and experienced plastic surgeons are dedicated to providing the highest quality care, ensuring optimal outcomes for every patient.</li>
    <li><b>Personalized Care:</b> We recognize that each patient is unique, and we tailor our approach to meet individual needs and goals, crafting personalized treatment plans.</li>
    <li><b>State-of-the-Art Technology:</b> We employ the latest technology and advanced surgical techniques to deliver safe and effective treatments that produce natural-looking results.</li>
    <li><b>Wide Range of Services:</b> From cosmetic enhancements to reconstructive surgeries and non-surgical treatments, we offer a full range of plastic surgery services to address all aspects of your care.</li>
    <li><b>Patient-Centered Approach:</b> Your comfort, safety, and satisfaction are our top priorities. We are committed to providing compassionate care and guiding you through every step of your treatment journey.</li>
</ul>
                        
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Our Services</b></h2>
                        
                       <ul>
    <li><b>Non-Surgical Treatments:</b> We provide non-invasive treatments such as Botox injections and dermal fillers, which rejuvenate the skin and reduce signs of aging, giving you a refreshed and youthful appearance.</li>
    <li><b>Cosmetic Procedures:</b> We offer a wide range of cosmetic surgeries, including facelifts, rhinoplasty, and breast augmentation, designed to enhance your appearance and help you achieve your desired look.</li>
    <li><b>Reconstructive Surgery:</b> Our surgeons specialize in reconstructive procedures that restore form and function after injury, trauma, or illness, helping you regain confidence and a sense of normalcy.</li>
    <li><b>Hand Surgery:</b> Our team is proficient in hand surgery techniques, addressing congenital abnormalities, injuries, and conditions that affect hand function, with the goal of improving mobility and strength.</li>
</ul>

                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
What is the difference between reconstructive and cosmetic plastic surgery?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Reconstructive surgery aims to restore function and appearance following injury, trauma, or congenital conditions, while cosmetic surgery focuses on enhancing appearance through elective procedures.</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
How do I know if I’m a good candidate for plastic surgery?                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>A consultation with one of our plastic surgeons will help determine if you’re a suitable candidate, based on your health, goals, and expectations.</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
What can I expect during recovery from plastic surgery?                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Recovery varies depending on the procedure. Our team will provide detailed post-operative care instructions to help you heal properly and achieve the best results.

</p>                                </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
Are non-surgical treatments effective?                                       <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>Yes, non-surgical treatments like Botox and dermal fillers can be very effective for reducing signs of aging and enhancing your appearance with minimal downtime.

</p>                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
How do you ensure patient safety during plastic surgery?

                                     <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
<p>We adhere to strict safety protocols, utilize advanced technology, and have a skilled surgical team to ensure the highest level of patient safety.

</p>                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            
                    </div><!-- /.service-details__faq -->
                </div><!-- /.service-details__content -->

               

<div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
    data-wow-delay="00ms" style="margin-top: 30px;">

    <h2 class="service-details__sub-title"><b>OPD Hours:</b></h2>

    <table class="opd-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qualification</th>
                <th>Days</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dr. Keertana Devasani</td>
                <td>M.S., Mch</td>
                <td>Mon/Thu</td>
                <td>4 P.M-6 P.M</td>
                <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Keertana Devasani','M.S., Mch')">
                                                Book an Appointment
                                                </a>
                                            </td>
            </tr>
        </tbody>
    </table>

</div>

<div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
    data-wow-delay="00ms">

    <h2 class="service-details__sub-title"><b>Doctors</b></h2>

    <div class="doctor-section">

        <div class="d1">
            <img src="assets/images/team/Dr-Keerthana-Devasani.png" alt="">
            <h4>Dr. Keertana Devasani</h4>
           
           <button onclick="openAppointment(
        'Dr. Keertana Devasani',
        'M.S., Mch'
    )">
        Book an Appointment
    </button>
        </div>

    </div>

</div>
            </div><!-- /.col-md-12 col-lg-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-details section-space -->

<!-- MODAL -->

<?php require_once('parts/shared/appointment-modal.php'); ?>


<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>