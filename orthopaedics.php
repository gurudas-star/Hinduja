
<?php require_once 'config/db.php';
require_once 'includes/track_view.php'; ?>
<?php $head_title = "Orthopaedics" ?>
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
                    <h2 class="page-header__title">Orthopedic</h2>
                    <ul class="mediox-breadcrumb list-unstyled">
                        <li>
                            <span class="mediox-breadcrumb__icon"><i class="icon-home"></i></span>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span><a href="specialties.php">Specialties</a></span></li>
                        <li><span>Orthopedic</span></li>
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
                    <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <img src="assets/images/department/orthopedics.png" alt="cardiology">
                    </div>
                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Best Orthopedic Hospital in Bangalore | Bone
                                Specialist Hospital</b></h2>
                        <p class="service-details__text">At <strong>P.D. Hinduja Sindhi Hospital,</strong> we offer the
                            <strong>best orthopedic care</strong> in <strong>Bangalore,</strong> and we do it at
                            <strong>affordable prices.</strong> Whether you’re dealing with <strong>joint pain,</strong>
                            need a sports injury treated, or are thinking about joint replacement surgery, we make sure
                            the best treatment is available to you without high costs.</p>

                        <p class="service-details__text">We focus on giving you top-notch care. Our <strong>orthopedic
                                specialists</strong> are highly experienced in treating many problems, including
                            <strong>fractures, arthritis,</strong> and<strong> spinal issues,</strong> all at a price
                            that fits your budget. At <strong>P.D. Hinduja Sindhi Hospital,</strong> you can count on
                            <strong>high-quality care</strong> at <strong>affordable prices.</strong></p>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose P.D. Hinduja Sindhi Hospital for Affordable
                                Orthopedic Care?</b></h2><!-- /.service-details__sub-title -->
                        <p class="service-details__text">We know how important it is to have access to the <strong>best
                                orthopedic treatment</strong> that doesn’t cost a fortune. At <strong>P.D. Hinduja
                                Sindhi Hospital,</strong> we give you <strong>affordable treatment</strong> without
                            cutting back on the quality of care. Here’s why we’re the <strong>best choice</strong> for
                            <strong>affordable orthopedic care</strong> in <strong>Bangalore:</strong></p>

                        <ol>
                            <li><strong>Affordable Joint Replacement Surgeries</strong>
                                <p class="service-details__text">We offer knee replacement and hip replacement surgeries
                                    at a fraction of the cost compared to other hospitals. You don’t have to worry about
                                    paying too much. Our affordable joint replacement surgery is designed to help you
                                    get back to your active lifestyle quickly.
                                <ul>
                                    <li><strong>Knee Replacement Surgery:</strong> We provide both <strong>total knee
                                            replacement</strong> and <strong>partial knee replacement</strong> surgeries
                                        at affordable prices.</li>
                                    <li><strong>Hip Replacement Surgery:</strong> Whether you need a <strong>total hip
                                            replacement</strong> or a <strong>revision surgery,</strong> we make sure
                                        the cost is reasonable.</li>
                                </ul>
                                </p>
                            </li>
                            <li><strong>Affordable Trauma and Fracture Care</strong>
                                <p class="service-details__text">If you have a <strong>fracture</strong> or an injury
                                    from an accident, we offer quick, <strong>affordable treatment</strong> to help you
                                    heal. Our team provides effective care for all types of <strong>bone
                                        fractures</strong> and <strong>joint dislocations.</strong>
                                <ul>
                                    <li><strong>Pelvic Fracture Surgeries</strong></li>
                                    <li><strong>Hip and Spinal Fracture Fixation</strong></li>
                                    <li><strong>Foot, Ankle, and Hand Surgery</strong></li>
                                </ul>
                                <p class="service-details__text">We treat your injuries with the best care while keeping
                                    the costs <strong>affordable.</strong></p>
                                </p>
                            </li>
                            <li><strong>Affordable Spinal Surgery and Care</strong>
                                <p>Spinal issues like <strong>back pain, scoliosis,</strong> and <strong>herniated discs
                                    </strong>can affect your daily life. We offer <strong>affordable spinal
                                        treatments</strong> to help you heal without paying high hospital bills.
                                <ul>
                                    <li><strong>Spinal Fusion:</strong> We perform <strong>spinal fusion
                                            surgeries</strong> to help people with <strong>chronic back pain </strong>at
                                        a reasonable cost.</li>
                                    <li><strong>Minimally Invasive Spine Surgery:</strong> We use <strong>small
                                            incisions</strong> for spine surgery, so you recover faster and with less
                                        pain at an <strong>affordable cost.</strong></li>
                                </ul>
                                </p>
                            </li>
                            <li><strong>Affordable Sports Injury Treatments</strong>
                                <p class="service-details__text">Whether you’re an athlete or someone who enjoys staying
                                    active, we treat <strong>sports injuries </strong>at <strong>affordable
                                        rates.</strong> Whether it’s a <strong>knee injury</strong> or a
                                    <strong>shoulder problem,</strong> we have cost-effective solutions to help you get
                                    back to doing what you love.</p>
                                <ul>
                                    <li><strong>Knee Injuries:</strong> We offer <strong>ACL reconstruction
                                        </strong>and<strong>meniscal repair</strong> surgeries at affordable prices.
                                    </li>
                                    <li><strong>Shoulder Injuries:</strong> We perform <strong>arthroscopic rotator cuff
                                            repairs</strong> and <strong>SLAP repairs </strong>without the high costs.
                                    </li>
                                </ul>
                            </li>
                            <li><strong>Affordable Pediatric Orthopedic Care</strong>
                                <p>Children have different orthopedic needs, and we make sure our pediatric orthopedic
                                    services are affordable for families. From <strong>scoliosis</strong> to <strong>hip
                                        deformities,</strong> we offer treatments that fit your budget.</p>
                                <ul>
                                    <li><strong>Pediatric Scoliosis Surgery</strong></li>
                                    <li><strong>Fracture Care for Children</strong></li>
                                    <li><strong>Hip Reconstruction for Children</strong></li>
                                </ul>
                            </li>
                        </ol>
                        <p>We provide <strong>affordable care</strong> for your child’s orthopedic needs so they can
                            heal and grow strong.</p>

                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Comprehensive Rehabilitation at an Affordable
                                Price</b></h2><!-- /.service-details__sub-title -->
                        <p class="service-details__text">Rehabilitation is a key part of your recovery. At<strong> P.D.
                                Hinduja Sindhi Hospital,</strong> we offer <strong>affordable rehabilitation services
                            </strong>to help you recover fully. Our <strong>physiotherapy </strong>and <strong>yoga
                                therapy </strong>services ensure that you regain strength and mobility after surgery or
                            injury.
                        <ul>
                            <li><strong>Post-Surgery Physiotherapy:</strong> We provide <strong>affordable
                                    physiotherapy</strong> sessions to help you heal faster.</li>
                            <li><strong>Yoga Therapy & Lifestyle Clinic:</strong> Our <strong>integrated rehab
                                    services,</strong> including <strong>yoga therapy,</strong> support your recovery
                                while keeping the costs low.</li>
                        </ul>
                        </p>
                    </div>

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">
                        <h2 class="service-details__sub-title"><b>Why Choose Affordable Orthopedic Care at P.D. Hinduja
                                Sindhi Hospital?</b></h2><!-- /.service-details__sub-title -->

                        <p class="service-details__text">At <strong>P.D. Hinduja Sindhi Hospital,</strong> we believe
                            that everyone deserves access to <strong>high-quality orthopedic care,</strong> no matter
                            their financial situation. We make sure that <strong>affordable treatment </strong>is
                            available for all types of <strong>joint pain, sports injuries, fractures,</strong> and
                            <strong>spinal problems.</strong> Here’s why you should choose us:</p>
                        <ul>
                            <li><strong>Affordable Care Without Compromising Quality:</strong> Our treatments are
                                <strong>affordable,</strong> but we don’t cut corners when it comes to
                                <strong>quality.</strong></li>
                            <li><strong>Experienced Orthopedic Surgeons:</strong> Our team has years of experience in
                                <strong>joint replacement surgeries, sports injuries,</strong> and <strong>spinal
                                    care,</strong> and we ensure you get the best treatment at affordable prices. The
                                orthopedic department at our hospital is led by <strong>Dr. Uday Kumar </strong>who is
                                one of the best orthopedic doctor in Bangalore.</li>
                            <li><strong>Complete Care:</strong> From <strong>diagnosis</strong> to
                                <strong>surgery</strong> to rehabilitation, we provide a full range of
                                <strong>affordable orthopedic services</strong> to help you recover quickly and safely.
                            </li>
                        </ul>
                    </div>

                    <div class="service-details__faq">
                        <h3 class="service-details__faq__title service-details__sub-title">FAQs</h3>
                        <!-- /.service-details__sub-title -->
                        <div class="faq-accordion mediox-accordion" data-grp-name="mediox-accordion">
                            <div class="accordion active wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                <div class="accordion-title">
                                    <h4>
                                        What conditions do you treat in the Orthopedics Departments?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We treat a wide range of musculoskeletal conditions, including fractures,
                                            joint pain, spine injuries, sports injuries, arthritis, and congenital
                                            deformities.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="50ms">
                                <div class="accordion-title">
                                    <h4>
                                        What types of joint replacement surgeries do you offer?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>We offer joint replacement surgeries, including hip and knee replacements,
                                            using minimally invasive techniques for faster recovery and reduced pain.
                                        </p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you approach the treatment of spine injuries?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our approach to spine injuries includes a combination of advanced surgical
                                            techniques, physical therapy, and pain management, tailored to the specific
                                            needs of each patient.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->
                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What should I expect during my recovery from Orthopedic surgery?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Recovery times vary depending on the type of surgery. Our team will provide
                                            you with a personalized rehabilitation plan to help you regain strength,
                                            mobility, and confidence.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->

                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        Do you offer non-surgical treatment options?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Yes, we offer a range of non-surgical treatments, including physical therapy,
                                            pain management, and Orthopaedic rehabilitation, to help manage and
                                            alleviate musculoskeletal conditions.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div><!-- /.accordion-item -->

                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        How do you handle emergency trauma cases?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our Orthopaedics Department is equipped to handle emergency trauma cases,
                                            providing prompt surgical and non-surgical interventions to ensure optimal
                                            recovery.</p>
                                    </div><!-- /.inner -->
                                </div><!-- /.accordion-content -->
                            </div>

                            <div class="accordion wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <div class="accordion-title">
                                    <h4>
                                        What makes your Orthopaedic care unique?
                                        <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                    </h4>
                                </div><!-- /.accordion-title -->
                                <div class="accordion-content">
                                    <div class="inner">
                                        <p>Our Orthopaedic care is distinguished by our holistic approach, advanced
                                            technology, and commitment to providing personalized care with a focus on
                                            patient well-being.</p>
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
                                    <td>Dr. Uday Kumar</td>
                                    <td>M.S., D.N.B</td>
                                    <td>Mon/Tue/Wed/Fri</td>
                                    <td>11 A.M -1 P.M</td>
                                    <td>
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Uday Kumar','M.S., D.N.B')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td rowspan="2">Dr. Manohar.C.V</td>
                                    <td rowspan="2">D Ortho., D.N.B</td>
                                    <td>Thu/Sat</td>
                                    <td>11 A.M – 4 P.M</td>
                                    <td rowspan="2">
                                        <a href="javascript:void(0)" class="opd-btn"
                                            onclick="openAppointment('Dr. Manohar.C.V','D Ortho., D.N.B')">
                                            Book an Appointment
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Mon/Tue/Wed/Fri</td>
                                    <td>1. P.M – 3 P.M</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    

                    <div class="service-details__inner-two wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="00ms">

                        <h2 class="service-details__sub-title"><b>Doctors</b></h2>

                        <div class="doctor-section">

                            <div class="d1">
                                <img src="assets/images/team/Dr-Uday-Kumar-img.png" alt="">
                                <h4>Dr. Uday Kumar</h4>

                                <button onclick="openAppointment(
        'Dr. Uday Kumar',
        'M.S., D.N.B'
    )">
                                    Book an Appointment
                                </button>
                            </div>

                            <div class="d1">
                                <img src="assets/images/team/Dr-Manohar-CV.png" alt="">
                                <h4>Dr. Manohar.CV</h4>

                                <button onclick="openAppointment(
        'Dr. Manohar.CV',
        'D Ortho., D.N.B'
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