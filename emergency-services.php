<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Emergency Services" ?>
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
                            <h2 class="page-header__title">Emergency Services</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Emergency Services</span></li>
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
                                    <img src="assets/images/department/emergency_service.png" alt="emergency_service">
                                </div>
                            <div class="service-details__inner">
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Reliable Care When You Need It Most</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">At PD Hinduja Sindhi Hospital in Bangalore, we recognize that medical emergencies require prompt and expert intervention. With over 60 years of experience, our Emergency Department is dedicated to providing high-quality, compassionate care around the clock. Our team of skilled professionals is committed to delivering timely medical attention to stabilize and treat patients in critical situations.</p><br/>
                                   
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Understanding Emergency Services</h1><!-- /.service-details__title -->
                                    <p class="service-details__text">Emergency services are designed to provide immediate care and treatment to individuals experiencing sudden and severe health issues. These services cover a broad range of medical situations, from trauma and acute illness to life-threatening conditions. The goal is to stabilize the patient, prevent further harm, and initiate the appropriate treatment as quickly as possible.</p><br/>

                                    <p class="service-details__text">At PD Hinduja Sindhi Hospital, our Emergency Department is equipped with advanced medical technology and staffed by specialists trained in emergency medicine, ensuring that each patient receives the best possible care during critical moments.</p>
                                    
                                   
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h1 class="service-details__sub-title"><b>Our Emergency Services Include:</b></h1><!-- /.service-details__sub-title -->
                                <ul>
                                    <li><strong>24/7 Emergency Care:</strong> Our department is operational 24 hours a day, ensuring that expert medical attention is available whenever it is needed.</li>
                                    <li><strong>Advanced Life Support:</strong> We are equipped with the latest technology and staffed by specialists capable of providing advanced life support to stabilize patients with critical conditions.</li>
                                    <li><strong>Trauma Care:</strong> We offer care for traumatic injuries, working efficiently to minimize damage and facilitate recovery.</li>
                                    <li><strong>Rapid Diagnostics:</strong> Our state-of-the-art diagnostic facilities enable quick and accurate assessments, ensuring timely and informed treatment decisions..</li>
                                    <li><strong>Critical Care Transport:</strong> Our services extend beyond the hospital with advanced ambulance care, providing urgent transport for patients in need of critical medical attention.</li>
                                </ul>
                            </div>
                            

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h1 class="service-details__sub-title"><b>Why Choose PD Hinduja Sindhi Hospital for Your Emergency?</b></h1><!-- /.service-details__sub-title -->
                                <ul>
                                    <li>Proven Track Record: With a legacy spanning over 60 years, PD Hinduja Sindhi Hospital has a history of delivering exceptional emergency care.</li>
                                    <li>Expert Care: Our experienced emergency team is adept at managing a wide range of medical emergencies, ensuring that every patient receives expert care.</li>
                                    <li>Compassionate Service: We approach every patient with dignity and empathy, offering comfort and support during stressful times.</li>
                                    <li>Accessible Care: Our commitment to accessible healthcare is reflected in our emergency services, providing quality care that is within reach for all.</li>
                                    <br/><br/>
                                    <p>When every second counts, PD Hinduja Sindhi Hospital is here to provide the expert care you need. Trust our team to be there for you during life’s most critical moments</p>
                                </ul>
                            </div>


                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What should I do in a medical emergency?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>In a medical emergency, you should seek immediate medical attention by visiting our Emergency Department or calling for an ambulance if you are unable to travel safely.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What type of conditions are treated in the Emergency Department?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Our Emergency Department treats a wide range of conditions, including trauma, heart attacks, strokes, respiratory distress, severe infections, and other life-threatening situations.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How quickly will I be seen in the Emergency Department?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Patients are triaged based on the severity of their condition. Those with life-threatening or critical conditions are prioritized for immediate care.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is advanced life support?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Advanced life support involves providing medical interventions to stabilize patients with severe health issues. This includes airway management, intravenous medications, defibrillation, and other critical procedures.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Do you provide ambulance services?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Yes, we offer critical care transport with advanced ambulance services equipped to provide emergency medical care en route to the hospital.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div>                                                                   
                                </div><!-- /.faq-accordion -->
                            </div><!-- /.service-details__faq -->

                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->                    
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details section-space -->

        

<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>