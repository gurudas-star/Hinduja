
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Medical Gastroenterology" ?>
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
                    <h2 class="page-header__title">Medical Gastroenterology</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Medical Gastroenterology</span></li>
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
                            <img src="assets/images/department/medical-gastroenterology.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <!-- <h1 class="service-details__title">Internal Medicine at P.D. Hinduja Sindhi Hospital, Bengaluru</h2> -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, India, our
                                Medical Gastroenterology Department is dedicated to delivering exceptional care for
                                gastrointestinal and liver conditions. With over 60 years of experience and a fully
                                equipped medical ICU, we provide top-tier treatment to address all your digestive system
                                needs.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Medical Gastroenterology</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p>Medical Gastroenterology focuses on the diagnosis, treatment, and management of disorders
                            related to the digestive tract, liver, and associated organs. Our department provides a wide
                            range of services designed to address a wide variety of gastrointestinal issues. Whether
                            it’s routine screenings, advanced endoscopic procedures, or the management of complex
                            digestive conditions, our team is equipped with the expertise and technology to ensure
                            optimal care for our patients.</p>
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for
                                Gastroenterology Care?</b></h2>
                        <!-- /.service-details__sub-title -->
                        <ul>
                            <li><b>Expertise:</b> Our team of highly trained gastroenterologists and support staff
                                specializes in diagnosing and treating a wide range of gastrointestinal conditions,
                                ensuring that you receive expert, personalized care.</li>

                            <li><b>Cutting-Edge Technology:</b> We utilize the latest medical technology, including
                                advanced imaging and diagnostic tools, to provide accurate and effective treatment
                                tailored to your specific needs.</li>

                            <li><b>Best-in-Class Care:</b> From initial diagnosis through treatment and follow-up, we
                                offer a wide range of services to address all aspects of your gastroenterological
                                health.</li>

                            <li><b>Patient-Centered Approach:</b> Your well-being is our priority. We offer
                                compassionate care and clear communication, supporting you and your family throughout
                                your treatment journey.</li>

                            <li><b>Timely and Accurate Diagnosis:</b> Our round-the-clock laboratory and imaging
                                services ensure prompt and precise diagnosis, enabling timely and effective treatment.
                            </li>

                            <li><b>Holistic Management:</b> We take a multidisciplinary approach to managing and
                                treating gastrointestinal conditions, coordinating with other departments to provide
                                continuous care.</li>
                        </ul>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>What We Treat</b></h2>

                        <ul>
                            <li><b>Expert Team:</b> Our super-specialist gastroenterologists and dedicated team provide
                                top-tier care with personalized treatment plans tailored to your healthcare needs.hoice
                                for gastroenterological services.</li>

                            <li><b>Digestive Tract Care:</b> We manage conditions affecting the esophagus, stomach,
                                small intestine, colon, rectum, pancreas, gallbladder, bile ducts, and liver, ensuring
                                your digestive health is maintained at its best.</li>

                            <li><b>Endoscopy:</b> Our department performs advanced endoscopic procedures to diagnose and
                                treat various gastrointestinal conditions with minimal invasiveness, promoting quicker
                                recovery and better outcomes.</li>

                            <li><b>Colonoscopy:</b> We conduct colonoscopies to detect and manage colorectal conditions,
                                focusing on early intervention and effective treatment to improve patient outcomes.</li>

                            <li><b>Lifestyle-Related Issues:</b> We address health problems resulting from unhealthy
                                lifestyle habits, such as excessive drinking, overeating, and irregular meal timings,
                                helping to restore and maintain digestive health.</li>

                            <li><b>Infectious Diseases:</b> We specialize in treating infections that impact the
                                digestive process, ensuring that your digestive system remains healthy and functions
                                optimally.</li>

                            <li><b>Advanced Technology:</b> Our department is equipped with the latest medical
                                equipment, including 4D Ultrasound and 24/7 CT Scan facilities, providing precise and
                                timely diagnostics.</li>
                        </ul>
                        <p>At P.D. Hinduja Sindhi Hospital, our commitment to excellence, advanced technology, and
                            compassionate care makes us the preferred choice for gastroenterological services. We are
                            dedicated to being your trusted partner in maintaining optimal digestive health.</p>

                    </div>

                    <!-- FAQ -->

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What symptoms might indicate a gastrointestinal issue?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Common symptoms include abdominal pain, bloating, diarrhea, constipation,
                                            heartburn, nausea, and unexplained weight loss. If you experience persistent
                                            symptoms, it’s important to consult a gastroenterologist for evaluation.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        How often should I have a colonoscopy? <span
                                            class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>The frequency of colonoscopies depends on your age, family history, and risk
                                            factors. Generally, it is recommended to start screening at age 50, or
                                            earlier if you have a family history of colorectal cancer.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What should I expect during an endoscopy?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>During an endoscopy, a thin, flexible tube with a camera is inserted through
                                            the mouth to examine the upper digestive tract. The procedure is usually
                                            quick, and patients may receive mild sedation to ensure comfort.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        Can lifestyle changes improve my digestive health? <span
                                            class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Yes, adopting a healthy diet, regular exercise, adequate hydration, and
                                            stress management can significantly improve digestive health and prevent
                                            many gastrointestinal issues.

                                        </p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What are the risks associated with endoscopic procedures?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Endoscopic procedures are generally safe, but like any medical procedure,
                                            they carry some risks, including bleeding, infection, or perforation. Your
                                            doctor will discuss these risks with you before the procedure.

                                        </p>
                                    </div><!-- /.accordion-content -->
                                </div><!-- /.accordion-item -->

                            </div><!-- /.faq-accordion -->
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
                                    <td>Dr. Preethan. K.N</td>
                                    <td>M.S., FSGE</td>
                                    <td>Tue/Thu/Sat</td>
                                    <td>2 P.M – 4 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Preethan. K.N','M.S., FSGE')">
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
                                <img src="assets/images/team/Dr-Preethan-KN.png" alt="">
                                <h4>Dr. Preethan. K.N</h4>

                                <button onclick="openAppointment(
        'Dr. Preethan. K.N',
        'M.S., FSGE'
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