
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Intensive Care" ?>
<?php $body_class="custom-cursor"?>
<?php
  $home = true;
?>
<!-- Header Here -->
<?php require_once('parts/header/header-four.php'); ?>

        <section class="page-header">
            <div class="container-fluid">
                <div class="page-header__inner">
                    <div class="page-header__bg" style="background-image: url(assets/images/department/Breadcrumb1.png);"></div><!-- /.page-header__bg -->
                    <div class="container">
                        <div class="page-header__content">
                            <h2 class="page-header__title">Level 3 Intensive Care Unit</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Level 3 Intensive Care Unit</span></li>
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
                                <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="100ms" style="background-image: url('assets/images/services/doctor-call-image.png');">
                                    <div class="service-sidebar__contact__bg">
                                        <div class="service-sidebar__contact__bg__inner" style="background-image: url('assets/images/shapes/service-sidebar-contact-bg-2.png');"></div><!-- /.service-sidebar__contact__bg__inner -->
                                    </div><!-- /.service-sidebar__contact__bg -->
                                    <div class="service-sidebar__contact__inner">
                                        <div class="service-sidebar__contact__icon">
                                            <i class="icon-telephone"></i>
                                        </div><!-- /.service-sidebar__contact__icon -->
                                        <div class="service-sidebar__contact__content">
                                            <h4 class="service-sidebar__contact__time">MON-SAT 8:00AM-9:00PM</h4><!-- /.service-sidebar__contact__time -->
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
                                <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <img src="assets/images/department/Level_3_ICU.png" alt="cardiology">
                                    <p class="service-details__text">The Intensive Care Unit (ICU) at P.D. Hinduja Sindhi Hospital in Bangalore, India, is dedicated to providing specialized care for patients with critical medical needs. Our Level 3 ICU is equipped with advanced technology and staffed by a team of highly trained medical professionals, all committed to delivering exceptional care and support. With a strong focus on care, competence, and compassion, our ICU ensures the highest quality of care at an affordable cost.</p>
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Understanding Level 3 Intensive Care</h2><!-- /.service-details__title -->
                                    <p class="service-details__text">Level 3 Intensive Care Units (ICUs) provide the highest level of critical care for patients with severe or life-threatening conditions. These units are equipped with advanced monitoring systems and life-support equipment to manage complex and acute medical situations. The care in a Level 3 ICU is highly specialized, involving a multidisciplinary team of healthcare professionals who work together to stabilize and treat critically ill patients.</p>
                                   
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                    <li><strong>Expert Care:</strong>
                                        Our ICU team comprises highly skilled doctors, nurses, and specialists who are experts in critical care medicine. They bring the highest level of medical expertise to the treatment and care of our patients.
                                    </li>
                                    <li><strong>Advanced Technology:</strong>
                                        The ICU is equipped with the latest medical technology and equipment, enabling us to provide continuous monitoring and the best possible care for critically ill patients.
                                    </li>
                                    <li><strong>Best-in-Class Support:</strong>
                                        We emphasize holistic care, addressing not only the medical needs but also the emotional and psychological well-being of our patients and their families. We ensure that they feel supported during these challenging times.
                                    </li>
                                    <li><strong>Multidisciplinary Approach:</strong>
                                        Our ICU team collaborates closely with specialists from various fields to manage every aspect of a patient’s condition. This coordinated care approach promotes better outcomes.
                                    </li>
                                    <li><strong>Patient-Centered Care:</strong>
                                        We prioritize the comfort and well-being of our patients, offering personalized care plans and ensuring that both patients and their families are kept informed and supported throughout their ICU stay.
                                    </li>
                                </ul>
                            </div>
                            

                            <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Services We Provide</h2><!-- /.service-details__title -->

                                    <ul>
                                        <li>
                                            <strong>Family Support Services:</strong>
                                            Counseling and support services for the families of patients, helping them navigate the emotional challenges of having a loved one in intensive care.
                                        </li>
                                        <li>
                                            <strong>Advanced Monitoring:</strong>
                                            Continuous monitoring of vital signs and organ functions to ensure timely interventions.
                                        </li>
                                        <li>
                                            <strong>Life Support Systems:</strong>
                                            State-of-the-art ventilators, dialysis machines, and other life-support equipment to manage severe and life-threatening conditions.
                                        </li>
                                        <li>
                                            <strong>Critical Care Management:</strong>
                                           Expertise in managing a wide range of critical conditions, including sepsis, multi-organ failure, severe trauma, and post-surgical care.
                                        </li>
                                        <li>
                                            <strong>Multidisciplinary Care:</strong>
                                            Collaboration with specialists across different medical fields to address the complex needs of critically ill patients.</p>
                                        </li>
                                    </ul>
                                   
                                </div>

                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <p>At P.D. Hinduja Sindhi Hospital, our Intensive Care Unit is dedicated to providing top-tier care for patients with critical medical needs. With over 60 years of healthcare excellence, we remain committed to helping patients recover and ensuring the best possible outcomes through expert, compassionate care that is both accessible and affordable.</p>
                                   
                                </div>
                            
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is a Level 3 ICU?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>A Level 3 ICU is the highest level of intensive care unit, equipped with advanced technology and staffed by a specialized team to manage critically ill patients with complex medical needs.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How are patients monitered in the ICU?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Patients in the ICU are continuously monitored using advanced technology that tracks vital signs, organ functions, and other critical parameters to ensure timely medical interventions.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What types of conditions require ICU care?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>ICU care is required for severe or life-threatening conditions such as respiratory failure, multi-organ failure, severe trauma, and post-surgical complications.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How is the family involved in the care process?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>We ensure that families are kept informed and involved in the care process, providing regular updates, counseling, and support to help them understand and cope with the situation.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What measures are taken to ensure patient comfort in the ICU?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>We focus on both medical and emotional care, offering pain management, comfort measures, and psychological support to ensure that patients are as comfortable as possible during their ICU stay.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>
                                                                                                       
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->

                            

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
                <td>Dr. Manjunath Kumar. N</td>
                <td>MBBS., MEM., FCCM</td>
                <td>Mon – Sat</td>
                <td>8 A.M – 4 P.M</td>
                <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Manjunath Kumar. N','MBBS., MEM., FCCM')">
                                                Book an Appointment
                                                </a>
                                            </td>
            </tr>
        </tbody>
    </table>

</div>

                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        <!-- MODAL -->

<?php require_once('parts/shared/appointment-modal.php'); ?>

       

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>