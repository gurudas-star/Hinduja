
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Neuro Surgery" ?>
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
                    <h2 class="page-header__title">Neuro Surgery</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Neuro Surgery</span></li>
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
                            <img src="assets/images/department/Neuro.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <!-- <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2> -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, our Neurosurgery
                                Department is committed to delivering top-tier care for complex neurological conditions
                                in both adults and children. With a focus on excellence, we provide treatment and
                                support to enhance your neurological health.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?
                            </b></h2>
                        <!-- /.service-details__sub-title -->
                        <ul>
                            <li><b>Patient-Centered Care:</b> We prioritize your well-being by understanding your unique
                                needs and tailoring our treatments to achieve the best possible outcomes.</li>
                            <li><b>Multidisciplinary Collaboration:</b> Our team of Neurologists, Neurosurgeons, and
                                other Specialists work together seamlessly to offer coordinated care.</li>
                            <li><b>Advanced Technology:</b> We utilize the latest medical technologies to ensure
                                accurate diagnoses and effective treatments.</li>
                            <li><b>Experienced Professionals:</b> Our highly skilled team is committed to delivering the
                                highest standard of care with expertise and precision.</li>
                            <li><b>Compassionate Support:</b> We provide empathetic care, understanding the challenges
                                associated with neurological conditions and offering support throughout your treatment
                                journey.</li>
                        </ul>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>What We Treat</b></h2>

                        <ul>
                            <li><b>Specialized Surgery:</b> We offer a broad range of surgical options, from
                                conventional to minimally invasive procedures, to address your neurological condition
                                effectively.</li>
                            <li><b>Rehabilitation Services:</b> Our focus extends beyond treatment, emphasizing
                                rehabilitation and recovery to enhance your quality of life and support a successful
                                recovery.</li>
                        </ul>

                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Neurosurgery at P.D. Hinduja Sindhi
                                Hospital</b></h2>

                        <p><b>Services We Offer:</b></p>

                        <ul>
                            <li><b>Functional Neurosurgery:</b> We offer advanced surgical interventions for conditions
                                like epilepsy, movement disorders, and chronic pain, aiming to improve patient quality
                                of life.</li>

                            <li><b>Cranial Surgeries:</b> We specialize in procedures such as brain tumor removal,
                                aneurysm repair, and other complex cranial surgeries, utilizing state-of-the-art
                                technology to ensure precision and safety.</li>

                            <li><b>Spinal Surgeries:</b> Our expertise includes treating spinal disorders such as
                                herniated discs, spinal stenosis, and spinal tumors, offering both traditional and
                                minimally invasive surgical options.</li>

                            <li><b>Pediatric Neurosurgery:</b> We provide specialized care for neurological conditions
                                in children, ensuring that young patients receive expert treatment in a compassionate
                                environment.</li>

                            <li><b>Neurotrauma Care:</b> Our team is equipped to handle traumatic brain injuries and
                                spinal cord injuries, offering a wide range of care from emergency treatment to
                                rehabilitation.</li>
                        </ul>

                        <p>At P.D. Hinduja Sindhi Hospital, our Neurosurgery Department is committed to providing care
                            that addresses not only the surgical needs of our patients but also their long-term recovery
                            and rehabilitation. With our expert team and state-of-the-art facilities, we offer a
                            supportive and effective approach to managing your neurological health, ensuring you receive
                            the highest standard of care.</p>
                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What conditions require neurosurgery?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Neurosurgery is required for a range of conditions, including brain tumors,
                                            aneurysms, spinal disorders, epilepsy, and traumatic injuries to the brain
                                            or spine.</p>
                                    </div><!-- /.inner -->
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
                                    <td>Dr. Ramesh Ranganathan</td>
                                    <td>MBBS., DNB</td>
                                    <td>Mon – Sat</td>
                                    <td>10 A.M .-12 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Ramesh Ranganathan','MBBS., DNB')">
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
                                <img src="assets/images/team/Dr-Ramesh-Ranganathan.png" alt="">
                                <h4>Dr. Ramesh Ranganathan</h4>

                                <button onclick="openAppointment(
        'Dr. Ramesh Ranganathan',
        'MBBS., DNB'
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