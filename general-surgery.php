
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "General Surgery" ?>
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
                    <h2 class="page-header__title">General Surgery</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>General Surgery</span></li>
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
                            <img src="assets/images/department/general-surgery-wide.png" alt="cardiology">
                        </div><!-- /.service-details__thumbnail -->
                        <div class="service-details__content__box wow fadeInUp" data-wow-duration="1500ms"
                            data-wow-delay="00ms">
                            <h1 class="service-details__title">Best General Surgery Hospital in Bangalore</h2>
                            <!-- /.service-details__title -->
                            <p class="service-details__text"><strong>P.D. Hinduja Sindhi Hospital</strong> is a trusted
                                name in healthcare for over <strong>60 years now</strong>. Our <strong>General Surgery
                                    department </strong>is known for its excellence, offering world-class treatments
                                with advanced technology and highly skilled Surgeons. Whether you’re dealing with a
                                <strong>hernia, gallbladder issues,</strong> or need <strong>abdominal surgery,</strong>
                                we provide a comprehensive range of services to meet your needs.</p><br />
                            <p class="service-details__text">With <strong>Dr. Prakash Babu M.N.</strong> and <strong>Dr.
                                    Preetham Raj G.</strong> leading the team, we are recognized as the <strong>best
                                    General Surgery hospital in Sampangiramnagar, Bangalore.</strong> As a patient, we
                                understand you want to feel confident and informed. That’s why our Surgeons take the
                                time to explain every step of your treatment, so you feel comfortable and secure in your
                                decisions.</p><!-- /.service-details__text -->
                        </div><!-- /.service-details__content__box -->
                    </div><!-- /.service-details__inner -->
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Affordable General Surgery Treatment in Bangalore</b>
                        </h2><!-- /.service-details__sub-title -->
                        <p class="service-details__text">We believe <strong>affordable General Surgery treatment in
                                Bangalore</strong> should never come at the cost of <strong>quality care.</strong> At
                            <strong>P.D. Hinduja Sindhi Hospital,</strong> we offer <strong>cost-effective surgical
                                options</strong> for procedures like <strong>hernia repairs, gallbladder
                                surgeries,</strong> and <strong>gastrointestinal procedures,</strong> without
                            compromising on the excellence of care.</p>
                        <ul>
                            <li><b>Affordable pricing</b> for essential surgeries, including <b>laparoscopic
                                    procedures.</b></li>
                            <li><b>Flexible payment plans</b> and <b>insurance support </b>to ease financial concerns.
                            </li>
                            <li><b>Minimally invasive techniques</b> for faster recovery and fewer hospital stays,
                                reducing overall costs.</li>
                        </ul>

                        <p class="service-details__text">Our goal is to make high-quality surgery accessible to all
                            while ensuring that you receive the best treatment possible for your condition.</p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Best Hospital for Hernia, Appendix, and Gallbladder
                                Surgery in Bangalore</b></h2><!-- /.service-details__sub-title -->
                        <p class="service-details__text">If you are looking for the best hospital for hernia, appendix,
                            and gallbladder surgery in Bangalore, we are here to help. Our hospital is renowned for
                            performing these common but serious surgeries with precision and care. Here’s how we
                            approach each:</p>
                        <ul>
                            <li><strong>Hernia Surgery:</strong> We specialize in <strong>laparoscopic hernia
                                    repair,</strong> which involves smaller incisions, quicker recovery, and reduced
                                pain.</li>
                            <li><strong>Appendix Surgery:</strong> Our experienced Surgeons perform
                                <strong>appendisectomy</strong> using the latest techniques to ensure minimal
                                complications and a fast recovery.</li>
                            <li><strong>Gallbladder Surgery:</strong> Whether you need <strong>laparoscopic
                                    cholecystectomy</strong> (gallbladder removal surgery) or treatment for
                                <strong>gallstones,</strong> we use <strong>minimally invasive techniques</strong> that
                                lead to quicker healing times and less post-surgical discomfort.</li>
                        </ul>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Types of General Surgeries We Perform:</b></h2>
                        <!-- /.service-details__sub-title -->
                        <p class="service-details__text">At P.D. Hinduja Sindhi Hospital, we perform a wide variety of
                            surgeries. Here’s a list of some common surgeries that we offer:</p>
                        <ul>
                            <li><strong>Laparoscopic Surgery</strong> for various Abdominal issues</li>
                            <li><strong>Hernia Repair</strong> (both Laparoscopic and Open)</li>
                            <li><strong>Appendectomy</strong> (Appendix Removal).</li>
                            <li>Gallbladder Removal Surgery (Cholecystectomy)</li>
                            <li><strong>Gastrointestinal Surgery</strong> such as Bowel resection and Stomach surgery
                            </li>
                            <li><strong>Breast Surgery,</strong> including Lumpectomy and Mastectomy</li>
                        </ul>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <p class="service-details__text">
                            In addition to these, we also specialize in advanced surgeries, as mentioned below:
                        </p>

                        <ol>
                            <li><strong>Laparoscopic Cholecystectomy</strong></li>
                            <li><strong>Laparoscopic Appendisectomy</strong></li>
                            <li><strong>Laparoscopic Inguinal Hernia Mesh Repair</strong></li>
                            <li><strong>Laparoscopic Umbilical Hernia Mesh Repair</strong></li>
                            <li><strong>Open Cholecystectomy + EBD Exploration &amp; Cholecystectomy + T. Tube
                                    Insertion</strong></li>
                            <li><strong>Total Hypo thyroidectomy</strong></li>
                            <li><strong>Total Laparoscopic Hysterectomy</strong></li>
                            <li><strong>Laparotomy Exploration with Side-to-Side Anastomosis &amp; Bile EVLT +
                                    Sclerotherapy</strong></li>
                            <li><strong>MRM (Modified Radical Mastectomy)</strong></li>
                        </ol>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>The Best General Surgeons in Bangalore</b></h2>
                        <p class="service-details__text">
                            When you choose <strong>P.D. Hinduja Sindhi Hospital,</strong> you are trusting your care to
                            some of the <strong>best General Surgeons in Bangalore.</strong> Here’s why:
                        </p>

                        <ul>
                            <li><strong>Dr. Prakash Babu M.N.</strong> brings over <strong>20 years of experience
                                </strong>in <strong>laparoscopic surgery</strong> and <strong>gastrointestinal
                                    procedures.</strong> Known for his compassionate care and excellent patient
                                outcomes, Dr. Prakash specializes in <strong>gallbladder surgeries </strong>and
                                <strong>hernia repairs.</strong> His ability to simplify complex surgical procedures
                                makes patients feel at ease.</li>
                            <li><strong>Dr. Preetham Raj G.</strong>, with over <strong>13 years of experience,</strong>
                                is renowned for his expertise in <strong>colorectal surgery</strong> and<strong>
                                    minimally invasive procedures.</strong> His focus on <strong>laparoscopic
                                    techniques</strong> ensures faster recovery and reduced post-surgery pain.</li>
                        </ul>

                        <p class="service-details__text">
                            Both doctors are dedicated to improving surgical practices and providing the best possible
                            care. They listen to your concerns, guide you through every stage of the treatment process,
                            and follow up to ensure a smooth recovery.
                        </p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Advanced Surgical Procedures at Affordable Cost</b>
                        </h2>
                        <p class="service-details__text">
                            At <strong>P.D. Hinduja Sindhi Hospital,</strong> we offer <strong>advanced surgical
                                procedures at affordable cost,</strong> combining <strong>modern technology</strong>
                            with expert care. Whether you need <strong>gallbladder surgery, hernia repair,</strong> or
                            <strong>gastrointestinal treatment,</strong> we offer <strong>minimally invasive
                                techniques</strong> that ensure faster recovery and lower costs.
                        </p>

                        <ul>
                            <li><strong>Advanced technology</strong> for <strong>laparoscopic surgeries</strong> means
                                <strong>faster recovery, minimal scarring,</strong> and <strong>reduced hospital
                                    stays.</strong></li>
                            <li><strong>Personalized care</strong> throughout the <strong>pre-surgery consultation,
                                    surgery,</strong> and<strong> post-surgery recovery </strong>stages.</li>
                            <li><strong>Affordable treatment options </strong>without compromising on the quality of
                                care.</li>
                        </ul>

                        <p class="service-details__text">
                            We ensure that your treatment is not only effective but also fits within your budget.
                        </p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" ta-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Best General Surgery Hospital with Modern
                                Facilities</b></h2>
                        <p class="service-details__text">
                            When you choose <strong>P.D. Hinduja Sindhi Hospital,</strong> you’re choosing a
                            <strong>hospital with modern facilities</strong> that provide the best surgical care. Our
                            <strong>state-of-the-art operating rooms</strong> and advanced laparoscopic tools ensure
                            that you receive the safest and most effective treatments available. Here’s what you can
                            expect:
                        </p>

                        <ul>
                            <li><strong>Green OT:</strong> Our <strong>Green OT</strong> (operating theatre) meets the
                                highest standards for patient safety, ensuring the <strong>sterility</strong> and
                                <strong>cleanliness</strong> of the environment during surgery.</li>
                            <li><strong>Minimally invasive surgery</strong> using <strong>advanced laparoscopic
                                    equipment,</strong> ensuring <strong>small incisions</strong> and <strong>faster
                                    recovery.</strong></li>
                            <li><strong>Post-surgical care</strong> in <strong>modern recovery suites,</strong> designed
                                for comfort and monitored closely by our medical team.</li>
                        </ul>

                        <p class="service-details__text">
                            Our accredited hospital guarantees that your treatment is carried out in a facility equipped
                            with cutting-edge technology, ensuring your safety and comfort at every step.
                        </p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" ta-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for Your
                                Surgery?</b></h2>
                        <ul>
                            <li><strong>Experienced Surgeons:</strong> Surgeons like <strong>Dr. Prakash Babu
                                    M.N.</strong> and <strong>Dr. Preetham Raj G.</strong> bring years of experience and
                                expertise to your care.</li>
                            <li><strong>Legacy of Trust:</strong> With over 60 years of providing <strong>top-tier
                                    surgical care,</strong> we’ve earned the trust of thousands of patients.</li>
                            <li><strong>Affordable Treatment:</strong> We offer <strong>cost-effective surgical
                                    solutions</strong> without compromising on the quality of care.</li>
                            <li><strong>Modern Facilities:</strong> Our <strong>Green OT, laparoscopic tools,</strong>
                                and <strong>advanced diagnostic equipment</strong> ensure that you receive the best care
                                possible.</li>
                        </ul>

                        <p class="service-details__text">
                            Our accredited hospital guarantees that your treatment is carried out in a facility equipped
                            with cutting-edge technology, ensuring your safety and comfort at every step.
                        </p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms" ta-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Book Your Consultation Today</b></h2>

                        <p class="service-details__text">
                            Choosing surgery is a big decision, and we’re here to guide you through every
                            step.<strong><a href="contact.php"> Book your consultation</a></strong> with <strong>Dr.
                                Prakash Babu M.N.</strong> or<strong> Dr. Preetham Raj G.</strong> today, and take the
                            first step toward a <strong>healthier, happier life.</strong>
                        </p>
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
                                    <td>Dr. Prakash Babu.M.N</td>
                                    <td>M.s</td>
                                    <td>Mon, Tues, Thu, Fri</td>
                                    <td>11 A.M -1 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Prakash Babu.M.N','M.s')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Dr. Preetham Raj</td>
                                    <td>M.S (Gen. Surgery)., Dip MAS., F.MAS., FIAGES., FALS (Colorectal)., F.ACRSI,
                                        F.AIS</td>
                                    <td>Wed, Sat</td>
                                    <td>11 A.M -1 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Preetham Raj','M.S (Gen. Surgery)., Dip MAS., F.MAS., FIAGES., FALS (Colorectal)., F.ACRSI, F.AIS')">
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
                                <img src="assets/images/team/Dr-Prakash-Babu-MN.png" alt="">
                                <h4>Dr. Prakash Babu.M.N</h4>

                                <button onclick="openAppointment(
        'Dr. Prakash Babu.M.N',
        'M.s'
    )">
                                    Book an Appointment
                                </button>
                            </div>

                            <div class="d1">
                                <img src="assets/images/team/Dr-Preetham-Raj.png" alt="">
                                <h4>Dr. Preetham Raj</h4>

                                <button onclick="openAppointment(
        'Dr. Preetham Raj',
        'M.S (Gen. Surgery)., Dip MAS., F.MAS., FIAGES., FALS (Colorectal)., F.ACRSI, F.AIS'
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