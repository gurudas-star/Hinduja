
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Urology" ?>
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
                    <h2 class="page-header__title">Urology</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Urology</span></li>
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
                            <img src="assets/images/department/urology-wide.png" alt="cardiology">
                            <p class="service-details__text" style="margin-top: 20px;">At P.D. Hinduja Sindhi Hospital in Bengaluru, our Urology
                                Department is dedicated to providing expert care for individuals with urinary tract
                                issues, including conditions affecting the kidneys, ureters, bladder, and urethra. With
                                over 60 years of excellence in healthcare, we offer high-quality, affordable treatment
                                tailored to meet the unique needs of each patient.</p>
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Understanding Urological Care</h2>
                            <!-- /.service-details__title -->
                            <p class="service-details__text">Urology is a specialized field of medicine focused on the
                                diagnosis, treatment, and management of conditions affecting the urinary tract in both
                                men and women, as well as the male reproductive system. Our Urology Department offers a
                                wide range of services to address various urological issues, from common conditions like
                                kidney stones to complex disorders requiring surgical intervention.</p>
                            <ul>
                                <li><strong>Daily Consultation:</strong> Our department offers daily consultation
                                    services with experienced urologists, providing expert evaluation, diagnosis, and
                                    treatment recommendations for a variety of urological concerns.</li>
                                <li><strong>Surgical Procedures:</strong>
                                    <ul>
                                        <li><strong>Transurethral Resection of the Prostate (TURP):</strong> A procedure
                                            for treating benign prostatic hyperplasia (BPH).</li>
                                        <li><strong>Transurethral Resection of Bladder Tumor (TURBT):</strong> A
                                            surgical method for bladder cancer.</li>
                                        <li><strong>Ureteroscopy (URS):</strong> A procedure for removing kidney and
                                            ureteral stones.</li>
                                        <li><strong>Extracorporeal Shock Wave Lithotripsy (ESWL):</strong> A
                                            non-invasive treatment for kidney stones.</li>
                                        <li><strong>Cystoscopy:</strong> A diagnostic and treatment procedure for
                                            conditions of the urinary bladder.</li>
                                    </ul>
                                </li>
                                <li><strong>Endoscopic Procedures:</strong> We perform minimally invasive endoscopic
                                    procedures to diagnose and treat urological conditions, offering effective solutions
                                    with less pain and faster recovery times.</li>
                                <li><strong>Prostate Laser Treatments:</strong> We provide advanced laser treatments for
                                    prostate conditions, offering a minimally invasive option with quicker recovery
                                    times and improved patient outcomes.</li>
                                <li><strong>Advanced Treatments:</strong> Our department offers a range of advanced
                                    treatments for urological disorders, including medical therapies, minimally invasive
                                    procedures, and surgical interventions, all tailored to meet the unique needs of
                                    each patient.</li>
                            </ul>

                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for Urology
                                Care?</b></h2><!-- /.service-details__sub-title -->
                        <p class="service-details__text"><strong>Convenient Location:</strong> Centrally located in
                            Bengaluru, P.D. Hinduja Sindhi Hospital is easily accessible, providing convenience for all
                            your urological care needs.</p>
                        <p class="service-details__text"><strong>Best-in-Class Urological Care:</strong> We provide a
                            wide range of medical and surgical treatments for genito-urinary conditions. Our Urology
                            Centre is staffed by highly skilled urologists who are recognized for their expertise in
                            diagnosing and treating complex urological diseases.</p>
                        <p class="service-details__text"><strong>Expert Team:</strong> As a leading multi-specialty care
                            center, we are proud to have some of the finest experts across all major Urology and
                            Nephrology specialties, ensuring that you receive the best care possible.</p>
                        <p class="service-details__text"><strong>Advanced Technology:</strong> Our department is
                            equipped with state-of-the-art technology and facilities to perform both routine and
                            advanced urological procedures, ensuring precise and effective treatments.</p>
                        <p class="service-details__text"><strong>Patient-Centered Care:</strong> We focus on delivering
                            personalized care plans tailored to your specific needs, ensuring you receive the attention
                            and treatment necessary for your well-being.</p>
                        <p class="service-details__text"><strong>Compassionate Approach:</strong> Our dedicated medical
                            and support staff are committed to providing compassionate care, making your experience as
                            comfortable and stress-free as possible.</p>
                    </div>

                    <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, our Urology Department is
                            dedicated to delivering the highest standard of care with a focus on care, competence, and
                            compassion. Whether you need routine check-ups or advanced surgical interventions, we are
                            here to support your journey to better urinary health.</p>
                    </div>

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What types of conditions do you treat in the Urology Department?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We treat a wide range of urological conditions, including kidney stones,
                                            urinary tract infections, bladder and prostate issues, incontinence, and
                                            urological cancers.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        What is the benefit of minimally invasive procedures?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Minimally invasive procedures typically involve smaller incisions, less pain,
                                            shorter hospital stays, and faster recovery times compared to traditional
                                            surgery.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you approach the treatment of kidney stones?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We offer various treatments for kidney stones, including non-invasive options
                                            like ESWL and minimally invasive procedures like ureteroscopy, depending on
                                            the size and location of the stones.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What are the advantages of prostate laser treatments?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Prostate laser treatments are less invasive, result in quicker recovery
                                            times, and have fewer complications compared to traditional surgical
                                            methods.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        Do you offer treatment for both men and women?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Yes, our Urology Department provides a wide range of care for both men and
                                            women, addressing a wide range of urinary tract conditions.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div>
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How can I schedule a consultation with a urologists?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>You can schedule a consultation by contacting our hospital directly or
                                            through our online appointment system. We offer flexible scheduling to
                                            accommodate your needs.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item-->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What makes your urology care unique?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our urology care is distinguished by our use of advanced technology, a highly
                                            skilled team of Specialists, and a commitment to providing personalized,
                                            patient-centered care.</p>
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
                                    <td>Dr. Dhanpal</td>
                                    <td>M.S., Mch</td>
                                    <td>Mon/Wed/Fri</td>
                                    <td>2 P.M – 4 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Dhanpal','M.S., Mch')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Sharath</td>
                                    <td>M.S., D.N.B</td>
                                    <td>Tue/Thu/Sat</td>
                                    <td>10 A.M -12 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Sharath','M.S., D.N.B')">
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
                                <img src="assets/images/team/Dr-Dhanpal.png" alt="">
                                <h4>Dr. Dhanpal</h4>

                                <button onclick="openAppointment(
        'Dr. Dhanpal',
        'M.S., Mch'
    )">
                                    Book an Appointment
                                </button>
                            </div>

                            <div class="d1">
                                <img src="assets/images/team/Dr-Sharath.png" alt="">
                                <h4>Dr. Sharath</h4>

                                <button onclick="openAppointment(
        'Dr. Sharath',
        'M.S., D.N.B'
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