
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Obstetrics Gynaecology" ?>
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
                    <h2 class="page-header__title">Obstetrics & Gynaecology</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Obstetrics & Gynaecology</span></li>
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
                            <img src="assets/images/department/gynecology.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Best Gynecology Hospital in Bangalore</h2>
                            <!-- /.service-details__title -->
                            <p class="service-details__text">At P.D. Hinduja Sindhi Hospital in Bengaluru, we recognize
                                the importance of proper healthcare for women at every life stage. Our Obstetrics and
                                Gynaecology Department is dedicated to meeting the varied healthcare needs of women—from
                                adolescence and reproductive health to pregnancy, menopause, and beyond. With over 60
                                years of experience, we are committed to delivering personalized care that emphasizes
                                compassion, competence, and affordability.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Understanding Obstetrics & Gynaecology</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p class="service-details__text">Obstetrics and Gynaecology is a specialized field of medicine
                            that focuses on the health and well-being of women throughout their lives. This discipline
                            covers a wide range of services, from managing pregnancy and childbirth (Obstetrics) to
                            addressing reproductive health, menstrual issues, and menopause (Gynaecology).</p>
                        <ul>
                            <li><strong>Obstetrics:</strong> Involves the care of women during pregnancy, childbirth,
                                and the postnatal period. It includes prenatal screenings, fetal monitoring, management
                                of high-risk pregnancies, and delivery, whether through natural birth or cesarean
                                section.</li>
                            <li><strong>Gynaecology:</strong> Addresses a broad spectrum of women’s health issues,
                                including menstrual disorders, hormonal imbalances, contraception, infertility, and
                                diseases of the reproductive organs. It also encompasses preventive care, such as
                                regular screenings for breast and cervical cancers, and the management of menopause.
                            </li>
                        </ul>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital?</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p class="service-details__text">Our hospital is equipped with advanced medical technology and
                            staffed by a team of experienced Gynaecologists and Childcare Specialists. We are committed
                            to providing individualized care to every woman, ensuring the highest standards of
                            healthcare tailored to her specific needs.</p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Services We Provide</b></h2>
                        <!-- /.service-details__sub-title -->
                        <ul>
                            <li><strong>Daily Outpatient Services:</strong> We offer daily appointments for routine
                                check-ups, Gynaecological consultations, and antenatal care, providing easy access to
                                expert healthcare for women of all ages.</li>
                            <li><strong>Antenatal and Postnatal Care:</strong> Our services support the health and
                                well-being of both mother and baby throughout pregnancy and postpartum, with
                                personalized care plans and expert guidance.</li>
                            <li><strong>Infertility Clinic:</strong> We provide compassionate care and advanced
                                reproductive technologies for couples facing challenges in conceiving, offering
                                personalized treatment options to help achieve parenthood.</li>
                            <li><strong>Adolescent Clinic:</strong> Specializing in the healthcare needs of adolescent
                                girls, we offer sensitive counseling and expert care for menstrual health, reproductive
                                education, and other unique health concerns.</li>
                            <li><strong>Inpatient Services:</strong> Our hospital is fully equipped for a range of
                                obstetric and Gynaecological procedures, including normal and assisted deliveries,
                                cesarean sections, tubectomy, hysterectomy, laparoscopy, hysteroscopy, and other major
                                surgeries.</li>
                            <li><strong>Fetal Monitoring:</strong> We offer advanced fetal monitoring services to ensure
                                the health and safety of unborn babies during pregnancy, allowing for early detection
                                and management of potential complications.</li>
                        </ul>

                        <p class="service-details__text">By choosing P.D. Hinduja Sindhi Hospital, you can trust in our
                            dedication to providing high-quality, compassionate care that supports your health at every
                            stage of life.</p>
                    </div>

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What should I expect during an antenatal visit?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>During an antenatal visit, your healthcare provider will monitor your
                                            pregnancy’s progress through physical exams, ultrasounds, and discussions
                                            about your health. They will also guide nutrition, exercise, and what to
                                            expect as your pregnancy advances.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        How often should I have a Gynaecological check-up?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>It’s recommended to have an annual Gynaecological check-up, but the frequency
                                            may vary depending on your age, health history, and any specific concerns.
                                            Your healthcare provider will advise you on the appropriate schedule.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What services does the Infertility Clinic offer?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our Infertility Clinic provides a wide range of services including fertility
                                            assessments, ovulation tracking, hormone therapy, and assisted reproductive
                                            technologies such as IVF. We work closely with couples to create
                                            personalized treatment plans.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What care is provided post-delivery?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p> Postnatal care focuses on the health of both the mother and baby, including
                                            monitoring recovery, managing any complications, breastfeeding support, and
                                            guiding newborn care.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What should I bring to my first Gynaecological appointment?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Bring any medical records related to your menstrual history, contraceptive
                                            use, and previous pregnancies. If it’s your first visit, prepare to discuss
                                            your medical history, lifestyle, and any current health concerns.</p>
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
                                    <td>Dr.Ambuja B N</td>
                                    <td>M.D., D.G.O</td>
                                    <td>Mon/Wed/ Fri</td>
                                    <td>11 A.M -3 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr.Ambuja B N','M.D., D.G.O')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Sharmila. S</td>
                                    <td>M.D.</td>
                                    <td>Tue/Thu/Sat</td>
                                    <td>11 A.M -1 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Sharmila. S','M.D.')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Karishma Talwar</td>
                                    <td>M.S</td>
                                    <td>On call</td>
                                    <td>On call</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Karishma Talwar','M.S')">
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
                                <img src="assets/images/team/Dr-Ambuja-BN.png" alt="">
                                <h4>Dr. Ambuja B.N</h4>

                                <button onclick="openAppointment(
                                            'Dr. Ambuja B.N',
                                            'M.D., D.G.O'
                                        )">
                                    Book an Appointment
                                </button>
                            </div>
                            <div class="d1">
                                <img src="assets/images/team/Dr-Sharmila-S.png" alt="">
                                <h4>Dr. Sharmila.S</h4>

                                <button onclick="openAppointment(
                                            'Dr. Sharmila.S',
                                            'M.D.'
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
<!-- #region -->

<!-- MODAL -->

<?php require_once('parts/shared/appointment-modal.php'); ?>


<?php require_once('parts/header/sidebar.php'); ?>
<?php require_once('parts/footer/footer-one.php'); ?>