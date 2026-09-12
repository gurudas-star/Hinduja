
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "General Pediatrics" ?>
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
                            <h2 class="page-header__title">General Pediatric</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>General Pediatric</span></li>
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
                                        <img src="assets/images/department/Pediatric.png" alt="General pediatric">
                                </div>
                                <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                    <h2 class="service-details__sub-title"><b>Best Pediatric Hospital in Bangalore</b></h2>
                                    <p class="service-details__text">When it comes to your child’s health, finding the right hospital is crucial. At <strong>P.D. Hinduja Sindhi Hospital,</strong> we have been <strong>trusted by families for over 60 years </strong>for providing expert pediatric care with <strong>high success rates.</strong> Our team of <strong>experienced pediatricians and neonatologists</strong> ensures that every child receives the right treatment at the right time.</p>

                                    <p class="service-details__text">What makes us the <strong>best pediatric hospital in Bangalore </strong>is our <strong>specialized neonatal care for newborns, advanced medical facilities, and dedicated approach to child healthcare.</strong> From routine check-ups and vaccinations to treating complex medical conditions, we provide complete care personalized to your child’s needs.</p>
                                    
                                </div>
                            </div>

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>What is Pediatrics and Why is it Important?</b></h2><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Pediatrics is the <strong>branch of medicine that focuses on the health and development of infants, children, and adolescents.</strong> Children’s bodies function differently from adults, requiring <strong>specialized medical attention</strong> for both preventive and curative care.</p>

                                <p class="service-details__text">At <strong>P.D. Hinduja Sindhi Hospital,</strong> we offer a <strong>wide range of pediatric services,</strong> from <strong>newborn care and routine check-ups to the treatment of childhood diseases.</strong> Our focus is on <strong>early diagnosis, effective treatment, and long-term well-being.</strong></p>
                                
                            </div>                                                                                    
                            

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Top Pediatricians in Bangalore</b></h2><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Our hospital has a team of highly qualified pediatricians and neonatologists who specialize in child healthcare.</p>
                                <ul>
                                   <li><strong>Dr. Bhavya K.S. (MBBS, MRCPCH UK)</strong> – Available Monday to Saturday, 9:30 AM – 2:00 PM</li>
                                   <li><strong>Dr. Manu C. (MBBS, DCH, F. Neonatal, PGPN Boston)</strong> – Available Monday to Saturday, 2:00 PM – 5:00 PM</li> 
                                </ul>

                                <p class="service-details__text">They provide <strong>routine check-ups, neonatal care, vaccinations, and treatment for childhood illnesses.</strong></p>
                            </div> 

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Pediatric Services at P.D. Hinduja Sindhi Hospital</b></h2><!-- /.service-details__sub-title -->

                                <h6><b>Child Health Check-Ups and Consultations</b></h6>

                                <p class="service-details__text">Regular check-ups are essential for <strong>monitoring a child’s growth and detecting health issues early.</strong> Our pediatricians provide:</p>
                                <ul>
                                   <li>Newborn and infant check-ups</li>
                                   <li>Growth monitoring and nutrition advice</li>
                                   <li>Treatment for common childhood infections and diseases</li> 
                                   <li>Parental counselling on child health</li>
                                </ul>

                                <h6><b>Neonatal Care for Newborns</b></h6>

                                <p class="service-details__text">Newborns, especially those born prematurely or with medical conditions, require <strong>specialized medical care.</strong> Our hospital is equipped with:</p>

                                <ul>
                                   <li><strong>NICU (Neonatal Intensive Care Unit)</strong> for high-risk newborns</li>
                                   <li><strong>Incubator and phototherapy units</strong> for premature babies and neonatal jaundice</li>
                                   <li><strong>Prenatal and high-risk newborn clinic</strong> for early diagnosis and specialized care</li> 
                                   <li><strong>Newborn screening</strong> for detecting congenital disorders early</li>
                                </ul>

                                <h6><b>Vaccination and Immunization</b></h6>

                                <p class="service-details__text">Vaccination is one of the most effective ways to protect children from serious diseases. Our hospital follows the Indian Academy of Pediatrics (IAP) immunization schedule, offering:</p>

                                <ul>
                                   <li>Newborn and routine childhood vaccinations</li>
                                   <li>Well-baby check-ups to ensure vaccines are working effectively</li>
                                   <li>Catch-up vaccinations for children who missed their schedule</li>
                                </ul>

                                 <h6><b>Inpatient Pediatric Care</b></h6>

                                 <p class="service-details__text">For children who need hospital admission, we provide:</p>

                                 <ul>
                                   <li>24/7 monitoring by pediatric specialists</li>
                                   <li>Advanced treatment for serious infections, respiratory diseases, and other conditions</li>
                                   <li>A child-friendly environment to help children recover comfortably</li>
                                </ul>
                            </div>

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Why We Are the Best Pediatric Hospital</b></h2><!-- /.service-details__sub-title -->
                                <p class="service-details__text">Choosing the right hospital for your child’s healthcare is important. Here’s why families trust P.D. Hinduja Sindhi Hospital:</p>
                                <ul>
                                   <li><strong>Experienced Pediatricians and Neonatologists</strong> – Our doctors have years of experience and are known for their <strong>high success rates.</strong></li>
                                   <li><strong>State-of-the-Art Facilities –</strong> We have <strong>advanced NICU, incubators, and diagnostic tools</strong> to ensure the best treatment.</li> 
                                   <li><strong>Complete Pediatric Care Under One Roof </strong>– From <strong>routine check-ups to neonatal care,</strong> we provide a full range of services.</li>
                                   <li><strong>A Legacy of Over 60 Years in Healthcare –</strong> We are one of Bangalore’s most <strong>trusted hospitals for pediatric and neonatal care.</strong></li>
                                </ul>
                            </div> 

                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                When should I take my baby for the first check-up?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Your baby should have the <strong>first check-up within the first week of birth,</strong> followed by regular visits for vaccinations and growth monitoring.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What common childhood illnesses do pediatricians treat?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Pediatricians treat <strong>fever, colds, respiratory infections, stomach issues, allergies, and other common illnesses in children.</strong></p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do you provide emergency pediatric care?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, our hospital is <strong>equipped to handle pediatric emergencies</strong> and provides<strong> immediate medical attention </strong>when needed.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                               How can I book an appointment?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>You can <strong>visit our hospital</strong> during consultation hours or <strong>call us </strong>to schedule an appointment with <strong>Dr. Bhavya K.S. or Dr. Manu C.</strong></p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                                                                                        
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
                                            <td>Dr. Elizabeth S. John</td>
                                            <td>M.D., D.C.H</td>
                                            <td>Tue/Thu</td>
                                            <td>2.30 P.M – 4.30 P.M</td>
                                            <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Elizabeth S. John','M.D., D.C.H')">
                                                Book an Appointment
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tbody>
                                        <tr>
                                            <td>Dr. Bhavya. K.S</td>
                                            <td>MBBS., MRCPCH (UK)</td>
                                            <td>Mon/Sat</td>
                                            <td>9.30 A.M -2.00 P.M</td>
                                            <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Bhavya. K.S','MBBS., MRCPCH (UK)')">
                                                Book an Appointment
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>Dr. Manu. C</td>
                                            <td>MBBS., DCH., F. Neonatal, PGPN (Boston)</td>
                                            <td>Mon/Sat</td>
                                            <td>2 P.M – 5 P.M</td>
                                            <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Manu. C','MBBS., DCH., F. Neonatal, PGPN (Boston)')">
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
                                <img src="assets/images/team/Dr-Bhavya-KS.png" alt="">
                                <h4>Dr. Bhavya K.S</h4>
                            
                                <button onclick="openAppointment(
        'Dr. Bhavya K.S',
        'MBBS., MRCPCH (UK)'
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