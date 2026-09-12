
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Family medicine" ?>
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
                            <h2 class="page-header__title">Family Medicine</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Family Medicine</span></li>
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
                            <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <img src="assets/images/department/family-medicine-wide.png" alt="cardiology">
                                </div>
                            
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, we are dedicated to providing healthcare for your entire family. Our Family Medicine Department focuses on preventive care, personalized treatment, and continuous support, ensuring that patients of all ages—from infants to seniors—receive the care they need. With over 60 years of experience, our approach combines care, competence, and compassion to offer high-quality, affordable healthcare tailored to meet the unique needs of every family member.</p>
                                
                            </div>

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Understanding Family Medicine Services</b></h2><!-- /.service-details__sub-title -->
                                <p class="service-details__text"><strong>Family Medicine</strong> is a healthcare specialty that provides continuous and holistic care for individuals and families. It encompasses various services tailored to meet the diverse needs of patients at every stage of life, focusing on prevention, diagnosis, treatment, and management of health conditions.</p>
                                <ul>
                                <li><strong>Primary Care:</strong> Our Family Medicine practitioners are your first point of contact for healthcare, offering routine check-ups, preventive screenings, and chronic disease management.</li>
                                <li><strong>Pediatric Care:</strong> Specialized care for children, including well-child visits, vaccinations, and management of common pediatric conditions.</li>
                                <li><strong>Adult Medicine:</strong> Services tailored to adult health needs, including preventive screenings, chronic disease management, and wellness assessments.</li>
                                <li><strong>Women’s Health:</strong> Proper care for women, including Gynaecological exams, contraceptive counseling, menopause management, and cancer screenings.</li>
                                <li><strong>Men’s Health:</strong> Specialized care for men’s health issues, including prostate health, erectile dysfunction, and screening for chronic conditions.</li>
                                <li><strong>Behavioral Health:</strong> Integrated services for mental health, including counseling, psychotherapy, and management of conditions such as anxiety and depression.</li>
                                <li><strong>Nutritional Counseling:</strong> Personalized guidance to help manage weight, chronic conditions, and overall well-being.</li>
                                <li><strong>Preventive Medicine:</strong> Focus on reducing the risk of chronic diseases through healthy lifestyle interventions.</li>
                                </ul>
                            </div>                                                                                    
                            

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for Your Family’s Healthcare?</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                   <li><strong>Best-in-Class Care:</strong> We offer a wide range of healthcare services under one roof, addressing all your medical needs efficiently and effectively.</li>
                                   <li><strong>Experienced Team:</strong> Our skilled healthcare professionals provide personalized care, tailored to each patient’s unique needs.</li> 
                                   <li><strong>Advanced Technology:</strong> Our hospital is equipped with state-of-the-art medical technology and diagnostic tools, ensuring accurate diagnoses and effective treatments.</li> 
                                   <li><strong>Patient-Centered Approach:</strong> We create a supportive environment that prioritizes patient comfort and well-being.</li>
                                   <li><strong>Preventive Focus:</strong> Emphasizing preventive care and lifestyle interventions, we help you maintain optimal health and prevent chronic diseases.</li>
                                   <li><strong>Continuous Support:</strong> From routine check-ups to managing chronic conditions, we provide continuous care across all life stages.</li>
                                   <li>Integrated Services: Our multidisciplinary approach ensures coordinated care, with seamless referrals to specialists when needed.</li>
                                   <li><strong>Convenient Access: </strong>Centrally located in Bengaluru, our hospital offers easy access and flexible appointment scheduling to suit your busy lifestyle.</li>
                                </ul>

                                <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, our Family Medicine Department is dedicated to supporting your family’s health and well-being, providing compassionate and continuous care throughout every stage of life.</p>
                            </div> 

                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is the role of a Family Medicine practitioner?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Family Medicine practitioners provide holistic healthcare, serving as the primary point of contact for all medical needs. They offer preventive care, diagnose and manage chronic conditions, and coordinate care with specialists when necessary.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How often should my family visit a Family Medicine practitioner?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Regular check-ups are recommended at least once a year for routine health assessments and preventive screenings. However, the frequency may vary based on age, medical history, and existing health conditions.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What services are included in routine check-ups?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Routine check-ups typically include a physical examination, health screenings, vaccinations, and discussions about lifestyle, diet, and any health concerns you may have.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                               Can Family Medicine practitioners manage chronic diseases?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p> Yes, Family Medicine practitioners are trained to manage chronic conditions such as diabetes, hypertension, and asthma, providing ongoing care and support to improve your quality of life.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do you offer pediatric services?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, we provide specialized pediatric care, including well-child visits, immunizations, and management of common childhood illnesses.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>

                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What should I bring to my first appointment?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>For your first appointment, bring any previous medical records, a list of medications you are currently taking, and information about your family’s medical history.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>

                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How do I schedule an appointment?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>You can schedule an appointment by calling our hospital or using our online appointment booking system, available on our website.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>                                                                      
                                </div><!-- /.faq-accordion -->
                            </div>

                            

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
                                    <td>Dr. Bhuvaneshwari</td>
                                    <td>D.N.B</td>
                                    <td>Mon/Sat</td>
                                    <td>10 A.M – 2 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" 
                                        class="opd-btn"
                                        onclick="openAppointment('Dr. Bhuvaneshwari','D.N.B')">
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
                                            <img src="assets/images/team/Dr-Bhuvaneshwari.png" alt="">
                                            <h4>Dr. Bhuvaneshwari</h4>
                                        
                                            <button onclick="openAppointment(
        'Dr. Bhuvaneshwari',
        'D.N.B'
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