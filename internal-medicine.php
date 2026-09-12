
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Internal Medicine" ?>
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
                            <h2 class="page-header__title">Internal Medicine</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Internal Medicine</span></li>
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
                                    <img src="assets/images/department/internal-medicine-wide.png" alt="cardiology">
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2><!-- /.service-details__title -->
                                    <p class="service-details__text">The Internal Medicine Department at P.D. Hinduja Sindhi Hospital in Bengaluru is dedicated to providing care that prioritizes your overall health and well-being. With over 60 years of experience, our hospital is recognized for its commitment to quality healthcare, blending expertise with compassionate service at affordable costs..</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Why P.D. Hinduja Sindhi Hospital?</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                   <li><b>Collaborative Care:</b> Our experienced physicians work in close collaboration with various departments to deliver general and preventive care. This multidisciplinary approach ensures the effective management of a wide range of health conditions, tailored to your individual needs.</li>
                                   <li><b>Preventive Focus:</b> We place a strong emphasis on preventive care, offering immunizations, health counseling, and guidance to help you maintain a healthy and balanced lifestyle.</li> 
                                </ul>
                            </div>

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Services We Provide</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                   <li><b>Evidence-Based Practice:</b> Our treatments are grounded in the latest research and clinical evidence, ensuring that you receive care that is both effective and up-to-date</li>
                                   <li><b>Wide Spectrum of Health Assessments:</b>We conduct detailed evaluations to identify and diagnose underlying conditions, enabling us to develop personalized treatment plans that support optimal health.</li> 
                                   <li><b>Chronic Disease Management:</b> Our department specializes in the management of chronic conditions such as diabetes, hypertension, and heart disease, providing continuous care aimed at improving your quality of life.</li>
                                   <li><b>Dietary Services:</b> Our dietary department offers tailored nutritional plans to meet the specific dietary needs of each patient, ensuring balanced and appropriate nourishment.</li> 
                                   <li><b>Preventive Care:</b> Regular screenings, immunizations, and lifestyle counseling are key components of our preventive care services, helping you stay healthy and active.</li>
                                   <li><b>Acute Illness Treatment:</b> We provide prompt and effective treatment for acute illnesses, including infections and minor injuries, to ensure a swift and comfortable recovery.</li> 
                                   <li><b>Coordination of Care:</b>We work closely with specialists and other healthcare providers to ensure seamless care during your hospital stay and after discharge, addressing all aspects of your health.</li> 
                                </ul>

                                <p>At P.D. Hinduja Sindhi Hospital, the Internal Medicine Department is committed to providing quality care, and guiding you on your journey to better health every step of the way.</p>
                            </div>                                                                                    
                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is Internal Medicine?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Internal Medicine focuses on the prevention, diagnosis, and treatment of adult diseases. Our Physicians are trained to manage complex conditions and provide care that addresses both immediate and long-term health needs.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How do I know if I need to see an Internal Medicine specialist?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p> If you are experiencing symptoms that affect multiple systems of your body or if you have a chronic condition that requires ongoing management, an Internal Medicine specialist can provide the expertise needed to coordinate your care.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What should I expect during my first visit?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>During your initial consultation, our Physicians will take a detailed medical history, conduct a thorough physical examination, and discuss any concerns or symptoms you may have. Based on this evaluation, they will recommend appropriate tests or treatments and develop a personalized care plan.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How do I know if I need to see an Internal Medicine specialist?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p> If you are experiencing symptoms that affect multiple systems of your body or if you have a chronic condition that requires ongoing management, an Internal Medicine specialist can provide the expertise needed to coordinate your care.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How does the Internal Medicine Department work with other specialists?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Our Internal Medicine Physicians collaborate with Specialists across various disciplines to ensure proper care. This coordination allows for the integration of different treatment approaches, ensuring that all aspects of your health are addressed.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Can Internal Medicine Physicians provide preventive care ?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, our Internal Medicine Department emphasizes preventive care, including regular screenings, immunizations, and lifestyle counseling, to help you maintain good health and prevent the onset of diseases.</p>
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
                                            <td rowspan="2">Dr. Anita Dias</td>
                                            <td rowspan="2">MBBS, M.D</td>
                                            <td>Mon / Wed / Fri</td>
                                            <td>9 A.M - 1 P.M</td>
                                            <td rowspan="2">
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Anita Dias','MBBS, M.D')">
                                                Book an Appointment
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tue / Thu</td>
                                            <td>10 A.M - 12 P.M</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Dr. Aisiri Anand</td>
                                            <td>M.D</td>
                                            <td>Mon/Tue/Wed/ Fri</td>
                                            <td>10 A.M – 2 P.M</td>
                                            <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Aisiri Anand','M.D')">
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
                                <img src="assets/images/team/dr-Anita.png" alt="">
                                <h4>Dr. Anita Dias</h4>
                            
                                  <button onclick="openAppointment(
        'Dr. Anita Dias',
        'MBBS, MD'
    )">
        Book an Appointment
    </button>
                            </div>
                            <div class="d1">
                                <img src="assets/images/team/Dr-Abhishek-N.png" alt="">
                                <h4>Dr. Abhishek N.</h4>
                            
                                  <button onclick="openAppointment(
        'Dr. Abhishek N.',
        'MBBS, MD'
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