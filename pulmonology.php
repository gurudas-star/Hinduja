
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Pulmonology" ?>
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
                    <h2 class="page-header__title">Pulmonology</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Pulmonology</span></li>
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
                            <img src="assets/images/department/pulmonology-dept.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <!-- <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2> -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bangalore, India, our
                                Pulmonology Department is committed to providing high-quality care for patients with
                                lung diseases and respiratory conditions. Guided by principles of care, competence, and
                                compassion, we offer advanced clinical evaluations, precise diagnoses, and effective
                                treatments to ensure the best possible outcomes, all while maintaining affordability.
                            </p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Pulmonology</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p>Pulmonology is the branch of medicine that focuses on the diagnosis and treatment of lung and
                            respiratory system disorders. This includes conditions such as asthma, chronic obstructive
                            pulmonary disease (COPD), lung infections, and sleep-related breathing disorders. At P.D.
                            Hinduja Sindhi Hospital, our Pulmonology Department is equipped with advanced technology and
                            staffed by experts dedicated to improving respiratory health and quality of life for our
                            patients</p>
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?</b></h2>
                        <!-- /.service-details__sub-title -->
                        <ul>
                            <li><b>Expert Team:</b> Our department is staffed by highly skilled pulmonologists,
                                respiratory therapists, and support staff who are committed to delivering the highest
                                standard of care.</li>
                            <li><b>Advanced Technology:</b> We employ the latest diagnostic and treatment technologies,
                                ensuring accurate diagnosis and effective management of respiratory conditions.</li>
                            <li><b>Best-in-Class Care:</b> We offer a wide range of pulmonary services, from initial
                                evaluation to treatment and follow-up care, ensuring continuity and excellence in care
                                under one roof.</li>
                            <li><b>Patient-Centered Approach:</b> We prioritize our patients’ well-being by creating
                                personalized treatment plans tailored to their specific needs, aiming for the best
                                possible outcomes and an improved quality of life.</li>
                        </ul>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Our Services</b></h2>

                        <ul>
                            <li><b>Specialty Clinics:</b> We run dedicated specialty clinics focusing on conditions such
                                as asthma, allergies, lung cancer, and other respiratory diseases. These clinics provide
                                targeted care and rehabilitation services, ensuring specialized and effective treatment.
                            </li>

                            <li><b>Respiratory Intensive Care:</b> Our specialized respiratory intensive care unit is
                                equipped with state-of-the-art technology and staffed by trained intensivists, providing
                                exceptional care for critically ill patients with severe respiratory conditions.</li>

                            <li><b>Advanced Lung Function Testing:</b> We offer a wide range of lung function tests,
                                including spirometry, lung volumes, transfer factor, impulse oscillometry, exhaled
                                nitric oxide measurement, mouth pressure measurement, and the 6-minute walk test, to
                                thoroughly assess lung health and function.</li>

                            <li><b>Sleep Services:</b> We specialize in diagnosing and treating sleep apnea and other
                                sleep-related disorders, helping patients achieve better sleep and improve overall
                                health.</li>

                            <li><b>Flight Assessment Clinic:</b> Our clinic provides evaluations for patients with
                                chronic lung conditions who plan to travel by air, ensuring they can fly safely and
                                comfortably.</li>
                        </ul>

                        <p>At P.D. Hinduja Sindhi Hospital, our Pulmonology Department is dedicated to delivering
                            compassionate, expert care for all respiratory conditions. With our experienced team,
                            advanced technology, and a patient-centered approach, we strive to improve the health and
                            well-being of our patients, upholding our 60+ year legacy of excellence in healthcare.</p>

                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What conditions do you treat at the Pulmonology Department?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We treat a wide range of respiratory conditions, including asthma, COPD, lung
                                            infections, sleep apnea, and lung cancer. Our specialty clinics also offer
                                            focused care for specific respiratory diseases.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is involved in a lung function test?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Lung function tests measure how well your lungs are working by assessing
                                            airflow, lung volume, and gas exchange. These tests help diagnose and
                                            monitor lung diseases, guiding treatment decisions.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you diagnose sleep-related breathing disorders?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We diagnose sleep-related breathing disorders, such as sleep apnea, using
                                            overnight sleep studies and other diagnostic tools that monitor your
                                            breathing patterns, oxygen levels, and other vital signs during sleep.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is the Flight Assessment Clinic? <span
                                            class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>The Flight Assessment Clinic evaluates patients with chronic lung conditions
                                            who plan to travel by air, assessing their fitness to fly and providing
                                            recommendations to ensure a safe and comfortable journey.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you develop treatment plans for respiratory conditions?

                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Treatment plans are developed based on a thorough evaluation of the patient’s
                                            condition, including diagnostic tests and consultations with specialists. We
                                            tailor each plan to address the specific needs and goals of the patient.</p>
                                    </div><!-- /.accordion-content -->
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
                                        <td>Dr. Deepthi Laldayal</td>
                                        <td>MD., DNB</td>
                                        <td>Mon – Sat</td>
                                        <td>10 A.M – 12 P.M</td>
                                        <td>
                                            <a href="javascript:void(0)" class="opd-btn"
                                                onclick="openAppointment('Dr. Deepthi Laldayal','MD., DNB')">
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
                                    <img src="assets/images/team/Dr-Deepthi-Laldayal.png" alt="">
                                    <h4>Dr. Deepthi Laldayal</h4>

                                    <button onclick="openAppointment(
        'Dr. Deepthi Laldayal',
        'MD., DNB'
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