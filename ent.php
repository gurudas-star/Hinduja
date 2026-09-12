
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Ent" ?>
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
                    <h2 class="page-header__title">Ear, Nose & Throat (ENT)</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Ear, Nose & Throat (ENT)</span></li>
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
                            <img src="assets/images/department/ent-wide.png" alt="cardiology">
                            <p class="service-details__text" style="margin-top: 20px;">At P.D. Hinduja Sindhi Hospital
                                in Bengaluru, India, our Ear, Nose & Throat (ENT) Department is dedicated to providing a
                                wide range of care for all your ENT-related concerns. With over 60 years of experience,
                                we are committed to delivering high-quality, affordable healthcare, prioritizing your
                                comfort and well-being.</p>
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Why Choose P.D. Hinduja Sindhi Hospital for ENT Care?
                            </h2><!-- /.service-details__title -->
                            <ul>
                                <li><strong>Expert ENT Specialists:</strong> Our department is staffed with highly
                                    trained and experienced ENT specialists who are dedicated to providing top-tier care
                                    for a wide range of ear, nose, and throat conditions.</li>
                                <li><strong>State-of-the-Art Equipment:</strong> We utilize the latest technology and
                                    equipment to ensure accurate diagnoses and effective treatments, offering you the
                                    best possible care.</li>
                                <li><strong>Patient-Centered Care:</strong> We emphasize personalized care plans
                                    tailored to your specific needs, ensuring that you receive the focused attention and
                                    treatment necessary for your well-being.</li>
                                <li><strong>Holistic Approach:</strong> Our approach covers the entire treatment
                                    journey—from diagnosis to follow-up care—aiming for the best possible outcomes for
                                    our patients.</li>
                                <li><strong>Compassionate Team:</strong> Our dedicated and compassionate staff are here
                                    to support you throughout your treatment, ensuring that your experience is
                                    comfortable and stress-free.</li>
                                <li><strong>Convenient Location:</strong> Centrally located in Bengaluru, P.D. Hinduja
                                    Sindhi Hospital is easily accessible, providing convenience for all your ENT care
                                    needs.</li>
                            </ul>

                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding ENT Care</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p class="service-details__text">The ENT Department at P.D. Hinduja Sindhi Hospital focuses on
                            diagnosing and treating conditions related to the ear, nose, and throat. These areas are
                            closely interconnected, and issues in one can often affect the others. Our ENT specialists
                            are equipped to manage a wide range of conditions, ensuring proper care that addresses your
                            specific health concerns.</p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Services We Provide</b></h2>
                        <!-- /.service-details__sub-title -->
                        <ul>
                            <li><strong>Ear Wax Removal:</strong> Our ear wax removal techniques are designed to
                                alleviate discomfort and restore hearing, improving your overall comfort and quality of
                                life.</li>
                            <li><strong>Outpatient and Inpatient Care:</strong> We offer both outpatient and inpatient
                                services to address a broad spectrum of ENT issues, from common conditions to more
                                complex problems. Our team is here to provide the care and support you need.</li>
                            <li><strong>Advanced Procedures:</strong> Our skilled ENT specialists perform advanced
                                procedures, including endoscopic surgeries, using cutting-edge techniques to ensure
                                optimal results and quicker recovery times.</li>
                            <li><strong>Foreign Body Removal:</strong> We specialize in the safe removal of foreign
                                objects from the ears, nose, or throat, minimizing complications and ensuring a swift
                                and smooth recovery.</li>
                        </ul>

                        <p>At P.D. Hinduja Sindhi Hospital, our ENT Department is committed to delivering the highest
                            standard of care, supported by decades of experience in providing care, competence, and
                            compassion. Trust our skilled specialists to diagnose and treat your condition effectively,
                            ensuring your health and comfort at every step of your treatment journey.</p>
                    </div>

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What types of conditions do you treat in the ENT Department?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We treat a wide range of ENT conditions, including ear infections, sinusitis,
                                            tonsillitis, hearing loss, nasal congestion, and throat disorders.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        What are the benifits of endoscopic ENT procedures?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Endoscopic procedures are minimally invasive, offering quicker recovery
                                            times, less pain, and minimal scarring compared to traditional surgical
                                            methods.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you safely remove foreign objects from the ear, nose , or throat?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We use specialized tools and techniques to safely remove foreign objects,
                                            ensuring minimal discomfort and reducing the risk of complications.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is the process for ear wax removal?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We offer safe and effective ear wax removal using gentle techniques that
                                            prevent damage to the ear canal while relieving discomfort and improving
                                            hearing.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How can I schedule an appointment with an ENT specialist?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>You can schedule an appointment by contacting our hospital directly or using
                                            our online appointment system. We offer flexible scheduling to accommodate
                                            your needs.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div>
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What makes your ENT care unique?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our ENT care is distinguished by our expert team, advanced technology, and a
                                            patient-centered approach that ensures personalized treatment and care.</p>
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
                                    <td>Dr. Conrad J Rasquinha</td>
                                    <td>MBBS, D.L.O</td>
                                    <td>Mon/ Fri</td>
                                    <td>4.30 P.M – 5.30 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Conrad J Rasquinha','MBBS, D.L.O')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Preetham. H.N</td>
                                    <td>MBBS, D.L.O</td>
                                    <td>On Call</td>
                                    <td>On Call</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Preetham. H.N','MBBS, D.L.O')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Sohini Chakrabarti</td>
                                    <td>M.S</td>
                                    <td>Tue/Thu/Sat</td>
                                    <td>11 A.M -1 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Sohini Chakrabarti','M.S')">
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
                                <img src="assets/images/team/Dr-Vineetha-J-Malayil.png" alt="">
                                <h4>Dr. Vineetha J Malayil</h4>

                                <button onclick="openAppointment(
        'Dr. Vineetha J Malayil',
        'MBBS, M.S'
    )">
                                    Book an Appointment
                                </button>
                            </div>

                            <div class="d1">
                                <img src="assets/images/team/Dr-Conrad-J-Rasquinha.png" alt="">
                                <h4>Dr. Conrad J Rasquinha</h4>

                                <button onclick="openAppointment(
        'Dr. Conrad J Rasquinha',
        'MBBS, D.L.O'
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