
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Nephrology" ?>
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
                            <h2 class="page-header__title">Nephrology</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Nephrology</span></li>
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
                                </ul><!-- /.list-unstyled service-sidebar__nav -->
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
                                    <img src="assets/images/department/Nephrology.png" alt="cardiology">
                                    <p class="service-details__text">The Nephrology Department at P.D. Hinduja Sindhi Hospital in Bangalore, India, is committed to delivering care for patients with kidney-related conditions. Leveraging advanced technology, a patient-centered approach, and a dedication to affordable excellence, we strive to achieve the best possible outcomes for both acute and chronic kidney issues.</p>
                                </div><!-- /.service-details__thumbnail -->
                                
                                   
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Understanding Nephrology</b></h2><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Nephrology is a branch of medicine that deals with the diagnosis and treatment of kidney diseases. This includes conditions such as chronic kidney disease, acute kidney injury, kidney stones, and electrolyte imbalances. Nephrologists are specialized doctors who focus on managing kidney-related health issues, including the care of patients undergoing dialysis or those who have received kidney transplants.</p>
                            </div>
                            

                            <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">What We Treat</h2><!-- /.service-details__title -->

                                    <ul>
                                        <li>
                                            <strong>Hemodialysis Access:</strong>
                                            <p>We ensure vital access for hemodialysis, a life-saving procedure that removes waste and excess fluid from the blood when the kidneys are not functioning properly.</p>
                                        </li>
                                        <li>
                                            <strong>Hemodialysis (Acute and Chronic):</strong>
                                            <p>Our expert team provides both acute and chronic hemodialysis treatments, helping manage kidney failure and improving the quality of life for our patients.</p>
                                        </li>
                                        <li>
                                            <strong>Consultation for All Kidney Diseases (Outpatient and Inpatient):</strong>
                                            <p>We offer specialized consultations for a wide range of kidney diseases, whether you are an outpatient or an inpatient, ensuring holistic care tailored to your needs.</p>
                                        </li>
                                        
                                        <li>
                                            <strong>Follow-Up for Kidney Transplant Recipients:</strong>
                                            <p>We offer dedicated ongoing care for kidney transplant recipients, supporting long-term health and the success of the transplant.</p>
                                        </li>
                                    </ul>
                                   
                                </div>

                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Why Choose P.D. Hinduja Sindhi Hospital?</h2><!-- /.service-details__title -->

                                    <ul>
                                        <li>
                                            <strong>Holistic Management:</strong>
                                            <p>We adopt a multidisciplinary approach, coordinating with other departments to deliver continuous care tailored to your unique needs.</p>
                                        </li>
                                        <li>
                                            <strong>Expertise:</strong>
                                            <p>Our nephrology team comprises highly skilled and experienced professionals committed to delivering the highest standard of care for all kidney-related conditions.</p>
                                        </li>
                                        <li>
                                            <strong>Advanced Technology:</strong>
                                            <p>We utilize the latest medical technology and techniques to ensure precise diagnosis and effective treatment of kidney diseases.</p>
                                        </li>
                                        <li>
                                            <strong>Best-in-Class Dialysis Services:</strong>
                                            <p>Our state-of-the-art dialysis center provides top-tier hemodialysis, ensuring the best possible care for our patients.</p>
                                        </li>
                                        <li>
                                            <strong>Patient-Centered Approach:</strong>
                                            <p>We prioritize your well-being, offering compassionate care and clear communication to support you and your family throughout your treatment journey.</p>
                                        </li>
                                        <li>
                                            <strong>Continuous Monitoring:</strong>
                                            <p>Our commitment to ongoing care and monitoring ensures optimal outcomes, whether you are undergoing dialysis, managing chronic conditions, or receiving post-transplant follow-up.</p>
                                        </li>
                                    </ul>
                                   
                                </div>
                                <div>
                                    <p>At P.D. Hinduja Sindhi Hospital, our Nephrology Department is dedicated to providing high-quality, compassionate care for kidney-related conditions. With over 60 years of excellence in healthcare, we continue to serve our community with care, competence, and compassion at an affordable cost.</p>
                                </div>
                            
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is hemodialysis, and when is it necessary?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Hemodialysis is a procedure that filters waste and excess fluids from your blood when your kidneys are no longer able to do so. It is necessary for patients with severe kidney failure.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How often do I need to undergo hemodialysis?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>The frequency of hemodialysis depends on your specific condition. Typically, patients undergo dialysis three times a week, but this may vary based on individual needs.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What follow-up care is provided after a kidney transplant?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>After a kidney transplant, we provide continuous monitoring and care to ensure the success of the transplant and manage any complications that may arise.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How do you ensure the quality of your dialysis services ?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>We maintain high standards by using advanced technology, employing skilled professionals, and providing holistic care plans tailored to each patient’s needs.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                                                                                       
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
                <td>Dr. Umesh</td>
                <td>D.M., D.N.B</td>
                <td>On call</td>
                <td>On call</td>
                <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Umesh','D.M., D.N.B')">
                                                Book an Appointment
                                                </a>
                                            </td>
            </tr>
            <tr>
                <td>Dr. Ramesh</td>
                <td>MBBS</td>
                <td>Mon-Sat</td>
                <td>2 P.M-3 P.M</td>
                <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Ramesh','MBBS')">
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
            <img src="assets/images/team/Dr-Umesh.png" alt="">
            <h4>Dr. Umesh</h4>
           
            <button onclick="openAppointment(
        'Dr. Umesh',
        'D.M., D.N.B'
    )">
        Book an Appointment
    </button>
        </div>

    </div>

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