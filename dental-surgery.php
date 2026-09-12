
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Cardiology" ?>
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
                            <h2 class="page-header__title">Dental Surgery</h2>
                            <ul class="mediox-breadcrumb list-unstyled">
                                <li>
                                    <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                                    <a href="index.php">Home</a>
                                </li>
                                <li><span><a href="specialties.php">Specialties</a></span></li>
                                <li><span>Dental Surgery</span></li>
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
                                    <img src="assets/images/department/dental-care-wide.png" alt="cardiology">
                                    <p class="service-details__text" style="margin-top: 20px;">At P.D. Hinduja Sindhi Hospital in Bengaluru, India, our Dental Surgery Department is dedicated to ensuring your oral health and enhancing your smile. Our team of skilled dental surgeons and specialists is committed to delivering top-quality care using advanced techniques and state-of-the-art equipment. Whether you need routine dental services or specialized surgical procedures, we are here to provide optimal treatment in a compassionate and comfortable setting.</p>
                                </div><!-- /.service-details__thumbnail -->
                                <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"    data-wow-delay="00ms">
                                    <h1 class="service-details__title">Understanding Dental Surgery</h2><!-- /.service-details__title -->
                                    <p class="service-details__text">Dental surgery encompasses a wide range of procedures aimed at addressing various oral health issues, from routine extractions, correction of misalignments to more complex surgeries like dental implants and corrective jaw surgery. It plays a crucial role in maintaining oral health, improving functionality, and enhancing the aesthetics of your smile.</p><br/>

                                    <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, we focus on both preventive and corrective dental care. Our team ensures that you are fully informed about your treatment options and what to expect during and after the procedure. We prioritize patient education to help you make the best decisions for your oral health.</p>
                                    
                                   
                                </div><!-- /.service-details__content__box -->
                            </div><!-- /.service-details__inner -->
                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for Your Oral Health?</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                    <li><strong>Expert Team:</strong> Our dental surgeons and specialists are highly trained and experienced, offering exceptional care tailored to your specific oral health needs.</li>
                                    <li><strong>Advanced Technology:</strong> We use the latest dental technology and imaging equipment to ensure precise diagnostics, effective treatments, and superior outcomes.</li>
                                    <li><strong>Wide Spectrum of Care:</strong> From routine check-ups to complex surgical procedures, we provide a full range of dental services, addressing all aspects of your oral health.</li>
                                    <li><strong>Patient-Centered Approach:</strong> Your comfort and well-being are our priorities. We offer personalized care plans and maintain clear communication throughout your treatment journey.</li>
                                    <li><strong>State-of-the-Art Facilities:</strong> Our modern facilities are equipped with the latest advancements in dental care, ensuring high standards of treatment and patient safety.</li>
                                    <li><strong>Compassionate Environment:</strong> Our caring and professional staff are dedicated to creating a supportive and comfortable environment, making your dental experience as stress-free as possible.</li>
                                </ul>
                            </div>
                            

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <h2 class="service-details__sub-title"><b>Services We Provide</b></h2><!-- /.service-details__sub-title -->
                                <ul>
                                    <li><strong>Dental X-ray:</strong> We use advanced imaging technology to deliver accurate diagnostics and detailed images, facilitating precise treatment planning and effective results for all dental procedures.</li>
                                    <li><strong>Periodontics:</strong> Our specialists provide expert care for gum diseases and conditions, offering treatments such as scaling, root planing, and surgical interventions to ensure optimal periodontal health.</li>
                                    <li><strong>Dental Implants:</strong> We offer professional services for dental implants, replacing missing teeth with durable, natural-looking solutions that restore both function and aesthetics to your smile.</li>
                                    <li><strong>Orthodontics:</strong> Our orthodontic services include traditional braces and modern aligners to correct misalignments and improve bite, ensuring a healthy and attractive smile for patients of all ages.</li>
                                    <li><strong>Endodontics:</strong> We specialize in root canal treatments to preserve damaged or infected teeth, providing effective pain relief and maintaining your natural teeth with precision.</li>
                                </ul>
                            </div>
                            

                            <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <p>At P.D. Hinduja Sindhi Hospital, our Dental Surgery Department is committed to providing exceptional care and advanced dental solutions to meet your needs. Whether you require routine care or complex procedures, you can trust our expert team to deliver personalized, high-quality treatment that prioritizes your oral health and comfort.</p>
                            </div>

                            
                            <div class="service-details__faq">
                                <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3><!-- /.service-details__sub-title -->
                                <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                                    <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What should I expect during a dental surgery procedure?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Before your procedure, our dental team will explain the process in detail, including what to expect during and after the surgery. Depending on the type of surgery, local anesthesia or sedation may be used to ensure your comfort. Post-operative care instructions will be provided to help you recover smoothly.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How do I know if I need dental surgery?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Your dentist or dental specialist will recommend surgery if it’s necessary to address issues that cannot be resolved with non-surgical treatments. Common reasons include severe tooth decay, impacted teeth, or periodontal disease.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                Is dental surgery painful?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Our priority is your comfort. Modern techniques and anesthesia ensure that you experience minimal discomfort during the procedure. Post-operative pain is typically manageable with prescribed medications and proper care.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                How can I prepare for dental surgery?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Your dentist will provide specific instructions to prepare for your surgery, which may include fasting, arranging transportation, and following pre-surgery hygiene practices. It’s important to follow these instructions to ensure a smooth procedure and recovery.</p>
                                            </div><!-- /.inner -->
                                        </div><!-- /.accordion-content -->
                                    </div><!-- /.accordion-item -->
                                    <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                        <div class="accordion-title">
                                            <h4>
                                                What is the recovery time for dental surgery?
                                                <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                            </h4>
                                        </div><!-- /.accordion-title -->
                                        <div class="accordion-content">
                                            <div class="inner">
                                                <p>Recovery time varies depending on the type of surgery. Simple procedures may have a short recovery period, while more complex surgeries may require a few weeks. Your dentist will provide a recovery plan and follow-up care to monitor your healing progress.</p>
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
                                    <td>Dr. Raghunandan</td>
                                    <td>M.D.S</td>
                                    <td>On call</td>
                                    <td>On call</td>
                                    <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Raghunandan','M.D.S')">
                                                Book an Appointment
                                                </a>
                                            </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Kirti Lakshmi</td>
                                    <td>M.D.S</td>
                                    <td>Mon-Sat</td>
                                    <td>10 A.M – 4 P.M</td>
                                    <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Kirti Lakshmi','M.D.S')">
                                                Book an Appointment
                                                </a>
                                            </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>Dr. Krishnaveni</td>
                                    <td>B.D.S</td>
                                    <td>Mon-Sat</td>
                                    <td>10 A.M – 4 P.M</td>
                                    <td>
                                                <a href="javascript:void(0)" 
                                                class="opd-btn"
                                                onclick="openAppointment('Dr. Krishnaveni','B.D.S')">
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
                                        <img src="assets/images/team/Dr-Raghunandan.png" alt="">
                                        <h4>Dr. Raghunandan</h4>
                                    
                                        <button onclick="openAppointment(
        'Dr. Raghunandan',
        'M.D.S'
    )">
        Book an Appointment
    </button>
                                    </div>

                                    <div class="d1">
                                        <img src="assets/images/team/Dr-Krishnaveni.png" alt="">
                                        <h4>Dr. Krishnaveni</h4>
                                    
                                        <button onclick="openAppointment(
        'Dr. Krishnaveni',
        'B.D.S'
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